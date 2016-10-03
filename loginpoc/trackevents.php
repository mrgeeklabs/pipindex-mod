<?php

require_once('utils.php');
require_once('salesforce/salesforce.php');

/*
*   trackevents.php
*   ✔ email=&eventType=mail-open
*   ✔ email=&eventType=mail-link-click&pageId=
*   ✔ email=&eventType=page-load&pageId=
*   ✔ email=&eventType=accept-terms
*
*   Possible Values for pageId
*   pageId=landing_page
*   ✔ pageId=terms
*   ✔ pageId=thank_you
*   ✔ pageId=login
 *
 */

// Create Image Pixel
$pixel=imagecreate(1,1);
$white=imagecolorallocate($pixel,255,255,255);
imagesetpixel($pixel,1,1,$white);

// Respond with image/png
header("content-type:image/png");
@header("X-Pipindex-Verify:" . count($_GET));
imagepng($pixel);
imagedestroy($pixel);

if (count($_GET) > 0){
    $email      = isset($_GET['email']) ? trim($_GET['email']) : null;
    $eventType  = isset($_GET['eventType']) ? trim($_GET['eventType']) : null;
    $pageId     = isset($_GET['pageId']) ? trim($_GET['pageId']) : null;

    $trackingData = 'email=' . $email . '&eventType=' . $eventType . '&pageId=' . $pageId;
    logThis($trackingData);

    if ($email == "") {
        logThis("Blank email supplied.");
        return;
    }

    if ($eventType == 'mail-open') {
        logThis("Attempting to log event: [mail-open] for user: " . $email);
        recordAnalytics($email, ['Event_Analytics__c' => 'mail-open']);
    }

    if ($eventType == 'mail-link-click') {
        logThis("Attempting to log event: [mail-link-click] for user: " . $email);
        recordAnalytics($email, ['Event_Analytics__c' => 'mail-link-click', 'Page_Analytics__c' => $pageId]);
    }

    if ($pageId == 'login') {
        logThis("Attempting to log page visit: [login] for user: " . $email);
        recordAnalytics($email, ['Event_Analytics__c' => 'page-load', 'Page_Analytics__c' => 'login']);
    }

    if ($pageId == 'terms') {
        logThis("Attempting to log page visit : [terms] for user: " . $email);
        recordAnalytics($email, ['Event_Analytics__c' => 'page-load', 'Page_Analytics__c' => 'terms']);
    }

    if ($eventType == 'accept-terms') {
        logThis("Attempting to log event: [accept-terms] for user: " . $email);
        recordAnalytics($email, ['Consent__c' => true, 'Event_Analytics__c' => 'accept-terms', 'Page_Analytics__c' => 'thank_you']);
    }

    if ($pageId == 'landing_page_3') {
        logThis("Attempting to log page visit: [landing_page_3] for user: " . $email);
        recordAnalytics($email, ['Event_Analytics__c' => 'page-load', 'Page_Analytics__c' => 'landing_page_3']);
    }





}

function  recordAnalytics($inboundEmail, $data) {

    $salesforce = new SalseforceHelper();
    $emailExists = $salesforce->FindLeadByEmail($inboundEmail);

    if ($emailExists['totalSize'] == 0) {
        logThis('No such emails exists in the Pipindex Salesforce: ' . $inboundEmail);
        return;
    }

    logThis("Email found: " . $inboundEmail);
    $pageAnalytics = $emailExists['records'][0]['Page_Analytics__c'];
    $eventAnalytics = $emailExists['records'][0]['Event_Analytics__c'];

    if (array_key_exists('Page_Analytics__c', $data)) {
       $pageAnalytics = mergeOldValuesInPicklist($pageAnalytics, $data['Page_Analytics__c']);
        $data['Page_Analytics__c'] = implode(";", array_unique(explode(";", $pageAnalytics)));
    }

    if (array_key_exists('Event_Analytics__c', $data)) {
        $eventAnalytics = mergeOldValuesInPicklist($eventAnalytics, $data['Event_Analytics__c']);
        $data['Event_Analytics__c'] = implode(";", array_unique(explode(";", $eventAnalytics)));
    }
    $salesforce->UpdateLead($emailExists['records'][0]['Id'], $data);
    logThis("Event recorded for: " . $inboundEmail);

}

function mergeOldValuesInPicklist($oldData, $newData) {
    if (strlen($oldData) < 3) {
        return $newData;
    } else {
        return $oldData . ';' . $newData;
    }
}
