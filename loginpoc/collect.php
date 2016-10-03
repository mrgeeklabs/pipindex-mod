<?php

require_once('utils.php');
require_once('salesforce/salesforce.php');

if (count($_POST) > 1)
{

    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $requestForInfo = isset($_POST['requestForInfo']) ? trim($_POST['requestForInfo']) : null;
    $requestForCall = isset($_POST['requestForCall']) ? trim($_POST['requestForCall']) : null;
    $phoneNumber = isset($_POST['phoneNumber']) ? trim($_POST['phoneNumber']) : null;

    $packageForSalesforce = [
        'Request_To_Call_Time__c'          => $requestForCall,
        'Request_For_More_Information__c' => $requestForInfo,
        'Phone'                           => $phoneNumber,
    ];

    sendToSalesforce($email, array_filter($packageForSalesforce));
} else
{
    respondWithJson(400, "No form data is supplied.");
    return;
}


function sendToSalesforce($inboundEmail, $data) {
    $salesforce = new SalseforceHelper();
    $emailExists = $salesforce->FindLeadByEmail($inboundEmail);

    if ($emailExists['totalSize'] == 0) {
        logThis('No such emails exists in the Pipindex Salesforce: ' . $inboundEmail);
        respondWithJson(400, "Email does not exist in records.");
        return;
    }

    logThis("Email found: " . $inboundEmail);
    $salesforce->UpdateLead($emailExists['records'][0]['Id'], $data);
    logThis("Information collected from landing page 3 for user: " . $inboundEmail);
    respondWithJson(200, "Information successfully captured from form.");
}