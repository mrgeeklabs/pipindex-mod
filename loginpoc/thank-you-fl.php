<?php if ( (!isset($_GET['email']) && !isset($_COOKIE['user_email'])) || (isset($_GET['email']) && $_GET['email'] == "") ) header('LOCATION:http://pipindex.com'); ?>
<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
$currency = isset($_GET['currency']) ? trim($_GET['currency'])  : 'gbp';
$allowedCurrency = array("usd", "gbp", "eur");
$allowedLanguages = array("en", "it", "es","de", "fr", "pt");
if (in_array($currency, $allowedCurrency )===false ) {
    $currency="gbp";
}
if (in_array($lang, $allowedLanguages )===false ) {
    $lang="en";
}
$prizeMoney=getPrizeMoney($currency);
$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/thankyou-2.php";
include $defaultTranslationsPath;
if (isset($_GET['email'])) setcookie("user_email", trim($_GET['email']));
?>
<!DOCTYPE html>
<html>
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
<body class="thankyou-body">
<div id="loadingIndicator" style="width: 100%;height: 100%;z-index: 999;background-color: #000;opacity: 0.7;position: fixed;display: none;">
    <div style="width: 100%; text-align: center;color: #fff;">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="margin-top: 25%;font-size: 100px;"></i>
        <!-- <p>Loading</p> -->
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/new_includes/utp_funded_header.php"; ?>
<div class="thankYouContainer">
    <div class="rightTick">
        <img src="https://s3-eu-west-1.amazonaws.com/shawaftassets/img/website/green-tick.svg" />
    </div>
    <div class="thankYouTitle"><?= $translations[$lang]["thankYouContainer"][0] ?></div>

    <div class="whatHappensContainer">
        <div class="text1"><?= $translations[$lang]["thankYouContainer"][1] ?></div>
    </div>

    <?php echo '<img src="'. baseURL() .'trackevents.php?email=' .getEmailFromCookie() .'&eventType=accept-terms"/>'; ?>
</div>
<div class="whathappennext">
    <h3><?= $translations[$lang]["whathappennext"][0] ?></h3>
    <img src="new-static/images/email.svg" height="41px" width="45px" />
    <h4><?= $translations[$lang]["whathappennext"][1] ?></h4>
</div>
<div class="lp3-wrapper">
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
            </div>
            <div style="display: flex;">
                <?php
                foreach($translations[$lang]["update-steps-container"] as $step) {
                    ?>
                    <div class="steps">
                        <p class="step-info"><?= $step ?></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <!-- <img src="new-static/images/down-icon.png"  class="down-icon"/> -->
        <!-- <a class="btn update-account-button" href="https://www.etxcapital.com/account/sign-in">CLICK HERE TO GO TO YOUR NEW LOGIN</a>
        <p class="remember">Remember your details were just sent by email</p> -->
    </div>
    <div class="thankyou-footer">
        <p><?= $translations[$lang]["thankyou-footer"][0] ?></p>
        <p><?= $translations[$lang]["thankyou-footer"][1] ?><span><?=$prizeMoney ?></span></p>
    </div>
    <!-- Contact us information -->
    <div class="have-query">
        <p id="query-title">Have any queries?</p>
        <p id="query-message">Choose a suitable time and we will contact you.</p>
        <div class="custom-time-select-dropdown">
            <label id="hours-selected-item"><span class="icon"></span><span class="hours">00</span><sub><br>
                    <b>Notice</b>:  Undefined index: hours in <b>/Users/aligajani/Dropbox/Work/Code/pipindex-mod/loginpoc/offer-fu.php</b> on line <b>297</b><br>
                </sub></label>
            <ul class="hours-dropdown">
                <li data-value="00">00</li>
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
            </ul>
            <label id="minute-selected-item"><span class="icon"></span><span class="minutes">00</span><sub><br>
                    <b>Notice</b>:  Undefined index: minutes in <b>/Users/aligajani/Dropbox/Work/Code/pipindex-mod/loginpoc/offer-fu.php</b> on line <b>308</b><br>
                </sub></label>
            <ul class="minutes-dropdown">
                <li data-value="00">00</li>
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
        <textarea id="customerQuestion" rows="5" placeholder="Type your question here"></textarea>

        <div style="margin-top: 30px;">
            <a id="query-submit-button">SUBMIT</a>
        </div>
    </div>
    <!-- End of contact us information -->
</div>
<div style="background-color: #f6f6f6;font-family: Montserrat Light;text-align: center;padding-bottom: 65px;height: 370px;">
    <img src="new-static/images/Asset34.svg" style="width: 25px;height: 26px;margin: 0 auto;margin-top: 35px;">
    <p class="contact-text" style="padding-bottom: 40px;padding-top: 10px;font-size: 15px;
	font-weight: 300;
	line-height: 1.7;
	text-align: center;
	color: #6d6e71;"><?= $translations[$lang]["contact-text"] ?></p>

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


<?php
include ($_SERVER['DOCUMENT_ROOT'] .'/footer.php');
?>
</body>
</html>