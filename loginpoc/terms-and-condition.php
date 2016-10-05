<?php if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com'); ?>
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
	  	<script type="text/javascript" src="new-static/intlTelInput/js/intlTelInput.min.js" ></script>
	  	<link rel="stylesheet" type="text/css" href="new-static/intlTelInput/css/intlTelInput.css">
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
		require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
		$lang = 'en';
		$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . '/new_includes/translation_files/en/terms-and-conditions.php';
		$translationsPath = $_SERVER['DOCUMENT_ROOT']  . '/new_includes/translation_files/' . $lang . '/terms-and-conditions.php';

		if (!file_exists($translationsPath)) {
		    include $defaultTranslationsPath;
		} else {
		    include $translationsPath;
		}

		if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
	?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/header.php"; ?>
	<input type="hidden" id="email" value="<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>" name="email">
	<div class="tnc-container">
		<div class="tnc-content-wrapper">
			<h2 class="tnc-title"><?= translateLabel("tncTitle", $translations) ?></h2>
			<p class="tnc-message" style="font-weight: bolder;color: #000;">By clicking “I agree” you agree to PipIndex passing your personal information to ETX Capital, so that ETX Capital can contact you via phone and/or email and you agree to the Privacy Policy of ETX Capital as below.</p>

			<hr size="0.7" style="color: #bcbec0;">
			<h3 class="data-process-title"><?= translateLabel("ETX Privacy policy Title", $translations) ?></h3>
			<p style="color: #808285;"><?= translateLabel("dataProcessList1", $translations) ?></p>
			<p style="color: #808285;"><?= translateLabel("dataProcessList2", $translations) ?></p>

			<h3 class="data-process-title"><?= translateLabel("1. COLLECTION OF PERSONAL DATA", $translations) ?></h3>
			<p style="color: #808285;"><?= translateLabel("You may give us information about you by using our website, filling in forms on our site or by corresponding with us by phone, e-mail or otherwise. This includes information you provide when you register to use our site, subscribe to our services and products and when you report a problem with our site. The kind of personal information you give us may include (but is not limited to) name, address, date of birth, passport number, tax identification number, e-mail address, phone number, employment and income, debit/credit card information, transaction history and financial statements. In order to comply with our regulatory requirements, we may also ask for financial information such as annual income, net worth and available risk capital. In addition, we may also collect information from external sources.", $translations) ?></p>

			<h3 class="data-process-title"><?= translateLabel("2. COOKIES", $translations) ?></h3>
			<p style="color: #808285;">
				<?= translateLabel("We use cookies to provide us with data we can use to improve the website experience for our customers and to get to know our customers better. For detailed information on the cookies we use and the purposes for which we use them visit our Cookie page.", $translations) ?>
			</p>

			<h3 class="data-process-title"><?= translateLabel("3. USE OF PERSONAL DATA", $translations) ?></h3>
			<p style="color: #808285;"><?= translateLabel("We use information held about you in the following ways:", $translations) ?></p>
			<ul class="data-process-list">
				<li style="padding-top: 0px;">to verify your identity;</li>
				<li style="padding-top: 0px;">to assess the appropriateness of the products and services we provide;</li>
				<li style="padding-top: 0px;">to set up and service your account;</li>
				<li style="padding-top: 0px;">to carry out our services and to provide you with the information, products and services that you request from us;</li>
				<li style="padding-top: 0px;">to provide you with information about other products and services we offer that are similar to those that you have already enquired about;</li>
				<li style="padding-top: 0px;">to notify you about changes to our services and products;</li>
				<li style="padding-top: 0px;">to improve our website.</li>
			</ul>
			
			<h3 class="data-process-title">4. DISCLOSURE OF PERSONAL DATA</h3>
			<p style="color: #808285;">We do not sell, license or otherwise disclose your personal information to third parties for marketing purposes. However, we may, in the standard operation of our business, share selected information to the following (who may be within or outside the European Economic Area):</p>
			<ul class="data-process-list">
				<li style="padding-top: 0px;">any relevant regulatory, governmental, or law enforcement authority as required by law;</li>
				<li style="padding-top: 0px;">our third party credit/debit card processing and verification providers as required by our commercial banks;</li>
				<li style="padding-top: 0px;">our insurers, agents, suppliers and subcontractors insofar as reasonably necessary for the purpose set out herein;</li>
				<li style="padding-top: 0px;">professional advisors such as our solicitors in connection with any ongoing or prospective legal proceedings or in order to establish, exercise or defend our legal rights, and our auditors and accountants in order to satisfy our regulatory and financial reporting obligations;</li>
				<li style="padding-top: 0px;">introducing brokers with whom we have a mutual relationship;</li>
				<li style="padding-top: 0px;">any member of our group, meaning our subsidiaries, our ultimate holding company and its subsidiaries, and successors in title to our business.</li>
			</ul>
			
			<h3 class="data-process-title">5. SECURITY</h3>
			<p style="color: #808285;">ETX Capital takes the safeguarding of your data very seriously. ETX Capital has taken measures and precautions to protect the security of your personal information.</p>

			<h3 class="data-process-title">6. YOUR RIGHTS</h3>
			<p style="color: #808285;">You are not required to submit requested personal information. However, failure to disclose your personal information upon our request may result in our being unable to provide you with the requested product or service or to continue to maintain your account.</p>

			<p style="color: #808285;">Our site may, from time to time, contain links to and from the websites of our partner networks, advertisers and affiliates. If you follow a link to any of these websites, please note that these websites have their own privacy policies and that we do not accept any responsibility or liability for these policies. Please check these policies before you submit any personal data to these websites.</p>

			<h3 class="data-process-title">7. ACCESS TO INFORMATION</h3>
			<p style="color: #808285;">The Act gives you the right to access information held about you. Your right of access can be exercised in accordance with the Act. Any access request may be subject to a fee to meet our costs in providing you with details of the information we hold about you.</p>

			<h3 class="data-process-title">8. CHANGES TO OUR PRIVACY POLICY</h3>
			<p style="color: #808285;">Any changes we may make to our privacy policy in the future will be posted on this page and, where appropriate, notified to you by e-mail. Please check back frequently to see any updates or changes to our privacy policy.</p>

			<h3 class="data-process-title">9. CONTACT</h3>
			<p style="color: #808285;">If you have any questions regarding our privacy policy, please email:.</p>	
			<p><a href="mailto:customerservice@etxcapital.co.uk">customerservice@etxcapital.co.uk</a></p>
		

		</div>
		<div class="tnc-button-wrapper" style="">
			<a id="cancel-button" data-toggle="modal" data-target=".bs-example-modal-lg" class="action-button"><?= translateLabel("CANCEL", $translations) ?></a>
			<a href="/thank-you.php?email=<?php echo getEmailFromCookie(); ?>" id="agree-button" class="action-button activate-button"><?= translateLabel("I AGREE", $translations) ?></a>
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

	<!-- Unknown Number -->
	<div class="modal fade" id="myModalUnknown" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<img src="new-static/images/asset15.png" width="15px" class="glyphicon glyphicon-remove" class="close" data-dismiss="modal" aria-label="Close">
	        </button>
	      </div> -->
	      <div class="modal-body">
	        <div style="text-align: center;">
		        <h1 style="font-size: 36px;font-weight: 300;line-height: 0.7;letter-spacing: 0.4px;text-align: center;color: #292728;">We could not recognize you</h1>
		        <h3 style="font-family: Montserrat Light;font-size: 18px;font-weight: 300;line-height: 1.3;letter-spacing: 0.2px;color: #6d6e71;">Enter your details below and you are all set!</h3>
		        <form class="form-group" style="width: 50%;margin: 0 auto;margin-bottom: 30px;" action="">
			        <input type="email" id="emailFromPopup" value="<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>" class="form-control" required placeholder="Email Id" style="margin-bottom: 30px;" />
			        <!-- <input id="telephone" type="tel" class="form-control" placeholder="Phone Number" style="margin-bottom: 30px;" value="" /> -->
			        <button id="identifyUser" class="btn" style="background: #223f6a;color: #fff;padding: 20px 60px;font-family: Montserrat Light;font-size: 16px;line-height: 1.4;letter-spacing: 0.2px;text-align: center;color: #ffffff;">SUBMIT</button>
		        </form>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>

	<script type="text/javascript">
		function createTelephoneInput(element){
		    element.intlTelInput({
		        initialCountry: "auto",
		        allowExtensions: true,
		        autoHideDialCode: true,
		        autoFormat: true,
		        defaultCountry: 'auto',
		        formatOnInit:true,
		        nationalMode: false,
		        ipinfoToken: 'd8c7fbabb96b86',
		        geoIpLookup: function(callback) {
		            detectCountry(callback);
		        },
		        utilsScript: 'new-static/intlTelInput/js/utils.js'
		    });
		}
		function markMandatory(element){
		    element.addClass('error');
		}
		function detectCountry(callback){    
	        $.get('https://learn.shawacademy.com/freegeoip/json').always(function(resp) {
	            var countryCode = (resp && resp.country_code) ? resp.country_code : "";                
	            callback(countryCode);
	        });     
		}
		$('.tnc-content-wrapper').bind('scroll', function() {
			if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight){
				$('#agree-button').addClass('activate-button');
			}
		})
		var contactNumber=$("#telephone");
		createTelephoneInput(contactNumber);

		var emailData = $('#email').val();
		console.log("Email "+emailData);
		if(emailData == null || emailData == ""){
			$('#myModalUnknown').modal("show");
		}

		$('#submitReasonbtn').click(function (evt) {
			if($('#reason').val()){
				$.ajax({type:"POST",url: "collect.php",data:{email:'<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>', requestForCall: "yes", requestForInfo: $('#reason').val()}, success: function(result){
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

		$("#identifyUser").click(function(event){
			event.stopPropagation();
			window.location.assign ('/terms-and-condition.php?email='+$('#emailFromPopup').val());
			return false;
		});

//		$('.tnc-content-wrapper').css('height', window.innerHeight - 220);
	</script>
</body>
</html>
