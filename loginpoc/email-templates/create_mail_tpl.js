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
   "part1": "Risikohinweis: Der gehebelte Handel mit Forex und CFDs beinhaltet signifikante Verlustrisiken, bis hin zu einer unbegrenzten Nachschusspflicht. Dieser Handel ist nicht für jeden Investor geeignet und Sie sollten sicher stellen, dass Sie die Risiken verstanden haben.",
   "part2":"PipIndex Capital Markets Ltd. ist eine Marke der FINSA Europe Limited. FINSA Europe Limited ist autorisiert und reguliert von der Financial Conduct Authority (unter der Referenznummer 525164). Die registrierte Niederlassung von FINSA Europe Limited lautet: Tower Bridge Business Centre, 46-48 East Smithfield, London, E1W 1AW, United Kingdom. FINSA Europe Ltd ist ein in England und Wales unter der Nummer 07073413 registriertes Unternehmen. PipIndex und PipIndex Capital Markets sind registrierte Marken der FINSA Europe Ltd. Diese Webseite gehört und wird betrieben von der FINSA Europe Limited, UK. ",
   "part3":"PipIndex Capital Markets Limited und die Academy of Financial Trading (www.academyft.com) handeln im Namen der selben wirtschaftlich Begünstigten. PipIndex Capital Markets Limited erzielt ihren Umsatz ausschließlich durch die Handelsaktivitäten ihrer Kunden.",
   "part4":"",
   "part5":"Nur anwendbar für Kunden von PipIndex Capital Markets, die die Bilanzen Ihrer Trading-Accounts zu ETX Capital transferieren und einen ersten Trade in der oben definierten Zeitspanne platzieren oder für Kunden, die in der oben definierten Zeitspanne von einem Demo- zu einem Live-Account upgraden und Ihren ersten Trade innerhalb ETX Capital platzieren. Diese Regeln sind einfach, aber wir müssen Sie klar aussprechen: Upgraden Sie Ihren Account und platzieren Sie Ihren ersten Trade um an dem Gewinnspiel teilzunehmen und vielleicht zu den glücklichen Gewinnern zu gehören. Der Bar-Preis kann nur dem Kunden gutgeschrieben werden, der unserer Prüfung gegen Geldwäsche stand halt, daher wird der Fond nur einem Kunden gutgeschrieben, dessen Name im Account unseren Daten entspricht. Der Preis wird als &pound;10,000 gesandt. Sollten Gebühren für die Annahme einer Fremdwährung entstehen, dann müssen diese vom Gewinner getragen werden. Die Deadlines für den ersten Trading-Preis werden großzügig im Voraus veröffentlicht. Somit tragen weder PipIndex, ETX Capital oder Finsa Europe Limited Verantwortung, wenn ein Kunde durch die verspätete Öffnung oder Schließung von Trading Accounts, die verspätete Anweisung von Fonds oder die verspätete Erlaubnis zur Platzierung eines Trade-Deals aufgrund der Geschäftsbedingungen nicht mehr teilnahmeberechtigt ist. Änderungen der oben genannten Allgemeinen Geschäftsbedingungen liegen im Ermessen von PipIndex Capital Markets."
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
   "part1": "AVERTISSEMENT: le trading de produits à effet de levier comporte un risque élevé pour votre capital et il est possible de perdre plus que votre investissement initial. Ces produits peuvent ne pas convenir à tous les investisseurs, donc assurez-vous de bien comprendre les risques encourus et de solliciter un avis indépendant si nécessaire.",
   "part2":"PipIndex Capital Market et PipIndex sont enresgistré au nom commerciaux de Finsa Europe Limited. Finsa Europe Limited et sont autorisés et réglementés par la Financial Conduct Authority (FCA) au Royaume-Uni. ",
   "part3":"",
   "part4":"",
   "part5":"Uniquement applicable aux clients de PipIndex Capital Markets qui transfèreront le solde de leurs comptes de Trading à ETX Capital et placeront une première opération au cours de la période promotionnelle indiquée ci-dessus et aussi aux clients qui possèdent un compte démo et qui le transformeront en compte live, pendant la période promotionnelle et qui placeront leur premier Trade avec ETX Capital. Les règles sont simples : mettre à jour votre compte, placer votre Trade pour participer au concours afin d’être tiré au sort. Ce prix en cash sera crédité sur le compte de la même personne qui correspondra aux mêmes informations de comptes que nous disposons dans notre base de données et ceci pour des raisons de lutte contre le blanchiment. Le prix est de &pound;10,000 en cash. En cas de frais de change ou autres frais bancaires, ceci seront de la responsabilité de l'heureux gagnant. Les dates limites pour le premier Trade effectué seront données avec suffisamment de temps. De ce fait, ni PipIndex, ni ETX Capital, ni Finsa Europe Limited pourront être responsables dans les retards d'ouvertures de comptes ou de clôtures, dans la remise des fonds, ou autrement permettre un Trade d’être placé de façon à ce que le client soit admis aux termes et conditions de ce tirage au sort. Toute modification des conditions ci-dessus appartiennent à la discrétion de PipIndex Capital Markets."
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
   "part1": "ADVERTENCIA DE RIESGO: Operando con productos apalancados conllevan un alto riesgo para su capital y es posible perder más de su inversión inicial. Estos productos pueden no ser adecuados para todos los inversores, por lo tanto, asegúrese de comprender plenamente los riesgos involucrados, y busque asesoramiento independiente si es necesario.",
   "part2":"PipIndex Capital Markets y PipIndex están registrados los nombres comerciales de Finsa Europe Limited. Finsa Europe Limited está autorizada y regulada por la Autoridad de Conducta Financiera (FCA) en el Reino Unido. Registro FCA número 525164. Número de compañia 07073413. Sede social: 110 Fenchurch Street, London, EC3M 5JT, Reino Unido.",
   "part3":"",
   "part4":"",
   "part5":"Sólo se aplica a los clientes PipIndex Capital Markets que transfieren el saldo de sus cuentas de operaciones a ETX Capital y  realicen una operación inicial durante el período de promoción especificado anteriormente, o para clientes que soliciten un cambio de cuenta demostración a una cuenta real durante el período y el lugar de su primer operación con ETX Capital. Las reglas son claras; hay que actualizar su cuenta, coloque su primer operación/trade para entrar en la competencia y ya tendrá la posibilidad de ser el afortunado ganador. El premio en efectivo se acreditara al cliente que gana, esto es por razones de AML (contra el lavado de dinero), por lo tanto, los fondos sólo serán  acreditados a una cuenta que coincida con el nombre que se encuentre en nuestros registros. El premio en efectivo se enviará por la suma de &pound;10.000. En caso de que haya algún gasto bancario o de otra índole, los mismos serán responsabilidad del beneficiario afortunado. Los plazos para el premio, que deben tener una primera operación activa, se dados con el tiempo suficiente, por lo tanto, ni PipIndex, ni ETX Capital, ni Finsa Europe Limited no aceptan alguna responsabilidad por los retrasos en la apertura o cierre de las operaciones, en el envío de dinero, o de lo contrario lo que permita un acuerdo comercial para ser colocado, por lo cual el cliente es elegible para cumplir con los términos y condiciones del presente sorteo. Cualquier cambio en los términos y condiciones anteriores son a discreción de PipIndex Capital Markets."
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
   "part1": "AVVERTIMENTO DI RISCHIO: Eseguire trading utilizzando la leva comporta un alto rischio per il proprio capitale ed è possibile perdere più del proprio investimento iniziale. Questi prodotti potrebbero non essere adatti a tutti gli investitori, di conseguenza assicurarsi di comprendere completamente il rischio coinvolto e richiedere consulenza indipendente se necessario.",
   "part2":"PipIndex Capital Markets e PipIndex sono nomi registrati per il trading appartenenti a Finsa Europe Limited. Finsa Europe Limited è autorizzata e regolamentata dalla Financial Conduct Authority (FCA) in Gran Bretagna. Il numero di registrazione FCA è 525164. Il numero della compagnia è 07073413. Ufficio registrato presso: 110 Fenchurch Street, Londra, EC3M 5JT, Gran Bretagna. ",
   "part3":"",
   "part4":"",
   "part5":"Applicabile solo ai clienti PipIndex Capital Markets che trasferiscono i fondi del loro conto di trading presso ETX Capital ed inseriscono un primo trade durante il periodo della promozione sopra specificato, o ai clienti che effettuano il passaggio dalla demo al conto Live durante il periodo della promozione ed inseriscono un primo trade con ETX Capital. Le regole sono semplici, ma noi dobbiamo dobbiamo specificarle per bene. Passa al conto reale, inserisci il tuo primo trade per partecipare al concorso e potresti essere estratto come il fortunato vincitore. Per la normativa sull’antiriciclaggio (AML), il premio in denaro sarà accreditato esclusivamente al vincitore, quindi i fondi verranno accreditati esclusivamente solo sul conto a nome di un cliente che rientri tra quelli presenti nei nostri registri. Il premio in denaro consisterà nell’invio di 10,000 Sterline. Nel caso ci fossero costi di cambio o altri oneri bancari, questi saranno a carico del fortunato destinatario. I termini e le scadenze della promozione sono indicati con ampio anticipo, quindi, né PipIndex, nè ETX Capital, nè Finsa Europe Limited si assumono alcuna responsabilità per ritardi nell’apertura o la chiusura di conti di trading, nell’invio di fondi, o nel consentire il posizionamento del trade che rende il cliente idoneo nel soddisfare i termini e condizioni di questo concorso a premi. Eventuali modifiche ai Termini e Condizioni di cui sopra sono a discrezione di PipIndex Capital Markets."
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
   "part1": "AVISO DE RISCO: Negociar produtos de alavancagem comporta um alto risco para o seu capital e é possível perder mais do que o seu investimento inicial. Estes produtos podem não ser aconselháveis para todos os investidores, portanto assegure-se que entende completamente os riscos envolvidos, e procure aconselho independente se necessário.",
   "part2":"A PipIndex Capital Markets e PipIndex são marcas registadas da Finsa Europe Limited. A Finsa Europe Limited está autorizada e regulamentada pelo Financial Conduct Authority (FCA) no Reino Unido. O número de registo FCA é 525164. Número da empresa 07073413. Escritório registado: 110 Fenchurch Street, London, EC3M 5JT, United Kingdom.",
   "part3":"",
   "part4":"",
   "part5":"Termos e Condições do prêmio de &pound; 10.000: aplicável apenas aos clientes PipIndex Capital Markets que transferirem o saldo de suas contas de trading para ETX Capital e realizarem um trade inicial durante o período da promoção especificado acima, ou para clientes que fizerem upgrade de sua conta demo para uma conta ativa durante o período acima citado e realize seu primeiro trade com a ETX Capital. As regras são simples: atualizar sua conta, realizar seu primeiro trade (de qualquer tamanho e por qualquer período) para entrar na competição e você já estará concorrendo. O prêmio em dinheiro só será creditado ao cliente que ganha por razões AML (contra lavagem de dinheiro), portanto, os fundos só serão creditados em uma conta de titularidade igual aos nossos registros. O prêmio em dinheiro será enviado como £ 10.000. Caso haja qualquer câmbio ou outros encargos bancários, estes serão da responsabilidade do destinatário. Os prazos para o primeiro prêmio de trading são oferecidos com tempo suficiente, portanto, nem PipIndex, nem ETX Capital, nem Finsa Europe Limited aceita qualquer responsabilidade por atrasos na abertura ou contas de trading de fechamento, em remessa de recursos, ou de outro modo permitindo que um acordo comercial para ser colocado de forma como o cliente é elegível para cumprir os termos e condições deste sorteio. Quaisquer alterações feitas aos Termos e Condições acima são a critério de PipIndex Capital Markets."
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

