function generateForlanguage(language, text, aftFooter, pipFooter) {
	console.log(language)
	var demo_non_utp_gbp={
		"language":language,
		"currency":"gbp",
		"text": text.textOpen,
		"learnMore": text.learnMore,
		"footer": aftFooter
	};
	var demo_utp_gbp={
		"language":language,
		"currency":"gbp",
		"line1": text.line1,
		"line2": text.line2,
		"line3": text.line3,
		"line4": text.line4,
		"learnMore": text.learnMore,
		"footer": aftFooter
	};
	var demo_non_utp_eur={
		"language":language,
		"currency":"eur",
		"text": text.textOpen,
		"learnMore":text.learnMore,
		"footer": aftFooter
	};
	var demo_utp_eur={
		"language":language,
		"currency":"eur",
		"line1": text.line1,
		"line2": text.line2,
		"line3": text.line3,
		"line4": text.line4,
		"learnMore": text.learnMore,
		"footer": aftFooter
	};
	var demo_non_utp_usd={
		"language":language,
		"currency":"usd",
		"text": text.textOpen,
		"learnMore": text.learnMore,
		"footer": aftFooter
	};
	var demo_utp_usd={
		"language": language,
		"currency":"usd",
		"line1": text.line1,
		"line2": text.line2,
		"line3": text.line3,
		"line4": text.line4,
		"learnMore": text.learnMore,
		"footer": aftFooter
	};
	var email_2_live_funded_non_utp={
		"language":language,
		"text": text.textUpdate,
		"learnMore": text.learnMore,
		"footer": pipFooter
	};
	var email_2_live_non_funded_non_utp={
		"language":language,
		"text": text.textActivate	,
		"learnMore": text.learnMore,
		"footer": pipFooter
	};
	var live_utp_funded={
		"language": language,
		"line1": text.line1,
		"line2": text.line2,
		"line3": text.line3,
		"line4": text.line4,
		"learnMore": text.learnMore,
		"footer": pipFooter
	};
	var live_utp_nonfunded={
		"language":language,
		"line1": text.line1,
		"line2": text.line2,
		"line3": text.line3,
		"line4": text.line4,
		"learnMore": text.learnMore,
		"footer": pipFooter
	};
	console.log(live_utp_nonfunded)
	var _=require('underscore');
	var fs=require("fs");
	var demo_non_utp_config_page = fs.readFileSync('./demo_non_utp.html', "utf8");
	var demo_utp_config_page = fs.readFileSync('./demo_utp.html', "utf8");
	var email_2_live_funded_non_utp_config_page = fs.readFileSync('./email_2_live_funded_non_utp.html', "utf8");
	var email_2_live_non_funded_non_utp_config_page = fs.readFileSync('./email_2_live_non_funded_non_utp.html', "utf8");
	var live_utp_funded_config_page = fs.readFileSync('./email_2_live_funded_utp.html', "utf8");
	var live_utp_nonfunded_config_page = fs.readFileSync('./email_2_live_non_funded_utp.html', "utf8");
	console.log(language);
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/gbp/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_gbp));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/gbp/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_gbp));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/usd/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_usd));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/usd/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_usd));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/eur/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_eur));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/eur/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_eur));

	fs.writeFileSync(__dirname + '/final-emails/'+language+'/gbp/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_gbp));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/gbp/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_gbp));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/usd/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_usd));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/usd/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_usd));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/eur/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_eur));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/eur/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_eur));

	fs.writeFileSync(__dirname + '/final-emails/'+language+'/live_utp_funded.html', _.template(live_utp_funded_config_page)(live_utp_funded));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/live_utp_non_funded.html', _.template(live_utp_nonfunded_config_page)(live_utp_nonfunded));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/live_non_utp_funded.html', _.template(email_2_live_funded_non_utp_config_page)(email_2_live_funded_non_utp));
	fs.writeFileSync(__dirname + '/final-emails/'+language+'/live_non_utp_non_funded.html', _.template(email_2_live_non_funded_non_utp_config_page)(email_2_live_non_funded_non_utp));
}
//ENGLISH
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};
var text= {
	"learnMore":"Learn More",
	"textOpen":"Simply Open Your Account and place 1 trade by Monday, October 24th 2016",
	"textUpdate": "Simply Update Your Account and place 1 trade by Monday, October 24th 2016",
	"textActivate": "Simply Activate Your Account and place 1 trade by Monday, October 24th 2016",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
};
var language="en";
generateForlanguage(language, text, aftFooter, pipFooter);
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};
var text= {
	"learnMore":"Mehr lernen",
	"textOpen":"Öffnen Sie einfach Ihr Konto und legen 1 Handel bis Montag, 24. Oktober 2016",
	"textUpdate": "Aktualisieren Sie einfach Ihr Konto und legen 1 Handel bis Montag, 24. Oktober 2016",
	"textActivate": "Aktivieren Sie einfach Ihr Konto und legen 1 Handel bis Montag, 24. Oktober 2016",
	"line1":"Tolle Neuigkeiten, Akademie der Finanzhandel und ETX sind zusammen gekommen, alle entscheidenden Traders mit zu stellen",
	"line2":"Mehr Märkte",
	"line3":"Mehr unterstützen",
	"line4":"Die Kleinsten Spreads",
};
var language="de";
generateForlanguage(language, text, aftFooter, pipFooter);
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};

var text= {
	"learnMore":"Apprendre encore plus",
	"textOpen":"Simplement ouvrir votre compte et placer un Trade d'ici le lundi 24 Octobre 2016",
	"textUpdate": "Simplement ouvrir votre compte et placer un Trade d'ici le lundi 24 Octobre 2016",
	"textActivate": "Il suffit d'activer votre compte et placer un Trade d'ici le lundi 24e Octobre 2016",
	"line1":"Bonnes nouvelles, l’Academy of Financial Trading et ETX sont unis pour fournir à nos Ultimate Traders",
	"line2":"Plus Marchés",
	"line3":"Plus de soutien",
	"line4":"Des spreads réduis",
};
var language="fr";
generateForlanguage(language, text, aftFooter, pipFooter);
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};

var text= {
	"learnMore":"Aprende más",
	"textOpen":"Basta con abrir su cuenta y colocar 1 operación/trade antes del lunes 24 de octubre del año 2016",
	"textUpdate": "Basta con abrir su cuenta y colocar 1 operación/trade antes del lunes 24 de octubre del año 2016",
	"textActivate": "Basta con abrir su cuenta y colocar 1 operación/trade antes del lunes 24 de octubre del año 2016",
	"line1":"Una gran noticia, Academy of Financial Trading y ETX se han unido para proporcionar a todos los Ultimate Traders ",
	"line2":"Más mercados",
	"line3":"Más soporte",
	"line4":"Spreads más razonables",
};
var language="es";
generateForlanguage(language, text, aftFooter, pipFooter);
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};

var text= {
	"learnMore":"Per saperne di più",
	"textOpen":"Basta aprire il tuo conto ed effettuare la prima negoziazione entro il lunedì 24 ottobre 2016",
	"textUpdate": "Basta aprire il tuo conto ed effettuare la prima negoziazione entro il lunedì 24 ottobre 2016",
	"textActivate": "Basta aprire il tuo conto ed effettuare la prima negoziazione entro il lunedì 24 ottobre 2016",
	"line1":"Grande notizia, Academy of Financial Trading e ETX si sono riuniti per dare a tutti gli Ultimate Traders",
	"line2":"Più mercati",
	"line3":"Più supporto",
	"line4":"Spread bassissimi",
};
var language="it";
generateForlanguage(language, text, aftFooter, pipFooter);
var aftFooter={
	"ars": "All Rights Reserved.",
	"text":"General: The Academy of Financial Trading website is for educational use only. The Academy of Financial Trading and any associated companies reserves the right to deny any application to attend any educational courses provided by the Academy of Financial Trading and associated companies should the course material be deemed unsuitable due to the domicile of the proposed attendee or for any other reason. Any courses delivered to residents of the United States of America are distributed in the United States of America by the Academy of Financial Trading LLC (United States of America). Any courses delivered to residents of any other jurisdiction outside of the United States of America are distributed by the Academy of Financial Trading Education Limited (Ireland)."
};
var pipFooter={
   "part1": "RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.",
   "part2":"PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK PipIndex Capital Markets Limited and the Academy of Financial Trading ",
   "part3":"share the same beneficial owners. PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.",
   "part4":"You will continue to receive the same regulatory protections afforded by the Financial Conduct Authority (“FCA”) upon transferring your account to ETX Capital. These include, but are not limited to, your account being in accordance with the FCA’s client money rules, the right to complain to the Financial Ombudsman Service and access to the Financial Compensation Scheme.",
   "part5":"* &pound;10,000 Prize Terms and Conditions: Only applicable to PipIndex Capital Markets customers that transfer the balance of their  trading accounts to ETX Capital and place an initial trade during the promotion period specified above, or to customers who upgrade from demo to live account during the period and place their first trade with ETX Capital. The rules are simple but we must say them out loud; upgrade your account, place your trade to enter the competition and you might be drawn as the lucky winner. Cash prize will only be credited to the customer who wins for AML reasons hence the funds will only be credited to an account in the name matching our records. The cash prize will be sent as £10,000. Should there be any foreign exchange or other bank charges such will be the responsibility of the fortunate recipient. The deadlines for the first trade prize are given with ample time hence neither PipIndex, nor ETX Capital, nor Finsa Europe Limited accept any responsibility for delays in opening or closing trading accounts, in remitting funds, or otherwise allowing a trade deal to be placed so as the customer is eligible to meet the terms and conditions of this prize draw. Any changes to the above Terms and Conditions are at the discretion of PipIndex Capital Markets."
};

var text= {
	"learnMore":"Aprenda Mais",
	"textOpen":"Simplesmente, Abra Sua conta e realize um trade até segunda-feira, 24 de Outubro de 2016",
	"textUpdate": "Basta atualizar sua conta e realizar um trade até segunda-feira, 24 de Outubro de 2016",
	"textActivate": "Basta ativar sua conta e realizar um trade até segunda-feira, 24 de Outubro de 2016",
	"line1":"Grandes novidades, a Academy of Financial Trading e a ETX se uniram para fornecer a todos os Ultimate Traders",
	"line2":"Mais Mercados",
	"line3":"Mais Suporte",
	"line4":"Spreads Menores",
};
var language="pt";
generateForlanguage(language, text, aftFooter, pipFooter);

