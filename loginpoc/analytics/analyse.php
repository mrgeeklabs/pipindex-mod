<?php

ini_set('memory_limit', -1);

$lines = gzfile('logs/pipindex.com-Oct-2016.gz');
$processedEmails = array();

if ($lines)
{
    foreach ($lines as $line)
    {
        $logLine = parseApacheLogLine($line);
        if (isset($logLine[8]) && strpos($logLine[8], "/trackevents.php" !== false))
        {
            $trackingLine = parseTrackingLine($logLine[8]);
            $email = getCleanEmail($trackingLine['email']);
             if (!in_array($email, $processedEmails) && $email !== "" && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($processedEmails, $email);
                error_log("\n" . $email, 3, "output.log");
            }
        }
    }

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