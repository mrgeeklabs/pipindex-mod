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
<body>
<?php if (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) header('LOCATION:http://pipindex.com'); ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/header.php"; ?>
	<div class="lp3-wrapper">
		<div class="banner-wrapper">
			<div class="banner-text-wrapper">
				<div class="banner-left">
					<div class="watch-video-wrapper">
						<img src="new-static/images/play-video.svg">
						<p>WATCH VIDEO</p>
					</div>
				</div>
				<div class="banner-right">
					<p id="account-better">Your Account Just Got Better!</p>
					<h2 id="welcome-title">WELCOME TO ETX</h2>
					<p id="welcome-text">Improve your trading with lower costs and a wider range of markets, across multiple platforms, with phenomenal support.</p>
					<a id="banner-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>">UPDATE YOUR ACCOUNT</a>
				</div>
			</div>
		</div>
		<div id="update-account">
			Update Your Account and Place 1 Trade by Monday, October 17th 2016 at 2pm BST and enter a draw to win <span style="font-size: 18px;font-weight: bold;">£10,000</span> real money!
		</div>
		<div class="update-steps-container">
			<div id="update-steps-wrapper">
				<img src="new-static/images/Asset2.svg" style="width: 70%;padding-bottom: 20px;">
				<div style="display: flex;">
					<div class="steps">
						<p class="step-title">STEP 1</p>
						<p class="step-info">Click ‘Update Your Account’</p>
					</div>
					<div class="steps">
						<p class="step-title">STEP 2</p>
						<p class="step-info">Review the New Terms</p>
					</div>
					<div class="steps">
						<p class="step-title">STEP 3</p>
						<p class="step-info">Update Some Basic Info</p>
					</div>
				</div>
			</div>

			<a class="btn update-account-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>">UPDATE YOUR ACCOUNT</a>
		</div>
		<div class="prize-container">
			<p id="prize-amount">£10,000</p>
			<p id="prize-text">FIRST TRADE PRIZE</p>
			<p class="prize-info">To enter this draw, simply place one trade.</p>
			<p class="prize-info" style="padding-bottom: 40px;">The winner will be drawn by Monday, October 17th at 2pm BST</p>
		</div>
		<div class="features-container">
			<div class="feature">
				<h3>EURUSD</h3>
				<div>
					<h4><b>Sell</b></h4>
					<p>1.12000</p>
				</div>
				<div>
					<h4><b>Buy</b></h4>
					<p>1.12000</p>
				</div>
				<div class="ratio">
					<span>Spreads as low as 0.8 </span>
				</div>
					<p class="feature-title">LOWER TRANSACTIONAL COSTS</p>
			</div>
	<!--		<div class="seperator">
				<hr>
			</div> -->
			<div class="feature">
				<h3>5,000+</h3>
				<p style="color: #6D6E71;">TRADABLE INSTRUMENTS</p>
				<p class="feature-title">HUGE RANGE OF MARKETS</p>
			</div>
			<div class="update-wrapper">
				<a class="btn update-account-button" href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>">UPDATE YOUR ACCOUNT</a>
			</div>
		</div>
		<div class="scholars-section-container">
			<div class="row">
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/regulation.svg"  width="134px" height="133px">
				<img src="new-static/images/regulation-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>FULL UK FCA REGULATION</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/award.svg"  width="134px" height="133px">
				<img src="new-static/images/award-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>£10k First Trade Prize</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/manager.svg"  width="134px" height="133px">
				<img src="new-static/images/manager-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>DEDICATED SUPPORT MANAGER</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/languages.svg"  width="134px" height="133px">
				<img src="new-static/images/languages-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>COUNTLESS LANGUAGES</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/platform.svg"  width="134px" height="133px">
				<img src="new-static/images/platform-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>FULL MT4 TRADING PLATFORM</p>
			</div>
			<div class="col-md-4 col-sm-6">
				<img class="unhovered" src="new-static/images/mobile.svg"  width="134px" height="133px">
				<img src="new-static/images/mobile-white.svg" alt="image"
				class="hovered" width="134px" height="133px"/>
				<p>FULL RANGE OF MOBILE PLATFORMS</p>
			</div>
			<div class="col-md-12 col-sm-12">
				<a href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button">UPDATE YOUR ACCOUNT</a>
			</div>
			</div>
		</div>
		<div class="improve-account-container">
			<h1>Improve Your Account Right Now!</h1>
			<div class="desktop-bullet-points">
				<img src="new-static/images/Improve-your-account.svg" style="width: 100%;">
			</div>
			<!-- <div class="desktop-bullet-points">
				<p class="type-a"></p>
				<p class="type-b">Click to Update Your Account</p>
				<p class="type-a">Update some basic information</p>
				<p class="type-b"></p>
				<p class="type-a"></p>
				<p class="type-b">You will be upgraded to the ETX MT4Trading Platform</p>
				<p class="type-a">One of the ETX team will call to welcome youand offer support</p>
				<p class="type-b"></p>
				<p class="type-a"></p>
				<p class="type-b">Trade more markets for less</p>
				<p class="type-a">More reliability with greater support</p>
				<p class="type-b"></p>
				<p class="type-a"></p>
				<p class="type-b">Place 1 trade and you could win £10,000</p>
			</div> -->
			<div class="mobile-bullet-points">
				<p>Click to Update Your Account</p>
				<p >You will be upgraded to the ETX MT4Trading Platform within X hours</p>
				<p>One of the ETX team will call to welcome youand offer support within YYYY hours</p>
				<p >Free Education will be provided on MT4</p>
				<p>Trade more markets for less</p>
				<p >More reliability with greater support</p>
				<p>Place 1 trade and you could win £10,000</p>
			</div>
			<a href="terms-and-condition.php<?php echo (isset($_GET['email']) ? '?email=' .trim($_GET['email'])  : '') ?>" class="button">UPDATE YOUR ACCOUNT</a>
		</div>
		<div class="have-query">
			<p id="query-title">Have any queries?</p>
			<p id="query-message">Choose a suitable time and we will contact you.</p>
			<div class="custom-time-select-dropdown">
				<label  id="hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub>hours</sup></label>
				<ul class="hours-dropdown">
					<li data-value = "00">00</li>
					<li data-value = "01">01</li>
					<li data-value = "02">02</li>
					<li data-value = "03">03</li>
					<li data-value = "04">04</li>
					<li data-value = "05">05</li>
					<li data-value = "06">06</li>
					<li data-value = "07">07</li>
					<li data-value = "08">08</li>
					<li data-value = "09">09</li>
					<li data-value = "10">10</li>
					<li data-value = "11">11</li>
					<li data-value = "12">12</li>
					<li data-value = "13">13</li>
					<li data-value = "14">14</li>
					<li data-value = "15">15</li>
					<li data-value = "16">16</li>
					<li data-value = "17">17</li>
					<li data-value = "18">18</li>
					<li data-value = "19">19</li>
					<li data-value = "20">20</li>
					<li data-value = "21">21</li>
					<li data-value = "22">22</li>
					<li data-value = "23">23</li>
				</ul>
				<label  id="minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub>minutes</sup></label>
				<ul class="minutes-dropdown">
					<li data-value = "00">00</li>
					<li data-value="01">01</li>
					<li data-value="02">02</li>
					<li data-value="03">03</li>
					<li data-value="04">04</li>
					<li data-value="05">05</li>
					<li data-value="06">06</li>
					<li data-value="07">07</li>
					<li data-value="08">08</li>
					<li data-value="09">09</li>
					<li data-value="10">10</li>
					<li data-value="11">11</li>
					<li data-value="12">12</li>
					<li data-value="13">13</li>
					<li data-value="14">14</li>
					<li data-value="15">15</li>
					<li data-value="16">16</li>
					<li data-value="17">17</li>
					<li data-value="18">18</li>
					<li data-value="19">19</li>
					<li data-value="20">20</li>
					<li data-value="21">21</li>
					<li data-value="22">22</li>
					<li data-value="23">23</li>
					<li data-value="24">24</li>
					<li data-value="25">25</li>
					<li data-value="26">26</li>
					<li data-value="27">27</li>
					<li data-value="28">28</li>
					<li data-value="29">29</li>
					<li data-value="30">30</li>
					<li data-value="31">31</li>
					<li data-value="32">32</li>
					<li data-value="33">33</li>
					<li data-value="34">34</li>
					<li data-value="35">35</li>
					<li data-value="36">36</li>
					<li data-value="37">37</li>
					<li data-value="38">38</li>
					<li data-value="39">39</li>
					<li data-value="40">40</li>
					<li data-value="41">41</li>
					<li data-value="42">42</li>
					<li data-value="43">43</li>
					<li data-value="44">44</li>
					<li data-value="45">45</li>
					<li data-value="46">46</li>
					<li data-value="47">47</li>
					<li data-value="48">48</li>
					<li data-value="49">49</li>
					<li data-value="50">50</li>
					<li data-value="51">51</li>
					<li data-value="52">52</li>
					<li data-value="53">53</li>
					<li data-value="54">54</li>
					<li data-value="55">55</li>
					<li data-value="56">56</li>
					<li data-value="57">57</li>
					<li data-value="58">58</li>
					<li data-value="59">59</li>

				</ul>
				<button id="requestCall">REQUEST A CALL</button>
			</div>
			<!-- <div style="margin-top: 5px;padding-bottom: 40px;">
				<a id="request-call-button">REQUEST A CALL</a>
				<button type="button" class="btn btn-lg" data-toggle="modal" data-target="#myModal">
				  Launch demo modal
				</button>
			</div> -->

			<hr style="width: 75%;">

			<div class="ask-question-section">
				<p id="ask-question">Ask any question and we will get back to you</p>
			</div>
			<textarea rows="5" placeholder="Type your question here"></textarea>

			<div style="margin-top: 30px;">
				<a id="query-submit-button" data-toggle="modal" data-target="#ackModal">SUBMIT</a>
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
	        <h1>Have any queries?</h1>
	        <h3>Choose a suitable time and we will contact you</h3>
	        <div class="custom-time-select-dropdown">
				<label  id="popup-hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub>hours</sup></label>
				<ul class="popup-hours-dropdown">
					<li data-value = "00">00</li>
					<li data-value = "01">01</li>
					<li data-value = "02">02</li>
					<li data-value = "03">03</li>
					<li data-value = "04">04</li>
					<li data-value = "05">05</li>
					<li data-value = "06">06</li>
					<li data-value = "07">07</li>
					<li data-value = "08">08</li>
					<li data-value = "09">09</li>
					<li data-value = "10">10</li>
					<li data-value = "11">11</li>
					<li data-value = "12">12</li>
					<li data-value = "13">13</li>
					<li data-value = "14">14</li>
					<li data-value = "15">15</li>
					<li data-value = "16">16</li>
					<li data-value = "17">17</li>
					<li data-value = "18">18</li>
					<li data-value = "19">19</li>
					<li data-value = "20">20</li>
					<li data-value = "21">21</li>
					<li data-value = "22">22</li>
					<li data-value = "23">23</li>
				</ul>
				<label  id="popup-minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub>minutes</sup></label>
				<ul class="popup-minutes-dropdown">
					<li data-value = "00">00</li>
					<li data-value="01">01</li>
					<li data-value="02">02</li>
					<li data-value="03">03</li>
					<li data-value="04">04</li>
					<li data-value="05">05</li>
					<li data-value="06">06</li>
					<li data-value="07">07</li>
					<li data-value="08">08</li>
					<li data-value="09">09</li>
					<li data-value="10">10</li>
					<li data-value="11">11</li>
					<li data-value="12">12</li>
					<li data-value="13">13</li>
					<li data-value="14">14</li>
					<li data-value="15">15</li>
					<li data-value="16">16</li>
					<li data-value="17">17</li>
					<li data-value="18">18</li>
					<li data-value="19">19</li>
					<li data-value="20">20</li>
					<li data-value="21">21</li>
					<li data-value="22">22</li>
					<li data-value="23">23</li>
					<li data-value="24">24</li>
					<li data-value="25">25</li>
					<li data-value="26">26</li>
					<li data-value="27">27</li>
					<li data-value="28">28</li>
					<li data-value="29">29</li>
					<li data-value="30">30</li>
					<li data-value="31">31</li>
					<li data-value="32">32</li>
					<li data-value="33">33</li>
					<li data-value="34">34</li>
					<li data-value="35">35</li>
					<li data-value="36">36</li>
					<li data-value="37">37</li>
					<li data-value="38">38</li>
					<li data-value="39">39</li>
					<li data-value="40">40</li>
					<li data-value="41">41</li>
					<li data-value="42">42</li>
					<li data-value="43">43</li>
					<li data-value="44">44</li>
					<li data-value="45">45</li>
					<li data-value="46">46</li>
					<li data-value="47">47</li>
					<li data-value="48">48</li>
					<li data-value="49">49</li>
					<li data-value="50">50</li>
					<li data-value="51">51</li>
					<li data-value="52">52</li>
					<li data-value="53">53</li>
					<li data-value="54">54</li>
					<li data-value="55">55</li>
					<li data-value="56">56</li>
					<li data-value="57">57</li>
					<li data-value="58">58</li>
					<li data-value="59">59</li>

				</ul>
			</div>
	        <button>REQUEST A CALL</button>
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
		        <h1 style="font-size: 36px;
	font-weight: 300;
	line-height: 0.7;
	letter-spacing: 0.4px;
	text-align: center;
	color: #292728;">We could not recognize you</h1>
		        <h3 style="font-family: Montserrat Light;
	font-size: 18px;
	font-weight: 300;
	line-height: 1.3;
	letter-spacing: 0.2px;
	color: #6d6e71;">Enter your details below and you are all set!</h3>
		        <form id="CaptureForm" class="form-group" style="width: 50%;margin: 0 auto;margin-bottom: 30px;">
			        <input type="email" value="<?php echo (isset($_GET['email']) ? trim($_GET['email'])  : '') ?>" class="form-control" placeholder="Email Id" style="margin-bottom: 30px;"/>
					<input id="firstName" type="text" class="form-control" placeholder="Your Name" style="margin-bottom: 30px;" value="" required/>
					<input id="telephone" type="tel" class="form-control" placeholder="Phone Number" style="margin-bottom: 30px;" value="" required/>
			        <button class="btn" style="background: #223f6a;color: #fff;padding: 20px 60px;font-family: Montserrat Light;
	font-size: 16px;
	line-height: 1.4;
	letter-spacing: 0.2px;
	text-align: center;
	color: #ffffff;">SUBMIT</button>
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
			<div class="social">
				<a href="https://www.facebook.com/pages/Pip-Index-Capital-Markets/332922063514919" target="_blank"><img src="new-static/images/fb.png" alt="facebook icon"></a>

				<a href="https://twitter.com/PipIndex" target="_blank"><img src="new-static/images/twitter.png" alt="twitter icon"></a>

				<a href="http://www.linkedin.com/company/pip-index?trk=company_name" target="_blank"><img src="new-static/images/linkdn.png" alt="linkedin icon"></a>

				<a href="https://plus.google.com/114948536588787746452" rel="publisher" target="_blank"><img src="new-static/images/gplus.png" alt="google plus icon"></a>

			</div>

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
				<div class="thankYouTitle">Thank You</div>
				<div class="thankYouMessage">We will get back to you shortly</div>
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
	        utilsScript: 'intlTelInput/js/utils.js'
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
		$("#hours-selected-item .hours").text(option);
		$(".hours-dropdown").slideToggle( "fast", function() {
		});
	});
	$(".minutes-dropdown li").click(function(){
		var option = $(this).data('value');
		console.log(option);
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
		console.log(option);
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
	
	$("#CaptureForm button").click(function(event){
		event.preventDefault();
		var isFormValid = formValidate();
		if(isFormValid) {
			$.ajax({type:"POST",url: "collect.php",data:{
				email:$("#email").val(),
				username: $("#username").val(),
				phoneNumber:$("#phoneNumber").val(),
				firstName: $("#firstName").val()
			}, success: function(result){
		       	console.log(result);
				$('#myModalUnknown').modal('hide');
		       	$('#ackModal').modal('show');
		    }});
		}else {
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
