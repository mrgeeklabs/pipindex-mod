<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/salesforce/salesforce.php');

if (count($_POST) > 0)
{

    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $phoneExists = checkInSalesforce($email);

    if ($phoneExists['status']) {
        respondWithJson(200, $phoneExists['phone']);
    } else {
        respondWithJson(400, "");
    }
} else
{
    respondWithJson(400, "No form data is supplied.");
    return;
}


function checkInSalesforce($inboundEmail) {
    $salesforce = new SalseforceHelper();
    $emailExists = $salesforce->FindLeadByEmail($inboundEmail);

    if ($emailExists['totalSize'] == 0) {
        logThis('No such emails exists in the Pipindex Salesforce: ' . $inboundEmail);
        respondWithJson(400, "Email does not exist in records.");
        die();
    }

    // @Manoj this is right but you were facing issues earlier
    // because you overwrote my salesforce file

    if (($emailExists['records'][0]['Phone'] == '') && ($emailExists['records'][0]['Phone_2__c']) == '')  {
        logThis("No phone records found for: " . $inboundEmail);
        return ['status' => false ];
    }
    return  ['status' => true, 'phone' => $emailExists['records'][0]['Phone']];
}