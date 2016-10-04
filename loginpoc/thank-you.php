<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">

</head>
<body class="thankyou-body">
<?php
require_once('utils.php');
$lang = 'en';
$defaultTranslationsPath = 'translation_files/en/thank-you.php';
$translationsPath = 'translation_files/' . $lang . '/thank-you.php';

if (!file_exists($translationsPath)) {
	include $defaultTranslationsPath;
} else {
	include $translationsPath;
}
?>
<?php include "header.php"; ?>
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
	<img src="images/email.svg" height="41px" width="45px" />
	<h4>An email has been sent with your new account login details</h4>
</div>
<div class="lp3-wrapper">
	<div class="update-steps-container">
		<div id="update-steps-wrapper">
			<img src="images/Asset2.svg" style="width: 70%;padding-bottom: 20px;">
			<div style="display: flex;">
				<div class="steps">
					<p class="step-info">Simply follow the steps to loginand update some information</p>
				</div>
				<div class="steps">
					<p class="step-info">Once updated your new dedicatedETX account manager will contact you</p>
				</div>
				<div class="steps">
					<p class="step-info">Have access to more markets, atlower cost, with greater support</p>
				</div>
			</div>
		</div>
		<img src="images/down-icon.png"  class="down-icon"/>
		<a class="btn update-account-button" href="tnc.php">CLICK HERE TO GO TO YOUR NEW LOGIN</a>
		<p class="remember">Remember your details were just sent by email</p>
	</div>
</div>
<div class="thankyou-footer">
	<p>From everyone here at PipIndex we would like to thank you for your custom and look forward to further supporting your educational needs.As a parting gift, don’t forget to place that first trade by Monday 2pm on October 17th 2016 BST, to be in with a chance to win £10,000</p>
</div>
</body>
</html>
