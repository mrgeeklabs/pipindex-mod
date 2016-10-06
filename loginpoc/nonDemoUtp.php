<!-- <?php if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com'); ?> -->
<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/home.php";
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
<body id="utp">
<div id="loadingIndicator" style="width: 100%;height: 100%;z-index: 999;background-color: #000;opacity: 0.7;position: fixed;display: none;">
	<div style="width: 100%; text-align: center;color: #fff;">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-top: 25%;font-size: 100px;"></i>
		<!-- <p>Loading</p> -->
	</div>
</div>
<?php if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com'); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/utp_header.php"; ?>
	<div class="lp3-wrapper">
	    <div class="banner-wrapper">
	        <div class="banner-text-wrapper">
	            <div class="banner-left">
	                <div class="watch-video-wrapper">
	                    <img src="new-static/images/play-video.svg">
	                    <p><?= $translations[$lang]["text"]["watch_video"]?></p>
	                </div>
	            </div>
	            <div class="banner-right">
	                <p id="account-better"><?= $translations[$lang]["banner_right"][0] ?></p>
	                <h2 id="welcome-title"><?= $translations[$lang]["banner_right"][1] ?></h2>
	                <p id="welcome-text"><?= $translations[$lang]["banner_right"][2] ?></p>
	                <a id="banner-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	            </div>
	        </div>
	    </div>
	    <div id="update-account">
	        <?= $translations[$lang]["update-account"][0] ?> <span style="font-size: 18px;font-weight: bold;">£10,000</span> <?=$translations[$lang]["update-account"][1] ?>
	        <h4>Free Ultimate Traders Programme</h4>
	        <h4>+ New October Account Bonus</h4>
	        <h4>++ Entry in to £10,000 prize draw</h4>
	    </div>
	    <div class="update-steps-container">
	        <div id="update-steps-wrapper">
	            <div id="topBorder" style="padding-bottom: 20px">
					<div class="steps">
	                    <img src="new-static/images/circle.svg" width="22" height="22">
	                </div>	
	                <div class="steps">
	                    <img src="new-static/images/circle.svg" width="22" height="22">
	                </div>	
	                <div class="steps">
	                    <img src="new-static/images/circle.svg" width="22" height="22">
	                </div>	
	                <div class="steps">
	                    <img src="new-static/images/circle.svg" width="22" height="22">
	                </div>	
	            </div>
	            <div style="display: flex;">
	            <?php 
					foreach($translations[$lang]["update-steps-container"] as $step) {
				?>
	                <div class="steps">
	                    <p class="step-title"><?= $step["title"] ?></p>
	                    <p class="step-info"><?= $step["info"] ?></p>
	                </div>				
				<?php 		
				}
				?>
					<div class="steps">
	                    <p class="step-title">STEP 4</p>
	                    <p class="step-info">Receive your Bonus + Free UTP</p>
	                </div>	
	            </div>
	        </div>

	        <a class="btn update-account-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	    </div>
	    <div class="prize-container">
	        <p id="prize-amount">£10,000</p>
	        <p id="prize-text"><?= $translations[$lang]["prize-container"][0] ?></p>
	        <p class="prize-info"><?= $translations[$lang]["prize-container"][1] ?></p>
	        <p class="prize-info" style="padding-bottom: 40px;"><?= $translations[$lang]["prize-container"][2] ?></p>
	    </div>
	    <div id="strongPoints">
	    	<img src="new-static/images/utpLogo.svg" id="utpLogo" alt="logo" height="35">
	    	<h2>Free Lifetime Membership to</h2>
	    	<h2>Academy of Financial Trading</h2>
	    	<ul>
	    		<li>Complete Ultimate Traders Programme</li>
	    		<li>Custom Strategies</li>
	    		<li>Custom Indicators</li>
	    		<li>Risk Management Software</li>
	    		<li>Trading Consultant for Life</li>
	    	</ul>
	    </div>
	    <div class="features-container">
	        <div class="feature">
	            <h3><?= $translations[$lang]["text"]["eurusd"]?></h3>
	            <div>
	                <h4><b><?= $translations[$lang]["text"]["sell"]?></b></h4>
	                <p>1.12000</p>
	            </div>
	            <div>
	                <h4><b><?= $translations[$lang]["text"]["buy"]?></b></h4>
	                <p>1.12008</p>
	            </div>
	            <div class="ratio">
	                <span><?= $translations[$lang]["features-container"][0] ?></span>
	            </div>
	            <p class="feature-title"><?= $translations[$lang]["features-container"][1] ?></p>
	        </div>
	        <!--		<div class="seperator">
					<hr>
				</div> -->
	        <div class="feature">
	            <h3>5,000+</h3>
	            <p style="color: #6D6E71;"><?= $translations[$lang]["feature"][0] ?></p>
	            <p class="feature-title"><?= $translations[$lang]["feature"][1] ?></p>
	        </div>
	        <div class="update-wrapper">
	            <a class="btn update-account-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	        </div>
	    </div>
	    <div class="scholars-section-container">
	        <div class="row">
	        	<?php 
	        		$sectionImages=array(
	        			"regulation",
	        			"award",
	        			"manager",
	        			"languages",
	        			"platform",
	        			"mobile",
	        		);
	        		$imageIndex=0;
					foreach($translations[$lang]["scholars-section-container"] as $row) {
						$image=$sectionImages[$imageIndex];
						$imageIndex=$imageIndex+1;
				?>
				<div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/<?= $image ?>.svg" width="134px" height="133px">
	                <img src="new-static/images/<?= $image ?>-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p><?= $row ?></p>
	            </div>	            			
				<?php 		
				}
				?>

	            <!--
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/regulation.svg" width="134px" height="133px">
	                <img src="new-static/images/regulation-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>FULL UK FCA REGULATION</p>
	            </div>
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/award.svg" width="134px" height="133px">
	                <img src="new-static/images/award-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>£10k First Trade Prize</p>
	            </div>
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/manager.svg" width="134px" height="133px">
	                <img src="new-static/images/manager-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>DEDICATED SUPPORT MANAGER</p>
	            </div>
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/languages.svg" width="134px" height="133px">
	                <img src="new-static/images/languages-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>COUNTLESS LANGUAGES</p>
	            </div>
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/platform.svg" width="134px" height="133px">
	                <img src="new-static/images/platform-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>FULL MT4 TRADING PLATFORM</p>
	            </div>
	            <div class="col-md-4 col-sm-6">
	                <img class="unhovered" src="new-static/images/mobile.svg" width="134px" height="133px">
	                <img src="new-static/images/mobile-white.svg" alt="image" class="hovered" width="134px" height="133px" />
	                <p>FULL RANGE OF MOBILE PLATFORMS</p>
	            </div>
	            -->
	            <div class="col-md-12 col-sm-12">
	                <a href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button"><?= $translations[$lang]["text"]["update_account"]?></a>
	            </div>
	        </div>
	    </div>
	    <div class="improve-account-container">
	        <h1><?= $translations[$lang]["improve-account-container"] ?></h1>
	        <div class="desktop-bullet-points">
	            <img src="new-static/images/Improve-your-account.svg" style="width: 100%;">
	        </div>
	        <div class="mobile-bullet-points">
	        	<?php 
	        		// TODO: array of unhovered images
	        		// TODO: array of hovered images
					foreach($translations[$lang]["mobile-bullet-points"] as $point) {
				?>
	                <p><?= $point ?></p>
				<?php 		
				}
				?>
	        </div>
	        <a href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button"><?= $translations[$lang]["text"]["update_account"]?></a>
	    </div>
	    <div class="have-query">
	        <p id="query-title"><?= $translations[$lang]["have_query"][0] ?></p>
	        <p id="query-message"><?= $translations[$lang]["have_query"][1] ?></p>
	        <div class="custom-time-select-dropdown">
	            <label id="hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub>hours</sup></label>
					<ul class="hours-dropdown">
						<?php
						for( $i= 0 ; $i <= 23 ; $i++ ) {
							$number= str_pad($i, 2, "0", STR_PAD_LEFT);
							?>
							<li data-value = "<?= $number ?>"><?= $number ?></li>	
							<?php
						}
						?>
					</ul>
					<label  id="minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub>minutes</sup></label>
					<ul class="minutes-dropdown">
						<?php
						for( $i= 0 ; $i <= 59 ; $i++ ) {
							$number= str_pad($i, 2, "0", STR_PAD_LEFT);
							?>
							<li data-value = "<?= $number ?>"><?= $number ?></li>	
							<?php
						}
						?>
					</ul>
					<button id="requestCall"><?= $translations[$lang]["text"]["request_call"] ?></button>
				</div>
				<!-- <div style="margin-top: 5px;padding-bottom: 40px;">
					<a id="request-call-button">REQUEST A CALL</a>
					<button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">
					  Launch demo modal
					</button>
				</div> -->
				<hr style="width: 75%;">
				<div class="ask-question-section">
					<p id="ask-question"><?= $translations[$lang]["ask-question-section"] ?></p>
				</div>
				<textarea id="customerQuestion" rows="5" placeholder="Type your question here"></textarea>

				<div style="margin-top: 30px;">
					<a id="query-submit-button"><?= $translations[$lang]["text"]["submit"] ?></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal -->
	<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalUnknown">
	  Launch demo modal
	</button> -->

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div> -->
	      <div class="modal-body have-query-body">
	        <h1><?= $translations[$lang]["have_query"][0] ?></h1>
	        <h3><?= $translations[$lang]["have_query"][1] ?></h3>
	        <div class="custom-time-select-dropdown">
				<label  id="popup-hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub>hours</sup></label>
				<ul class="popup-hours-dropdown">
						<?php
						for( $i= 0 ; $i <= 23 ; $i++ ) {
							$number= str_pad($i, 2, "0", STR_PAD_LEFT);
							?>
							<li data-value = "<?= $number ?>"><?= $number ?></li>	
							<?php
						}
						?>
				</ul>
				<label  id="popup-minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub>minutes</sup></label>
				<ul class="popup-minutes-dropdown">
					<?php
						for( $i= 0 ; $i <= 59 ; $i++ ) {
							$number= str_pad($i, 2, "0", STR_PAD_LEFT);
							?>
							<li data-value = "<?= $number ?>"><?= $number ?></li>	
							<?php
						}
						?>

				</ul>
			</div>
	        <button><?= $translations[$lang]["text"]["request_call"] ?></button>
	      </div>
	      <!-- <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div> -->
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
		        <h1 style="font-size: 36px; font-weight: 300; line-height: 0.7; letter-spacing: 0.4px; text-align: center; color: #292728;"><?= $translations[$lang]["text"]["not_recognize"] ?></h1>
		        <h3 style="font-family: Montserrat Light; font-size: 18px; font-weight: 300; line-height: 1.3;letter-spacing: 0.2px; color: #6d6e71;"><?= $translations[$lang]["text"]["not_recognize_text"] ?></h3>
		        <form id="CaptureForm" class="form-group" style="width: 50%;margin: 0 auto;margin-bottom: 30px;">
			        <input id="emailId" type="hidden" value="<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>" class="form-control" placeholder="Email Id" style="margin-bottom: 30px;"/>
					<input id="firstName" type="text" class="form-control" placeholder="Your Name" style="margin-bottom: 30px;" value="" required/>
					<input id="phoneNumber" type="tel" class="form-control" placeholder="Phone Number" style="margin-bottom: 30px;" value="" required/>
			        <button class="btn" style="background: #223f6a;color: #fff;padding: 20px 60px;font-family: Montserrat Light; font-size: 16px; line-height: 1.4; letter-spacing: 0.2px; text-align: center; color: #ffffff;"><?= $translations[$lang]["text"]["submit"] ?></button>
		        </form>
	        </div>
	      </div>
	    </div>
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
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php'); echo '<img class="trackingPixel" src="'. baseURL() .'trackevents.php?email=' .(isset($_GET['email']) ? trim($_GET['email'])  : '') .'&eventType=page-load&pageId=landing_page_3"/>'; ?>

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

	<!-- Video Popup -->
	<div class="modal fade" id="watchVideoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	        	<img src="new-static/images/asset15.png" width="15px" class="glyphicon glyphicon-remove" class="close" data-dismiss="modal" aria-label="Close">
	        </button>
	      </div> -->
	      <div class="modal-body">
	        	<iframe style="width:100%;" id="watch-video-player" src="//player.vimeo.com/video/161598421?portrait=0&color=333" width="565" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Button trigger modal -->
	<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalUnknown">
	  Launch demo modal
	</button> -->
	<style type="text/css">
		.temporary-overlay {
		    background-color: #fff;
		    opacity: 0.6;
		    z-index: 999;
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    display: none;
		}​
	</style>
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

	var contactNumber=$("#phoneNumber");
	createTelephoneInput(contactNumber);
	localStorage.setItem('callHours', '00');
	localStorage.setItem('callMins', '00');
	$("#hours-selected-item").click(function(){
		$('.hours-dropdown').slideToggle( "fast", function() {
		});
		$(".minutes-dropdown").slideUp( "fast", function() {
		});
	});
	$("#minute-selected-item").click(function(){
		$('.minutes-dropdown').slideToggle( "fast", function() {
		});
		$(".hours-dropdown").slideUp( "fast", function() {
		});
	});
	$(".hours-dropdown li").click(function(){
		var option = $(this).data('value');
		localStorage.setItem('callHours', option);
		$("#hours-selected-item .hours").text(option);
		$(".hours-dropdown").slideToggle( "fast", function() {
		});
	});
	$(".minutes-dropdown li").click(function(){
		var option = $(this).data('value');
		localStorage.setItem('callMins', option);
		$("#minute-selected-item .minutes").text(option);
		$(".minutes-dropdown").slideToggle( "fast", function() {
		});
	});



	//popup
	$("#popup-hours-selected-item").click(function(){
		$('.popup-hours-dropdown').slideToggle( "fast", function() {
		});
		$(".popup-minutes-dropdown").slideUp( "fast", function() {
		});
	});
	$("#popup-minute-selected-item").click(function(){
		$('.popup-minutes-dropdown').slideToggle( "fast", function() {
		});
		$(".popup-hours-dropdown").slideUp( "fast", function() {
		});
	});
	$(".popup-hours-dropdown li").click(function(){
		var option = $(this).data('value');
		$("#popup-hours-selected-item .hours").text(option);
		$(".popup-hours-dropdown").slideToggle( "fast", function() {
		});
	});
	$(".popup-minutes-dropdown li").click(function(){
		var option = $(this).data('value');
		//console.log(option);
		$("#popup-minute-selected-item .minutes").text(option);
		$(".popup-minutes-dropdown").slideToggle( "fast", function() {
		});
	});
	$("#requestCall").click(function(event){
		$('#myModalUnknown').modal('show');
		//console.log("hello");
	});

// 	window.addEventListener("beforeunload", function(e){
//    		// Do something
// 		$('#myModal').modal('show');
// 	}, false);

// 	window.onbeforeunload = function(){
// 	   // Do something
// 		$('#myModal').modal('show');
// 		return null;
// 	}

	// $(window).unload(function(){
	// 	$('#myModal').modal('show');
	// })
	// $(window).bind("beforeunload", function() {
	//     $('#myModal').modal('show');
	//  	return false;
	// });

	var global = {};
	global.src = null;
	$('.watch-video-wrapper').click(function(){
		$('#watchVideoModal').modal('show');
		var source = $('iframe#watch-video-player').attr('src');
		global.src = source;
		source = source+'&autoplay=1';
		$('iframe#watch-video-player').attr('src',source);
	});

	// function handleBrowserCloseButton(event) { 
	//    if (($(window).width() - window.event.clientX) < 35 && window.event.clientY < 0) 
	//     {
	//       //Call method by Ajax call
	//       alert('Browser close button clicked');    
	//     } 
	// } 

	$('#watchVideoModal').on('hidden.bs.modal', function () {
	    var source = global.src ;
	    $('iframe#watch-video-player').attr('src','');
	    $('iframe#watch-video-player').attr('src',source);
	})

	$("#query-submit-button").click(function(event){
		event.preventDefault();
		$('#loadingIndicator').css('display','block');

			$.ajax({type:"POST",url: "collect.php",data:{
				email: $("#emailId").val(),
				requestForInfo:$("#customerQuestion").val()
			}, success: function(result){
				//console.log(result);
				$('#loadingIndicator').css('display','none');
				$('#ackModal').modal('show');
		       	$('#customerQuestion').val('');
			}});
	});

	$("#CaptureForm button").click(function(event){
		event.preventDefault();
		//$('body').addClass("temporary-overlay");
		var isFormValid = formValidate();
		if(isFormValid) {
			$('#myModalUnknown').modal('hide');
			$('#loadingIndicator').css('display','block');
			$.ajax({type:"POST",url: "collect.php",data:{
				email:$("#emailId").val(),
				phoneNumber:$("#phoneNumber").val(),
				firstName: $("#firstName").val(),
				timeToCall: localStorage.getItem('callHours') + ":" + localStorage.getItem('callMins'),
				requestForCall: 'yes'
			}, success: function(result){
				//$('body').removeClass("temporary-overlay");
				$('#loadingIndicator').css('display','none');
				$('#ackModal').modal('show');
		       	//console.log(result);
		    }});
		}else {
			// return false;
		}
	});
	
	function formValidate(){
	    var isFormValid=true;
	    if($('#request-call input[name=username]').val() === '' ){
	        markMandatory($('#username'));
	        isFormValid = false;
	    }
	    else{
	        $('#username').removeClass('error');
	    }
	    if($('#firstName').val() === ''){
	    	markMandatory($('#firstName'));
	    	isFormValid = false;
	    }
	    else{
	        $('#firstName').removeClass('error');
	    }
	    
	    
	    if(contactNumber.val() === '' ||  !contactNumber.intlTelInput("isValidNumber")){
	        markMandatory($('#phoneNumber'));
	        isFormValid = false;
	    }
	    else {
	        $('#phoneNumber').removeClass('error');
	    }  
	    return isFormValid;
	}
	 
	</script>
</body>
</html>