<?php if ( (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) || (isset($_GET['email']) && $_GET['email'] == "") ) header('LOCATION:http://pipindex.com'); ?>
<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$currency = isset($_GET['currency']) ? trim($_GET['currency'])  : 'gbp';
	$allowedCurrency = array("usd", "gbp", "eur");
	$allowedLanguages = array("en", "it", "es","de", "fr","pt");
	if (in_array($currency, $allowedCurrency )===false ) {
		$currency="gbp";
	}
	if (in_array($lang, $allowedLanguages )===false ) {
		$lang="en";
	}
	$prizeMoney=getPrizeMoney($currency);

	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/terms-and-conditions.php";
	include $defaultTranslationsPath;
	if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
?>

<!DOCTYPE html>
<html lang="en">
		<head>
		<title><?= $translations[$lang]["title"]?></title>
		<meta charset="utf-8">
		<link rel="icon" href="new-static/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="new-static/images/favicon.ico" type="image/x-icon" />
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<script type="text/javascript" src="new-static/intlTelInput/js/intlTelInput.min.js" ></script>
	  	<link rel="stylesheet" type="text/css" href="new-static/intlTelInput/css/intlTelInput.css">
	  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
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
<body style="color: #36393e" id="utp">
	<div id="loadingIndicator" style="width: 100%;height: 100%;z-index: 999;background-color: #000;opacity: 0.7;position: fixed;display: none;">
	<div style="width: 100%; text-align: center;color: #fff;">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-top: 25%;font-size: 100px;"></i>
		<!-- <p>Loading</p> -->
	</div>
	</div>

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/utp_funded_header.php"; ?>
	<input type="hidden" id="email" value="<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>" name="email">
	<div class="tnc-container">	
		<div class="tnc-content-wrapper">
			<h2 class="tnc-title"><?= $translations[$lang]["body"]["content"]["title"] ?></h2>
			<p class="tnc-message" style="font-weight: bolder;color: #000;"><?= $translations[$lang]["body"]["content"]["message"] ?></p>
			<hr size="0.7" style="color: #bcbec0;">
			<?php 
			foreach($translations[$lang]["body"]["content"]["terms"] as $term) {
			?>
				<h3 class="data-process-title"><?= $term["header"] ?></h3>
			<?php 	
				foreach($term["para"] as $para) {
				?>						
					<p style="color: #808285;"><?= $para ?>
					<?php if ($term["header"]==="9. CONTACT"){ ?>					
						<p><a href="mailto:customerservice@etxcapital.co.uk">customerservice@etxcapital.co.uk</a></p>
					<?php }?>
					</p>
				<?php
					if(count($term["list"])>0){
					?>	
						<ul class="data-process-list">
						<?php
						foreach($term["list"] as $listItem) {
						?>
							<li style="padding-top: 0px;"><?= $listItem ?></li>
						<?php		
						}
						?>
						</ul>
					<?php 		
					}
				}
			}
			?>
		</div>
		<div class="tnc-button-wrapper" style="">
			<a id="cancel-button" data-toggle="modal" data-target=".bs-example-modal-lg" class="action-button"><?= $translations[$lang]["text"]["cancel"]?></a>
			<a href="/thank-you.php?email=<?php echo getEmailFromCookie(); ?>&lang=<?= $lang ?>" id="agree-button" class="action-button activate-button"><?= $translations[$lang]["text"]["agree"] ?></a>
		</div>
	</div>		
	<?php		
		include ($_SERVER['DOCUMENT_ROOT'] .'/footer.php');
	?>
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
	<!-- Acknowldge -->
	<div class="modal fade" id="ackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<img src="new-static/images/asset15.png" width="15px" class="glyphicon glyphicon-remove" class="close" data-dismiss="modal" aria-label="Close">
	        </button>
	      </div> -->
	      <div class="modal-body">
	        <div class="ackContainer">
				<div class="rightTick">
					<img src="https://s3-eu-west-1.amazonaws.com/shawaftassets/img/website/green-tick.svg" />
				</div>
				<div class="thankYouTitle"><?= $translations[$lang]["text"]["thank_you"] ?></div>
				<div class="thankYouMessage"><?= $translations[$lang]["text"]["thank_you_message"] ?></div>
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
		if(emailData == null || emailData == ""){
			$('#myModalUnknown').modal("show");
		}

		$('#submitReasonbtn').click(function (evt) {
			if($('#reason').val()){
				$('#reasonModal').modal('hide');
				$('#loadingIndicator').css('display','block');
				$.ajax({type:"POST",url: "collect.php",data:{email:'<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>', requestForCall: "yes", requestForInfo: $('#reason').val()}, success: function(result){
						$('#loadingIndicator').css('display','none');
						$('#ackModal').modal('show');
						$('#reason').val('');
						$('#reason').css('border-color', 'black')
					// if(result.success){
						
					// }
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
	</script>
</body>
</html>
