<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/header_banner.php";
	include $defaultTranslationsPath;
?>
<header>
	<div class="header-container">
		<h1><?= $translationsHeader[$lang][0]?> <span><?= $translationsHeader[$lang][1]?></span></h1>
		<img src="new-static/images/Pipindex_Logo_new.png" id="utpNonFundedLogo" alt="no-image">		
		<!--<div class="pipindex-lang">
			<img src="new-static/images/lang-icon.svg" style="width: 18px;height: 18px;color: #313756;opacity: 0.8;">
			<span style="font-family: Open Sans;font-size: 11px;letter-spacing: 0.3px;color: #4fa4ce;">EN</span>
		</div>-->
		<div class="clear-both"></div>
	</div>
</header>