var _=require('underscore');
var fs=require("fs");
var mkdirp = require('mkdirp');
var he = require('he');
var languages=["en","de","es","fr","it","pt"];
var kinds=["live_fu","live_fnu","live_nfu","live_nfnu"];
var pageIds=["fu","fnu","nfu","nfnu"];
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
var mailLocation="/sunday-mails/";
var attributes={
	"du": {},
	"dnu": {},
	"fu": {},
	"fnu": {},
	"nfnu": {},	
	"nfu": {}
};
kinds.forEach(function(kind,kindIndex){
	mkdirp.sync( __dirname + mailLocation+kind+"/");	
	var templateFile = fs.readFileSync( __dirname + mailLocation+'live_template.json', "utf8");
	//console.log(templateFile);	
	/*if(pageIds[kindIndex]==="du" || pageIds[kindIndex]==="dnu"){
		templateFile = fs.readFileSync( __dirname + mailLocation+"template.json", "utf8");
	}*/	
	languages.forEach(function(language) {
		var string = fs.readFileSync( __dirname + mailLocation+language+".txt", "utf8");
		var string=he.encode(string, {
		  'useNamedReferences': false,
		  'decimal': true
		});
		var array=string.split("\n")
		for(var index=0;index<array.length;index+=5) {
			if(! attributes[array[index]][language]){
				attributes[array[index]][language]={
					data: []
				};				
			}			
			attributes[array[index]][language].data.push(array[index+1]);
			attributes[array[index]][language].data.push(array[index+2]);
			attributes[array[index]][language].data.push(array[index+3]);
			attributes[array[index]][language].data.push(array[index+4]);
		}
		var targetFilePath= __dirname + mailLocation+kind+"/"+language+".json";
		console.log(targetFilePath);
		var trackerUrl="http://www.pipindex.com/trackevents.php?email={!Lead.Email}&eventType=mail-open";
		var ctaLink="http://www.pipindex.com/extension/offer-"+pageIds[kindIndex]+".php?email={!Lead.Email}&lang="+language;
		//var ctaLink="http://clients.etxcapital.com/Login/ResetPassword";

		if(pageIds[kindIndex]==="du" || pageIds[kindIndex]==="dnu"){
			trackerUrl="http://www.academyft.com/trackevents.php?email={{lead.Email Address}}&eventType=mail-open";
		}
		if(pageIds[kindIndex]==="du"){
			ctaLink="http://www.academyft.com/extension/offer-"+pageIds[kindIndex]+".php?email={{lead.Email Address}}&lang="+language+"&currency={{lead.Inferred Currency_mkto:default=usd}}";
		}
		if(pageIds[kindIndex]==="dnu"){
			ctaLink="http://www.academyft.com/extension/offer-"+pageIds[kindIndex]+".php?email={{lead.Email Address}}&lang="+language+"&currency={{lead.Inferred Currency_mkto:default=usd}}";
		}
		if(pageIds[kindIndex]==="fu"){
			//ctaLink="http://www.pipindex.com/terms-and-condition.php?email={!Lead.Email}&lang="+language;
		}
		if(pageIds[kindIndex]==="fnu"){
			//ctaLink="http://www.pipindex.com/terms-and-condition.php?email={!Lead.Email}&lang="+language;
		}
		if(pageIds[kindIndex]==="nfu"){
			//ctaLink="http://www.pipindex.com/terms-and-condition.php?email={!Lead.Email}&lang="+language;
		}
		if(pageIds[kindIndex]==="nfnu"){
			//ctaLink="http://www.pipindex.com/terms-and-condition.php?email={!Lead.Email}&lang="+language;
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
	var templateFile = fs.readFileSync( __dirname + mailLocation+'template.html', "utf8");
	/*if(pageIds[kindIndex]==="du" || pageIds[kindIndex]==="dnu"){
		templateFile = fs.readFileSync( __dirname + mailLocation+'demo_template.html', "utf8");
	}*/	
	languages.forEach(function(language){
		var dataFilePath= __dirname + mailLocation+kind+"/"+language+".json";
		var templateData = JSON.parse(fs.readFileSync(dataFilePath, "utf8"));	
		for(var index=0;index<templateData.footer[language].length;index++){
			templateData.footer[language][index]=he.encode(templateData.footer[language][index], {
			  'useNamedReferences': false,
			  'decimal': true
			});
		}
		var targetFilePath=__dirname + mailLocation+'final-emails/'+language+'/'+templateData.targetFileName;		
		mkdirp.sync(__dirname +  mailLocation+'final-emails/'+language+'/');
		fs.writeFileSync(targetFilePath, _.template(templateFile)(templateData));
	});
});