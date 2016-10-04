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
		<div class="text1">What Happens next?</div>
		<div class="mailIcon"><img src="" alt=""></div>
		<div class="text2">An email has been sent with your new account login details</div>
	</div>

	<?php echo '<img src="'. baseURL() .'loginpoc/trackevents.php?email=' .getEmailFromCookie() .'&eventType=accept-terms"/>'; ?>
</div>
</body>
</html>
