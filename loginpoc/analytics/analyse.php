<?php

ini_set('memory_limit', -1);
$lines = gzfile('/Users/aligajani/Desktop/pipindex.com-Oct-2016.gz');

// This is for efficency purposes
// and reduces API calls

$filters = array(
    'eventType=mail-open'                           => [],
    'eventType=page-load&pageId=landing_page_3'     => [],
    'eventType=page-load&pageId=terms'              => [],
    'eventType=accept-terms'                        => []
);

// This collection will store the package
// that ultimately ends up in salesforce

$collection = array();

if ($lines)
{
    foreach ($lines as $line)
    {
        $logLine = parseApacheLogLine($line);
        foreach($filters as $key => $filter)
        {
            if (isset($logLine[8]) && (strpos($logLine[8], $key) !== false))
            {
                $trackingLine = parseTrackingLine($logLine[8]);
                $email = getCleanEmail($trackingLine['email']);
                if (!in_array($email, $filters[$key]) && $email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL))
                {

                    $time  = explode(":", $logLine[5]);
                    $date = DateTime::createFromFormat('d/M/Y', $logLine[4]);
                    $dateTime = $date->format('d/m/yyyy') . ' ' . $time[0] . ':' .$time[1];

                    if ($key == "eventType=mail-open") {
                        $intermediatePackage = [
                            'Email_Open_Time__c' => $dateTime,
                            'Email_Open_IP__c'   => $logLine[1]
                        ];
                    } elseif ($key == "eventType=page-load&pageId=landing_page_3") {
                        $intermediatePackage = [
                            'Landing_Page_Time__c' => $dateTime,
                            'Landing_Page_IP__c'   => $logLine[1]
                        ];
                    } elseif ($key == "eventType=page-load&pageId=terms") {
                        $intermediatePackage = [
                            'Agreed_T_C_Page_Time__c' => $dateTime,
                            'Agreed_T_C_Page_IP__c'   => $logLine[1]
                        ];
                    } else {
                        $intermediatePackage = [
                            'Agreed_T_C_Time__c' => $dateTime,
                            'Agreed_T_C_IP__c'   => $logLine[1]
                        ];
                    }
                    array_push($filters[$key], $email);
                    $collection[$key][$email] = $intermediatePackage;
                }
            }
        }
    }
    // For debug purposes only
    error_log("\n" . print_r($collection, TRUE), 3, "output.log");


} else
{
    // error opening the file.
}

function getCleanEmail($emailDirty)
{
    return rtrim(trim($emailDirty, "{"), "}");
}

function parseApacheLogLine($rawLine)
{
    $regex = '/^(\S+) (\S+) (\S+) \[([^:]+):(\d+:\d+:\d+) ([^\]]+)\] \"(\S+) (.*?) (\S+)\" (\S+) (\S+) "([^"]*)" "([^"]*)"$/';
    preg_match($regex, $rawLine, $matches);

    return $matches;
}

function parseTrackingLine($trackingSegment)
{
    $step1 = explode("?", $trackingSegment)[1];
    parse_str($step1, $trackingLineIntoArray);

    return $trackingLineIntoArray;

}

/*
 * Reference for accessing log data from array
 *
    [0] => 64.156.195.164 - - [10/Oct/2016:21:39:20 -0700] "GET /trackevents.php?email=%7B!Lead.Email%7D&eventType=mail-open HTTP/1.1" 200 93 "-" "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Safari/602.1.50"
    [1] => 64.156.195.164
    [2] => -
    [3] => -
    [4] => 10/Oct/2016
    [5] => 21:39:20
    [6] => -0700
    [7] => GET
    [8] => /trackevents.php?email=%7B!Lead.Email%7D&eventType=mail-open
    [9] => HTTP/1.1
    [10] => 200
    [11] => 93
    [12] => -
    [13] => Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/602.1.50 (KHTML, like Gecko) Version/10.0 Safari/602.1.50
 */