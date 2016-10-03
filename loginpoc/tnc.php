<!DOCTYPE html>
<html lang="en">
		<head>
		<title>Terms & Condition | PipIndex Capital Markets</title>
		<meta charset="utf-8">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
		<![endif]-->
</head>
<body style="color: #36393e">
	<?php
		require_once('utils.php');
		$lang = 'en';
		$defaultTranslationsPath = 'translation_files/en/tnc.php';
		$translationsPath = 'translation_files/' . $lang . '/tnc.php';

		if (!file_exists($translationsPath)) {
		    include $defaultTranslationsPath;
		} else {
		    include $translationsPath;
		}

		if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
		if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com');
	?>
	<?php include "header.php"; ?>
	<div class="tnc-content-wrapper">
		<h2 class="tnc-title"><?= translateLabel("tncTitle", $translations) ?></h2>
		<p class="tnc-message"><?= translateLabel("tncMessage", $translations) ?></p>

		<hr size="0.7" style="color: #bcbec0;">
		<h3 class="data-process-title"><?= translateLabel("dataProcessTitle", $translations) ?></h3>
		<ul class="data-process-list">
			<li><?= translateLabel("dataProcessList1", $translations) ?></li>
			<li><?= translateLabel("dataProcessList2", $translations) ?></li>
			<li><?= translateLabel("dataProcessList3", $translations) ?></li>
		</ul>
		<p class="tnc-text"><?= translateLabel("Depending on your account settings, some of this data may be associated with your Pipindex Account and we treat this data as personal information. This is a dummy text and needs to change to original", $translations) ?></p>
		
		<h3 class="data-process-title"><?= translateLabel("dataProcessTitle", $translations) ?></h3>
		<ul class="data-process-list">
			<li><?= translateLabel("dataProcessList1", $translations) ?></li>
			<li><?= translateLabel("dataProcessList2", $translations) ?></li>
			<li><?= translateLabel("dataProcessList3", $translations) ?></li>
		</ul>
		<p class="tnc-text"><?= translateLabel("Depending on your account settings, some of this data may be associated with your Pipindex Account and we treat this data as personal information. This is a dummy text and needs to change to original", $translations) ?></p>
		
		<h3 class="data-process-title"><?= translateLabel("dataProcessTitle", $translations) ?></h3>
		<ul class="data-process-list">
			<li><?= translateLabel("dataProcessList1", $translations) ?></li>
			<li><?= translateLabel("dataProcessList2", $translations) ?></li>
			<li><?= translateLabel("dataProcessList3", $translations) ?></li>
		</ul>
		<p class="tnc-text"><?= translateLabel("Depending on your account settings, some of this data may be associated with your Pipindex Account and we treat this data as personal information. This is a dummy text and needs to change to original", $translations) ?></p>		
	</div>
	<div class="tnc-button-wrapper" style="">
		<a href="http://pipindex.com" id="cancel-button" class="action-button"><?= translateLabel("CANCEL", $translations) ?></a>
		<a href="/loginpoc/thankyou.php" id="agree-button" class="action-button"><?= translateLabel("I AGREE", $translations) ?></a>
	</div>
	<?php echo '<img src="'. baseURL() .'loginpoc/trackevents.php?email=' .getEmailFromCookie() .'&eventType=page-load&pageId=terms"/>'; ?>



	<script type="text/javascript">
		$('.tnc-content-wrapper').bind('scroll', function() {
			if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight){
				$('#agree-button').addClass('activate-button');
			}
		})
	</script>
</body>
</html>
