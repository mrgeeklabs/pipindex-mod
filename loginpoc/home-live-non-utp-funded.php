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
	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/home-live-non-utp-funded.php";
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
	  	<link rel="stylesheet" href="new-static/css/style-demo-non-utp.css">
	  	<!-- <link rel="stylesheet" href="new-static/css/style-utp.css"> -->
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
		<style type="text/css">
			.update-account-ul {
	  			list-style: none;
	  			margin-left: 0;
	  			padding-left: 0;
	  			text-align: left;	  			
			}
			.update-account-ul  li {
	  			padding-left: 1em;
	  			text-indent: -1em;
			}
			/*.update-account-ul li:nth-child(1):before{
				content: "";
				padding-right: 19px;
			}
			.update-account-ul li:nth-child(2):before{
				content: "+";
				padding-right: 12px;
			}
			.update-account-ul li:nth-child(3):before{
				content: "++";
				padding-right: 5px;
			}*/
	</style>
</head>
<body id="utp">
<div id="loadingIndicator" style="width: 100%;height: 100%;z-index: 999;background-color: #000;opacity: 0.7;position: fixed;display: none;">
	<div style="width: 100%; text-align: center;color: #fff;">
		<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-top: 25%;font-size: 100px;"></i>
		<!-- <p>Loading</p> -->
	</div>
</div>
<?php if ( (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) || (isset($_GET['email']) && $_GET['email'] == "") ) header('LOCATION:http://pipindex.com'); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/utp_funded_header.php"; ?>
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
	                <p id="welcome-text1"><?= $translations[$lang]["banner_right"][2] ?></p>
	                <p id="welcome-text2"><?= $translations[$lang]["banner_right"][3] ?></p>
	                <p id="welcome-text3"><?= $translations[$lang]["banner_right"][4] ?></p>
	                <a id="banner-button" href="http://www.pipindex.com/terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	            </div>
	        </div>
	    </div>
	   	<div id="update-account">
	        <?= $translations[$lang]["update-account"][0] ?>
	        <div id="update-account-message-wrapper" style="">
		        <ul class="update-account-ul"  style="width: 340px">
		        	<li><span style="font-weight: bold; color: #223f6a; font-size: 18px;"><?=$translations[$lang]["update-account"][1] ?></span></li>
		        	<li><span style="font-weight: bold; color: #223f6a; font-size: 18px;"><?=$translations[$lang]["update-account"][2] ?></span></li>
		        </ul>
	        </div>
	    </div>
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
	                <div class="steps">
	                    <img src="new-static/images/circletop.jpg" width="30">
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
	            </div>
	        </div>

	        <a class="btn update-account-button" href="http://www.pipindex.com/terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	    </div>
	    <div class="prize-container">
	        <p id="prize-amount"><?= $prizeMoney?></p>
	        <p id="prize-text"><?= $translations[$lang]["prize-container"][0] ?></p>
	        <p class="prize-info"><?= $translations[$lang]["prize-container"][1] ?></p>
	        <p class="prize-info" style="padding-bottom: 40px;"><?= $translations[$lang]["prize-container"][2] ?></p>
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
	            <a class="btn update-account-button" href="http://www.pipindex.com/terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>"><?= $translations[$lang]["text"]["update_account"]?></a>
	        </div>
	    </div>
	    <div class="scholars-section-container">
	        <div class="row">
	        	<?php 
	        		$sectionImages=array(
	        			"medal",
	        			"regulation",
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

	            <div class="col-md-12 col-sm-12">
	                <a href="http://www.pipindex.com/terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button"><?= $translations[$lang]["text"]["update_account"]?></a>
	            </div>
	        </div>
	    </div>
	    <div class="improve-account-container">
	        <h1><?= $translations[$lang]["improve-account-container"] ?></h1>
	        <div class="container desktop-bullet-points">
					<div id="timeline">
						<div class="timeline-item">
							<div class="timeline-icon" style="height: auto;width: 11px;left: 50.9%;top: 12px;">
								<img src="new-static/images/Asset15.png">
							</div>
						<div class="timeline-content right">
							<h2 style="text-align:left"><?= $translations[$lang]["bullet-points"][0] ?></h2>
						</div>
					</div>

					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 50.7%;top: 14px;">
							<img src="new-static/images/Asset16.png">
						</div>
						<div class="timeline-content" style="margin-top: 17px;">
							<h2 style="text-align:right"><?= $translations[$lang]["bullet-points"][1] ?></h2>				
						</div>
					</div>

					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 50.5%;top: 14px;">
							<img src="new-static/images/Asset17.png">
						</div>
						<div class="timeline-content right">
							<h2 style="text-align:left"><?= $translations[$lang]["bullet-points"][2] ?></h2>				
						</div>
					</div>

					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 50.3%;top: 16px;">
							<img src="new-static/images/Asset18.png">
						</div>
						<div class="timeline-content" style="margin-top: 17px;">
							<h2 style="text-align:right"><?= $translations[$lang]["bullet-points"][3] ?></h2>				
						</div>
					</div>
					
					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 50%;top: 17px;">
							<img src="new-static/images/Asset19.png">
						</div>
						<div class="timeline-content right">
							<h2 style="text-align:left"><?= $translations[$lang]["bullet-points"][4] ?></h2>				
						</div>
					</div>

					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 50%;top: 11px;">
							<img src="new-static/images/Asset20.png">
						</div>
						<div class="timeline-content" style="margin-top: 17px;">
							<h2 style="text-align:right"><?= $translations[$lang]["bullet-points"][5] ?></h2>				
						</div>
					</div>
					
					<div class="timeline-item">
						<div class="timeline-icon" style="width: auto;height: auto;left: 49%;top: 12px;">
							<img src="new-static/images/Asset21.png">
						</div>
						<div class="timeline-content right">
							<h2 style="text-align:left;padding-top: 20px;"><?= $translations[$lang]["bullet-points"][6] ?></h2>				
						</div>
					</div>		

					<!-- <div class="timeline-item">
						<div class="timeline-icon" style="height: auto;width: auto;left: 49%;top: 40px;">
							<img src="http://www.pipindex.com/new-static/images/Asset21.png">
						</div>
						<div class="timeline-content">
							<h2 style="text-align:right;padding-top: 50px;"><?= $translations[$lang]["bullet-points"][7] ?></h2>				
						</div>
					</div> -->
				</div>
			</div>
	        <!-- <div class="desktop-bullet-points">
	            <img src="new-static/images/Improve-your-account.svg" style="width: 100%;">
	        </div> -->
	        <div class="mobile-bullet-points">
	        	<?php 
	        		// TODO: array of unhovered images
	        		// TODO: array of hovered images
					foreach($translations[$lang]["bullet-points"] as $point) {
				?>
	                <p><?= $point ?></p>
				<?php 		
				}
				?>
	        </div>
	        <a href="http://www.pipindex.com/terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button"><?= $translations[$lang]["text"]["update_account"]?></a>
	    </div>
	    <div class="have-query">
	        <p id="query-title"><?= $translations[$lang]["have-query"][0] ?></p>
	        <p id="query-message"><?= $translations[$lang]["have-query"][1] ?></p>
	        <div class="custom-time-select-dropdown">
	            <label id="hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub><?= $translations[$lang]["text"]["hours"] ?></sup></label>
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
					<label  id="minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub><?= $translations[$lang]["text"]["minutes"] ?></sup></label>
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
				<label  id="popup-hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub><?= $translations[$lang]["text"]["hours"] ?></sup></label>
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
				<label  id="popup-minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub><?= $translations[$lang]["text"]["minutes"] ?></sup></label>
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

	<?php
		include ($_SERVER['DOCUMENT_ROOT'] .'/footer.php');
	?>

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
		
		$("#popup-minute-selected-item .minutes").text(option);
		$(".popup-minutes-dropdown").slideToggle( "fast", function() {
		});
	});
	$("#requestCall").click(function(event){
		$('#myModalUnknown').modal('show');
		$('<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php'); echo '<img id="contactUsPixel" style="display:none;" class="trackingPixel" src="'. baseURL() .'trackevents.php?email=' .(isset($_GET['email']) ? trim($_GET['email'])  : '') .'&eventType=contact-us-click"/>'; ?>').load(function() {});
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
