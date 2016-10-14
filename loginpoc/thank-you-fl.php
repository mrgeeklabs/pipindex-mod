<?php if ( (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) || (isset($_GET['email']) && $_GET['email'] == "") ) header('LOCATION:http://pipindex.com'); ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
$currency = isset($_GET['currency']) ? trim($_GET['currency'])  : 'gbp';
$allowedCurrency = array("usd", "gbp", "eur");
$allowedLanguages = array("en", "it", "es","de", "fr", "pt");
if (in_array($currency, $allowedCurrency )===false ) {
    $currency="gbp";
}
if (in_array($lang, $allowedLanguages )===false ) {
    $lang="en";
}
$prizeMoney=getPrizeMoney($currency);
$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/thankyou.php";
include $defaultTranslationsPath;
if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $translations[$lang]["title"]?></title>
    <meta charset="utf-8">
    <link rel="icon" href="new-static/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="new-static/images/favicon.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="new-static/css/style.css">

</head>
<body class="thankyou-body">

<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/utp_funded_header.php"; ?>
<div class="thankYouContainer">
    <div class="rightTick">
        <img src="https://s3-eu-west-1.amazonaws.com/shawaftassets/img/website/green-tick.svg" />
    </div>
    <div class="thankYouTitle"><?= $translations[$lang]["thankYouContainer"][0] ?></div>

    <div class="whatHappensContainer">
        <div class="text1"><?= $translations[$lang]["thankYouContainer"][1] ?></div>
    </div>

    <?php echo '<img src="'. baseURL() .'trackevents.php?email=' .getEmailFromCookie() .'&eventType=accept-terms"/>'; ?>
</div>
<div class="whathappennext">
    <h3><?= $translations[$lang]["whathappennext"][0] ?></h3>
    <img src="new-static/images/email.svg" height="41px" width="45px" />
    <h4><?= $translations[$lang]["whathappennext"][1] ?></h4>
</div>
<div class="lp3-wrapper">
    <div class="update-steps-container">
        <div id="update-steps-wrapper">
            <div id="topBorder" style="padding-bottom: 20px">
                <div class="steps">
                    <img src="new-static/images/circletop.jpg" width="30">
                </div>
                <div class="steps">
                    <img src="new-static/images/circletop.jpg" width="30">
                </div>
                <div class="steps">
                    <img src="new-static/images/circletop.jpg" width="30">
                </div>
            </div>
            <div style="display: flex;">
                <?php
                foreach($translations[$lang]["update-steps-container"] as $step) {
                    ?>
                    <div class="steps">
                        <p class="step-info"><?= $step ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <!-- <img src="new-static/images/down-icon.png"  class="down-icon"/> -->
        <!-- <a class="btn update-account-button" href="https://www.etxcapital.com/account/sign-in">CLICK HERE TO GO TO YOUR NEW LOGIN</a>
        <p class="remember">Remember your details were just sent by email</p> -->
    </div>
</div>
<div class="thankyou-footer">
    <p><?= $translations[$lang]["thankyou-footer"][0] ?></p>
    <p><?= $translations[$lang]["thankyou-footer"][1] ?><span><?=$prizeMoney ?></span></p>
</div>
<div style="background-color: #f6f6f6;font-family: Montserrat Light;text-align: center;padding-bottom: 65px;height: 370px;">
    <img src="new-static/images/Asset34.svg" style="width: 25px;height: 26px;margin: 0 auto;margin-top: 35px;">
    <p class="contact-text" style="padding-bottom: 40px;padding-top: 10px;font-size: 15px;
	font-weight: 300;
	line-height: 1.7;
	text-align: center;
	color: #6d6e71;"><?= $translations[$lang]["contact-text"] ?></p>

    <div class="contact-detail-container" style="color: #333132;font-family: Montserrat Light;
	font-size: 15px;
	line-height: 2.1;
	text-align: center;
	color: #333132;">
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">UK</span> : 0207 392 1494 and Freephone 0800 138 4582</div>
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">Italy</span> :   +44(0) 207 392 1400 Freephone 800 145 624</div>
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">Spain</span> : +44(0) 207 392 1400  Freephone +34 900 838 621</div>
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">Germany</span> :  +44(0) 207 392 1400  Freephone   0800 589 2619</div>
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">Austria</span> :  +44(0) 207 392 1400  Freephone  0800 006 297</div>
        <div class="contact-detail col-md-12 col-sm-12"><span style="font-family: Montserrat;font-weight: bold;">France</span> : +44(0) 207 392 1400  Freephone  0805 111 253</div>
    </div>
</div>
<?php
include ($_SERVER['DOCUMENT_ROOT'] .'/footer.php');
?>
</body>
</html>