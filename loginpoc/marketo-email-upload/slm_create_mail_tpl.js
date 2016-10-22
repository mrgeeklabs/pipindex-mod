var _=require('underscore');
var fs=require("fs");
var mkdirp = require('mkdirp');
var he = require('he');
var languages=["en","de","es","fr","it","pt"];
var kinds=["demo_utp","demo_non_utp","live_fu","live_fnu","live_nfu","live_nfnu"];
var pageIds=["du","dnu","fu","fnu","nfu","nfnu"];
var learnMore = {
	"en": "Learn More",
	"de": "Mehr lernen",
	"es": "Aprende más",
	"fr": "Apprendre encore plus",
	"it": "Per saperne di più",
	"pt": "Aprenda Mais",
};
String.prototype.replaceAll = function(target, replacement) {
  return this.split(target).join(replacement);
};

var codesFile = fs.readFileSync('./character_codes', "utf8");
var codesArray=codesFile.split("\n");
var attributes={
	"du": {},
	"dnu": {},
	"fu": {},
	"fnu": {},
	"nfnu": {},	
	"nfu": {}
};
kinds.forEach(function(kind,kindIndex){
	mkdirp.sync("./second_last_email/"+kind+"/");	
	var templateFile = fs.readFileSync('./second_last_email/template_'+kind+'.json', "utf8");
	languages.forEach(function(language) {
		var string = fs.readFileSync('./second_last_email/'+language+".txt", "utf8");
		var string=he.encode(string, {
		  'useNamedReferences': false,
		  'decimal': true
		});
		var array=string.split("\n")

		for(var index=0;index<array.length;index+=8) {
			if(! attributes[array[index]][language]){
				attributes[array[index]][language]={
					data: []
				};				
			}
			attributes[array[index]][language].data.push(array[index+1]);
			attributes[array[index]][language].data.push(array[index+2]);
			attributes[array[index]][language].data.push(array[index+3]);
			attributes[array[index]][language].data.push(array[index+4]);
			attributes[array[index]][language].data.push(array[index+5]);
			attributes[array[index]][language].data.push(array[index+6]);
			attributes[array[index]][language].data.push(array[index+7]);
		}
		var targetFilePath="./second_last_email/"+kind+"/"+language+".json";
		var trackerUrl="http://www.pipindex.com/trackevents.php?email={!Lead.Email}&eventType=mail-open";
		var ctaLink="http://www.pipindex.com/offer-"+pageIds[kindIndex]+".php?email={!Lead.Email}&lang="+language;

		if(pageIds[kindIndex]==="du" || pageIds[kindIndex]==="dnu"){
			trackerUrl="http://www.academyft.com/trackevents.php?email={{lead.Email Address}}&eventType=mail-open";
			ctaLink="http://www.academyft.com/offer-"+pageIds[kindIndex]+".php?email={{lead.Email Address}}&lang="+language+"&currency={{lead.Inferred Currency_mkto:default=usd}}";
		}
		fs.writeFileSync(targetFilePath, _.template(templateFile)({
			data: attributes[pageIds[kindIndex]][language].data,
			pageId: pageIds[kindIndex],
			language: language,
			trackerUrl: trackerUrl,
			ctaLink: ctaLink,
			targetFileName: kind+".html"
		}));
		console.log(kind, language);
	});	
})

kinds.forEach(function(kind, kindIndex){
	var templateFile = fs.readFileSync('./second_last_email/template_SECOND_LAST_DAY_EMAIL.html', "utf8");
	if(pageIds[kindIndex]==="du" || pageIds[kindIndex]==="dnu"){
		templateFile = fs.readFileSync('./second_last_email/demo_template_SECOND_LAST_DAY_EMAIL.html', "utf8");
	}
	languages.forEach(function(language){
		var dataFilePath="./second_last_email/"+kind+"/"+language+".json";
		console.log(dataFilePath);
		var templateData = JSON.parse(fs.readFileSync(dataFilePath, "utf8"));	
		for(var index=0;index<templateData.footer[language].length;index++){
		templateData.footer[language][index]=he.encode(templateData.footer[language][index], {
		  'useNamedReferences': false,
		  'decimal': true
		});
	}	
		/*if(language=="fr"){
			templateData["cta"]["font"]="22px";	
			templateData["cta"]["width"]="350px";
		}*/

		var targetFilePath=__dirname + '/second_last_email/final-emails/'+language+'/'+templateData.targetFileName;		
		console.log(templateData.footer[language]);
		fs.writeFileSync(targetFilePath, _.template(templateFile)(templateData));
	});
});

/*
var templateFile = fs.readFileSync('./template/template.html', "utf8");
var templateData = JSON.parse(fs.readFileSync('./demo_non_utp.en.json', "utf8"));
var language="en";
var currency="gbp";
var targetFilePath=__dirname + '/final-emails/'+language+'/'+currency+'/'+templateData.targetFileName;
fs.writeFileSync(targetFilePath, _.template(templateFile)(templateData));
*/
/*var mammoth =require('mammoth');
var cheerio = require('cheerio');

mammoth.convertToHtml({path: './docs/PT.docx'}).then(function(result){	
	var html=result.value.replace("/<br />/g","");
	$ = cheerio.load(html);
	$('p').each(function(i, elem) {
		console.log($(elem).text());
	});
});	*/