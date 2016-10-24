<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/extension/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$defaultTranslationsPath = $_SERVER['DOCUMENT_ROOT'] . "/new_includes/translation_files/$lang/header_banner.php";
	include $defaultTranslationsPath;
?>
<header>
	<div class="header-container">
		<h1><?= $translationsHeader[$lang][0]?> <span><?= $translationsHeader[$lang][1]?></span></h1>
		<img src="new-static/images/Pipindex_Logo_new.png" id="pipindex-logo" alt="no-image">		
		<div class="pipindex-lang">
			<div class="dropdown">
				<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #fff;">
		        	<img src="new-static/images/lang-icon.svg" style="width: 18px;height: 18px;color: #313756;opacity: 0.8;">
					<span style="font-family: Open Sans;font-size: 11px;letter-spacing: 0.3px;color: #4fa4ce;">EN</span>
		        </button>
		        <!-- <ul class="dropdown-menu">
		          <li><a href="#">EN</a></li>
		          <li><a href="#">DE</a></li>
		          <li><a href="#">ES</a></li>
		          <li><a href="#">FR</a></li>
		          <li><a href="#">IT</a></li>
		        </ul> -->
	        </div>
		</div>
		<div class="clear-both"></div>
	</div>
</header>