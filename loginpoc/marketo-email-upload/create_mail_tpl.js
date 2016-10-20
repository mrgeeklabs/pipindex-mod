var _=require('underscore');
var fs=require("fs");
var mkdirp = require('mkdirp');
var he = require('he');
var languages=["en","de","es","fr","it","pt"];
var kinds=["demo_utp","demo_non_utp","live_fu","live_fnu","live_nfu","live_nfnu"];
var learnMore={
	"en":"Learn More",
	"de":"Mehr lernen",
	"es":"Aprende más",
	"fr":"Apprendre encore plus",
	"it":"Per saperne di più",
	"pt":"Aprenda Mais",
}
String.prototype.replaceAll = function(target, replacement) {
  return this.split(target).join(replacement);
};

var codesFile = fs.readFileSync('./character_codes', "utf8");
var codesArray=codesFile.split("\n");
kinds.forEach(function(kind){
	var templateFile = fs.readFileSync('./template_'+kind+'.json', "utf8");
	languages.forEach(function(language){
		var string = fs.readFileSync('./'+language+".txt", "utf8");
		var string=he.encode(string, {
		  'useNamedReferences': false,
		  'decimal': true
		});
		var array=string.split("\n")
		var targetFilePath="./"+kind+"/"+language+".json";
		fs.writeFileSync(targetFilePath, _.template(templateFile)({
			data: array,
			language: language,
			learnMore: learnMore[language]
		}));
		console.log(kind, language);
	});	
})
var templateFile = fs.readFileSync('./template/template.html', "utf8");
kinds.forEach(function(kind){
	languages.forEach(function(language){
		var dataFilePath="./"+kind+"/"+language+".json";

		console.log(dataFilePath);
		var templateData = JSON.parse(fs.readFileSync(dataFilePath, "utf8"));
		if(language=="fr"){
			templateData["cta"]["font"]="22px";	
			templateData["cta"]["width"]="350px";
		}
		var targetFilePath=__dirname + '/final-emails/'+language+'/'+templateData.targetFileName;		
		console.log(kind, language,targetFilePath);
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