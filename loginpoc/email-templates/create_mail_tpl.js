var aftFooter={

};
var pipFooter={

};
var demo_non_utp_gbp={
	"language":"en",
	"currency":"gbp",
	"text":"Simply Open Your Account and place 1 trade by Monday, October 24th 2016",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var demo_utp_gbp={
	"language":"en",
	"currency":"gbp",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var demo_non_utp_eur={
	"language":"en",
	"currency":"eur",
	"text":"Simply Open Your Account and place 1 trade by Monday, October 24th 2016",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var demo_utp_eur={
	"language":"en",
	"currency":"eur",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var demo_non_utp_usd={
	"language":"en",
	"currency":"usd",
	"text":"Simply Open Your Account and place 1 trade by Monday, October 24th 2016",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var demo_utp_usd={
	"language":"en",
	"currency":"usd",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
	"learnMore":"Learn More",
	"footer": aftFooter
};
var email_2_live_funded_non_utp={
	"language":"en",
	"text":"Simply Update Your Account and place 1 trade by Monday, October 24th 2016",
	"learnMore":"Learn More",
	"footer": pipFooter
};
var email_2_live_non_funded_non_utp={
	"language":"en",
	"text":"Simply Activate Your Account and place 1 trade by Monday, October 24th 2016",
	"learnMore":"Learn More",
	"footer": pipFooter
};
var live_utp_funded={
	"language":"en",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
	"learnMore":"Learn More",
	"footer": pipFooter
};
var live_utp_nonfunded={
	"language":"en",
	"line1":"Great news, Academy of Financial Trading and ETX have come together to provide all Ultimate Traders",
	"line2":"More Markets",
	"line3":"More Support",
	"line4":"Razor Sharp Spreads",
	"learnMore":"Learn More",
	"footer": pipFooter
};
var _=require('underscore');
var fs=require("fs");
var demo_non_utp_config_page = fs.readFileSync('./demo_non_utp.html', "utf8");
var demo_utp_config_page = fs.readFileSync('./demo_utp.html', "utf8");
var email_2_live_funded_non_utp_config_page = fs.readFileSync('./email_2_live_funded_non_utp.html', "utf8");
var email_2_live_non_funded_non_utp_config_page = fs.readFileSync('./email_2_live_non_funded_non_utp.html', "utf8");
var live_utp_funded_config_page = fs.readFileSync('./email_2_live_funded_utp.html', "utf8");
var live_utp_nonfunded_config_page = fs.readFileSync('./email_2_live_non_funded_utp.html', "utf8");

fs.writeFileSync(__dirname + '/final-emails/en/gbp/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_gbp));
fs.writeFileSync(__dirname + '/final-emails/en/gbp/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_gbp));
fs.writeFileSync(__dirname + '/final-emails/en/usd/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_usd));
fs.writeFileSync(__dirname + '/final-emails/en/usd/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_usd));
fs.writeFileSync(__dirname + '/final-emails/en/eur/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_eur));
fs.writeFileSync(__dirname + '/final-emails/en/eur/demo_utp.html', _.template(demo_utp_config_page)(demo_utp_eur));

fs.writeFileSync(__dirname + '/final-emails/en/gbp/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_gbp));
fs.writeFileSync(__dirname + '/final-emails/en/gbp/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_gbp));
fs.writeFileSync(__dirname + '/final-emails/en/usd/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_usd));
fs.writeFileSync(__dirname + '/final-emails/en/usd/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_usd));
fs.writeFileSync(__dirname + '/final-emails/en/eur/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_eur));
fs.writeFileSync(__dirname + '/final-emails/en/eur/demo_non_utp.html', _.template(demo_non_utp_config_page)(demo_non_utp_eur));

fs.writeFileSync(__dirname + '/final-emails/en/live_utp_funded.html', _.template(live_utp_funded_config_page)(live_utp_funded));
fs.writeFileSync(__dirname + '/final-emails/en/live_utp_non_funded.html', _.template(live_utp_nonfunded_config_page)(live_utp_nonfunded));
fs.writeFileSync(__dirname + '/final-emails/en/live_non_utp_funded.html', _.template(email_2_live_funded_non_utp_config_page)(email_2_live_funded_non_utp));
fs.writeFileSync(__dirname + '/final-emails/en/live_non_utp_non_funded.html', _.template(email_2_live_non_funded_non_utp_config_page)(email_2_live_non_funded_non_utp));
