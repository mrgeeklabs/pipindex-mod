<?php if ( (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) || (isset($_GET['email']) && $_GET['email'] == "") ) header('LOCATION:http://pipindex.com'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
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
<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php');
$lang = 'en';
$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . '/new_includes/translation_files/en/thankyou.php';
$translationsPath = $_SERVER['DOCUMENT_ROOT'] . '/new_includes/translation_files/' . $lang . '/thankyou.php';

if (!file_exists($translationsPath)) {
	include $defaultTranslationsPath;
} else {
	include $translationsPath;
}
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/header.php"; ?>
<div class="thankYouContainer">
	<div class="rightTick">
		<img src="https://s3-eu-west-1.amazonaws.com/shawaftassets/img/website/green-tick.svg" />
	</div>
	<div class="thankYouTitle"><?= translateLabel("Thank You!", $translations) ?></div>

	<div class="whatHappensContainer">
		<!-- <div class="text1">What Happens next?</div>
		<div class="mailIcon"><img src="" alt=""></div>
		<div class="text2">An email has been sent with your new account login details</div> -->
		<div class="text1">Your request to transition your account has been received.</div>
	</div>

	<?php echo '<img src="'. baseURL() .'trackevents.php?email=' .getEmailFromCookie() .'&eventType=accept-terms"/>'; ?>
</div>
<div class="whathappennext">
	<h3>What happens next?</h3>
	<img src="new-static/images/email.svg" height="41px" width="45px" />
	<h4>An email will be sent shortly with your new account login details</h4>
</div>
<div class="lp3-wrapper">
	<div class="update-steps-container">
		<div id="update-steps-wrapper">
			<img src="new-static/images/Asset2.svg" style="width: 70%;padding-bottom: 20px;">
			<div style="display: flex;">
				<div class="steps">
					<p class="step-info">Simply follow the steps to login and update some information</p>
				</div>
				<div class="steps">
					<p class="step-info">Once updated your new dedicated ETX account manager will contact you</p>
				</div>
				<div class="steps">
					<p class="step-info">Have access to more markets, at lower cost, with greater support</p>
				</div>
			</div>
		</div>
		<!-- <img src="new-static/images/down-icon.png"  class="down-icon"/> -->
		<!-- <a class="btn update-account-button" href="https://www.etxcapital.com/account/sign-in">CLICK HERE TO GO TO YOUR NEW LOGIN</a>
		<p class="remember">Remember your details were just sent by email</p> -->
	</div>
</div>
<div class="thankyou-footer">
	<p>From everyone here at PipIndex we would like to thank you for your custom and look forward to further supporting your educational needs.</p>
	<p>As a parting gift, don’t forget to place that first trade by Monday 2pm on October 17th 2016 BST, to be in with a chance to win <span>£10,000</span></p>
</div>
<div style="background-color: #f6f6f6;font-family: Montserrat Light;text-align: center;padding-bottom: 65px;height: 370px;">
	<img src="new-static/images/Asset34.svg" style="width: 25px;height: 26px;margin: 0 auto;margin-top: 35px;">
	<p class="contact-text" style="padding-bottom: 40px;padding-top: 10px;font-size: 15px;
	font-weight: 300;
	line-height: 1.7;
	text-align: center;
	color: #6d6e71;">In the meantime should you have any questions or queries do feel free to contact us directly at ETX for further support:</p>

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
<footer>
	<div class="main-footer">
        <p style="margin-top:-10px; font-size:13px; color:#e6e6e6; margin-top:10px;">RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.  <a href="http://www.pipindex.com/risk-warning.html"><span style="color:#fff">Click here</span></a> to view the full risk warning.<br /><br>
        <span style="font-size:11px">PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK<br /><br />PipIndex Capital Markets Limited and the Academy of Financial Trading (<a href="http://www.academyft.com/" target="_blank"><span style="color:#fff">www.academyft.com</span></a>) share the same beneficial owners.<br />PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.</span>
        </p><br><br>
		<!-- <div class="social">

			<a href="https://www.facebook.com/pages/Pip-Index-Capital-Markets/332922063514919" target="_blank"><img src="new-static/images/fb.png" alt="facebook icon"></a>

			<a href="https://twitter.com/PipIndex" target="_blank"><img src="new-static/images/twitter.png" alt="twitter icon"></a>

			<a href="http://www.linkedin.com/company/pip-index?trk=company_name" target="_blank"><img src="new-static/images/linkdn.png" alt="linkedin icon"></a>

			<a href="https://plus.google.com/114948536588787746452" rel="publisher" target="_blank"><img src="new-static/images/gplus.png" alt="google plus icon"></a>

		</div> -->

		<p style="width:100%; margin:0 auto; text-align:right; color:#fff; margin-top:10px">PipIndex Capital Markets<br>&copy; 2016 |  PipIndex Capital Markets</p>
	</div>
</footer>
</body>
</html>
