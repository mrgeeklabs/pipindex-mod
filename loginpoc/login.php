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
    <link href="./new-login-style/font-awesome.min.css" rel="stylesheet">
    <link href="./new-login-style/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./new-login-style/styles.css">

    <?php

    // This is a quick and dirty solution
    // ideally should be a file

    $lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
    $allowedLanguages = array("en", "it", "es","de", "fr", "pt");
    if (in_array($lang, $allowedLanguages )===false ) {
        $lang="en";
    }

    function getLoginPageTranslation($language, $item)
    {
        $loginTranslations = [
            'en' => [
                'goToPip'        => 'Go to pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Log in to your account',
                'email'          => 'EMAIL ADDRESS',
                'pass'           => 'PASSWORD',
                'log_in'         => 'Log in',
                'forgot'         => 'Forgot Password?',
                'noAccount'      => 'Dont have an account?'
            ],
            'de' => [
                'goToPip'        => 'Gehe zu pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Loggen Sie sich in Ihr Konto ein',
                'email'          => 'E-Mail-Adresse',
                'pass'           => 'Passwort',
                'log_in'         => 'EINLOGGEN',
                'forgot'         => 'Passwort vergessen?',
                'noAccount'      => 'Sie haben noch kein Konto?'
            ],
            'es' => [
                'goToPip'        => 'Ir para pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Entrar en su cuenta',
                'email'          => 'EMAIL',
                'pass'           => 'contraseña',
                'log_in'         => 'ENTRAR',
                'forgot'         => 'Olvido la contraseña? ',
                'noAccount'      => 'No tiene una cuenta ?'
            ],
            'fr' => [
                'goToPip'        => 'Allez sur pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Connectez-vous à votre compte',
                'email'          => 'Adresse e-mail',
                'pass'           => 'Mot de passe',
                'log_in'         => 'CONNEXION',
                'forgot'         => 'Mot de passe oublié?',
                'noAccount'      => 'Vous n\'avez pas de compte?'
            ],
            'it' => [
                'goToPip'        => 'Vai a pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Accedi al tuo account',
                'email'          => 'Indirizzo Email',
                'pass'           => 'PASSWORD',
                'log_in'         => 'ACCEDERE',
                'forgot'         => 'Password dimenticata?',
                'noAccount'      => 'Non possiedi un account?'
            ],
            'pt' => [
                'goToPip'        => 'Ir para pipindex.com →',
                'loginHeader'    => 'Login',
                'loginToAccount' => 'Login na sua conta',
                'email'          => 'Endereço de email',
                'pass'           => 'Senha',
                'log_in'         => 'Login',
                'forgot'         => 'Esqueceu-se da sua password?',
                'noAccount'      => 'Não tem uma conta?'
            ],
        ];
        return $loginTranslations[$language][$item];
    }

    ?>
</head>
<body class="tradecore" ng-class="{&#39;grid&#39; : $state.includes(&#39;base.portal&#39;)}">
<section url="pipindex.com" class="ng-isolate-scope">
    <div class="top-bar" ng-show="!$state.includes(&#39;payment&#39;)">
        <div class="container" ng-class="{&#39;ib-topbar&#39; : $state.includes(&#39;base-ib.portal&#39;)}">
            <div class="row">
                <div class="col-xs-12 col-sm-6"><a ng-href="http://pipindex.com/" class="ng-binding"
                                                   href="http://pipindex.com/"><?= getLoginPageTranslation($lang, 'goToPip') ?></a></div>
                <div class="col-xs-12 col-sm-6 text-right"><a
                        ng-hide="$state.includes(&#39;base-ib&#39;) || data.isLogged || login == false"
                        href="https://clients.pipindex.com/#/auth/login" translate=""><span
                        class="ng-scope">Login</span></a> <a
                        ng-hide="!$state.includes(&#39;base-ib&#39;) || data.isLogged || login == false"
                        href="https://clients.pipindex.com/" translate="" class="ng-hide"><span
                        class="ng-scope"><?= getLoginPageTranslation($lang, 'loginHeader') ?></span></a>
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
                    <div class="text-center"><img src="./new-login-style/logo.png" alt=""></div>
                    <h2 translate=""><span class="ng-scope"><?= getLoginPageTranslation($lang, 'loginToAccount') ?></span></h2>
                    <form name='input' action='login-process.php' method='post'
                          class="ng-pristine ng-invalid ng-invalid-required">
                        <!-- ngIf: errors.non_field_errors.length > 0 --><!-- ngIf: errors.msg.length > 0 -->
                        <?php
                          if (isset($_GET['error']) && $_GET['error'] == true) {
                            echo '<div class="alert alert-danger">Your email or password was incorrect</div>';
                          }
                        ?>
                        <div class="form-group"
                             ng-class="{&#39;has-error&#39;: authForm.credentials.$invalid &amp;&amp; (authForm.credentials.$touched || authForm.$submitted)}">
                            <label translate="" for="credentials"><span class="ng-scope"><?= getLoginPageTranslation($lang, 'email') ?></span></label>
                            <input ng-required="true" ng-model="data.username" type="text" name="username"
                                   id="username"
                                   class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required"
                                   required="required">
                            <p class="help-block ng-hide"
                               ng-show="authForm.credentials.$invalid &amp;&amp; (authForm.credentials.$touched || authForm.$submitted)"
                               translate=""><span class="ng-scope">This field is required</span></p></div>
                        <div class="form-group"
                             ng-class="{&#39;has-error&#39;: authForm.password.$invalid &amp;&amp; (authForm.password.$touched || authForm.$submitted)}">
                            <label for="password" class="ng-binding"><?= getLoginPageTranslation($lang, 'pass') ?></label> <input required=""
                                                                                             ng-model="data.password"
                                                                                             type="password"
                                                                                             name="password"
                                                                                             id="password"
                                                                                             class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required">
                            <p class="help-block ng-binding ng-hide"
                               ng-show="authForm.password.$invalid &amp;&amp; (authForm.password.$touched || authForm.$submitted)">
                                This field is required</p></div>
                        <button translate="" type="submit" name="sub" class="btn btn-success btn-lg btn-block"><span
                                class="ng-scope"><?= getLoginPageTranslation($lang, 'log_in') ?></span></button>
                        <div class="row">
                            <div class="col-sm-5 pr0"><a href="https://clients.pipindex.com/#/auth/forgot"
                                                         class="ng-binding"><?= getLoginPageTranslation($lang, 'forgot') ?></a></div>
                            <div class="col-sm-7 text-right pl0"><a translate=""
                                                                    href="https://clients.pipindex.com/#/step-one"
                                                                   ><span class="ng-scope"><?= getLoginPageTranslation($lang, 'noAccount') ?></span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php'); echo '<img src="'. baseURL() .'trackevents.php?email=' .(isset($_GET['email']) ? trim($_GET['email'])  : '') .'&eventType=page-load&pageId=login"/>'; ?>
</ui-view>
<div growl="" class="ng-isolate-scope">
    <div class="growl-container growl-fixed top-right" ng-class="wrapperClasses()">
        <!-- ngRepeat: message in growlMessages.directives[referenceId].messages --></div>
</div>

<link href="./new-login-style/iwp.css" rel="stylesheet">



</body>
</html>