<?php


require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php');
echo '<img src="'. baseURL() .'loginpoc/trackevents.php?email=' .getEmailFromCookie() .'&eventType=mail-open"/>';

require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/salesforce/salesforce.php');
$salesforce = new SalseforceHelper();

$response = $salesforce->FindLeadByEmail("ali.gajani@academyft.com");
echo $response['records'][0]['Id'];