<!DOCTYPE html>
<html lang="en">
		<head>
		<title>Terms & Condition | PipIndex Capital Markets</title>
		<meta charset="utf-8">
		<link rel="icon" href="new-static/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="new-static/images/favicon.ico" type="image/x-icon" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<link rel="stylesheet" href="new-static/css/style.css">
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" type="text/css" media="screen" href="new-static/css/ie.css">
		<![endif]-->
</head>
<body style="color: #36393e">
	<?php
		require_once('new_includes/utils.php');
		$lang = 'en';
		$defaultTranslationsPath = 'new_includes/translation_files/en/terms-and-conditions.php';
		$translationsPath = 'new_includes/translation_files/' . $lang . '/terms-and-conditions.php';

		if (!file_exists($translationsPath)) {
		    include $defaultTranslationsPath;
		} else {
		    include $translationsPath;
		}

		if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
		if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com');
	?>
	<?php include "new_includes/header.php"; ?>
	<div class="tnc-container">
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
			<a id="cancel-button" data-toggle="modal" data-target=".bs-example-modal-lg" class="action-button"><?= translateLabel("CANCEL", $translations) ?></a>
			<a href="/thank-you.php" id="agree-button" class="action-button activate-button"><?= translateLabel("I AGREE", $translations) ?></a>
		</div>
	</div>
	<footer>
		<div class="main-footer">
            <p style="margin-top:-10px; font-size:13px; color:#e6e6e6; margin-top:10px;">RISK WARNING: Trading leveraged products carries a high risk to your capital and it is possible to lose more than your initial investment. These products may not be suitable for all investors, therefore ensure you fully understand the risks involved, and seek independent advice if necessary.  <a href="http://www.pipindex.com/risk-warning.html"><span style="color:#fff">Click here</span></a> to view the full risk warning.<br /><br>
            <span style="font-size:11px">PipIndex Capital Markets Limited is an appointed representative of Finsa Europe Ltd which is authorised and regulated by the Financial Conduct Authority (under firm reference number 525164) and whose registered office is: Tower Bridge Business Centre, 46-48 East Smithfield, London. E1W 1AW. United Kingdom. Finsa Europe Ltd is a company registered in England and Wales under number 07073413. PipIndex and PipIndex Capital Markets are registered trading names of Finsa Europe Ltd. This website is owned and operated by Finsa Europe Limited, UK<br /><br />PipIndex Capital Markets Limited and the Academy of Financial Trading (<a href="http://www.academyft.com/" target="_blank"><span style="color:#fff">www.academyft.com</span></a>) share the same beneficial owners.<br />PipIndex Capital Markets Limited derives its revenue from the trading activity of its customers only.</span>
            </p><br><br>
			<div class="social">

				<a href="https://www.facebook.com/pages/Pip-Index-Capital-Markets/332922063514919" target="_blank"><img src="new-static/images/fb.png" alt="facebook icon"></a>

				<a href="https://twitter.com/PipIndex" target="_blank"><img src="new-static/images/twitter.png" alt="twitter icon"></a>

				<a href="http://www.linkedin.com/company/pip-index?trk=company_name" target="_blank"><img src="new-static/images/linkdn.png" alt="linkedin icon"></a>

				<a href="https://plus.google.com/114948536588787746452" rel="publisher" target="_blank"><img src="new-static/images/gplus.png" alt="google plus icon"></a>

			</div>

			<p style="width:100%; margin:0 auto; text-align:right; color:#fff; margin-top:10px">PipIndex Capital Markets<br>&copy; 2016 |  PipIndex Capital Markets</p>
		</div>
	</footer>
	<?php echo '<img class="trackingPixel" src="'. baseURL() .'trackevents.php?email=' .getEmailFromCookie() .'&eventType=page-load&pageId=terms"/>'; ?>

	<div id="reasonModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="heading">Please let us know your reason to not upgrade your account</div>
				<textarea id="reason" name="reason" cols="30" rows="10" placeholder="Type your reason here" required></textarea>
				<button class="btn" id="submitReasonbtn">Submit</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$('.tnc-content-wrapper').bind('scroll', function() {
			if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight){
				$('#agree-button').addClass('activate-button');
			}
		})

		$('#submitReasonbtn').click(function (evt) {
			if($('#reason').val()){
				$.ajax({type:"POST",url: "collect.php",data:{email:'<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>', requestForCall: "yes", reason: $('#reason').val()}, success: function(result){
					if(result.success){
						$('#reasonModal').modal('toggle');
						$('#reason').val('');
						$('#reason').css('border-color', 'black')
					}
				}});
			}
			else{
				$('#reason').css('border-color', 'red')
			}
		})

//		$('.tnc-content-wrapper').css('height', window.innerHeight - 220);
	</script>
</body>
</html>
