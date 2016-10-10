<?php
	require_once($_SERVER['DOCUMENT_ROOT'] .'/new_includes/utils.php');
	$lang = isset($_GET['lang']) ? trim($_GET['lang'])  : 'en';
	$currency = isset($_GET['currency']) ? trim($_GET['currency'])  : 'gbp';
	$allowedCurrency = array("usd", "gbp", "eur");
	$allowedLanguages = array("en", "it", "es","de");
	if (in_array($currency, $allowedCurrency )===false ) {
		$currency="gbp";
	}
	if (in_array($lang, $allowedLanguages )===false ) {
		$lang="en";
	}
	Redirect(getEtxLink($lang, $currency));