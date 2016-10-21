<?php

ini_set('memory_limit', -1);
$lines = gzfile('/Users/aligajani/Desktop/pipindex.com-Oct-2016.gz');

// This is for efficency purposes
// and reduces API calls

$processedEmails = array(
    'mail-open'      => [],
    'landing_page_3' => [],
    'accept-terms'   => [],
    'terms'          => []
);

// This  ensures we cherry pick
// the event types we want

$filters = array(
    'eventType=mail-open',
    'eventType=page-load&pageId=landing_page_3',
    'eventType=page-load&pageId=terms',
    'eventType=accept-terms'
);

// This collection will store the package
// that ultimately ends up in salesforce
$collection = array();

if ($lines)
{
    foreach ($lines as $line)
    {
        $logLine = parseApacheLogLine($line);
        foreach($filters as $filter)
        {
            if (isset($logLine[8]) && (strpos($logLine[8], $filter) !== false))
            {
                $trackingLine = parseTrackingLine($logLine[8]);
                $email = getCleanEmail($trackingLine['email']);
                if (!in_array($email, $processedEmails[$filter]) && $email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    array_push($processedEmails[$filter], $email);
                    error_log("\n" . $email, 3, "output.log");
                }
            }
        }
    }

    print_r($processedEmails);

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