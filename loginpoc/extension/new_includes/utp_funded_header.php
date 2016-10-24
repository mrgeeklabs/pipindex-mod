<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/extension/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/header_banner.php";
	include $defaultTranslationsPath;
	if($lang == 'es' || $lang == 'pt'){
		$logo_margin = '150px';
	}
	else{
		$logo_margin = '72px';
	}
?>
<header>
	<div class="header-container funded_header">
		<h1><?= $translationsHeader[$lang][0]?> <span><?= $translationsHeader[$lang][1]?></span></h1>
		<img src="new-static/images/Logo3.png" id="utpLogo" alt="no-image" style="margin-left: <?= $logo_margin ?>">		
		<div class="pipindex-lang">
			<!--<img src="new-static/images/lang-icon.svg" style="width: 12px;height: 12px;color: #313756;opacity: 0.8;">
			<span style="font-family: Open Sans;font-size: 11px;letter-spacing: 0.3px;color: #4fa4ce;">EN</span>-->
		</div>
		<div class="clear-both"></div>
	</div>
</header>