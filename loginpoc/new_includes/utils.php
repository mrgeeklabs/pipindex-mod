<?php
	function translateLabel($string, $translations) {
	    if (isset($translations['labels'][$string])) {
	        return $translations['labels'][$string];
	    }
	    return $string;
	}

	function logThis($data) {
        $time = date("Y-m-d H:i:s", time());
        $log = '[' . $time . '] INFO: ' . $data;
        error_log("\n" .$log, 3, "events.log");
    }

    function baseURL(){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        } else {
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . '/';
    }

    function getEmailFromCookie() {

        if (isset($_GET['email'])) {
            return trim($_GET['email']);
        }

        if (isset($_COOKIE['user_email'])) {
            return trim($_COOKIE['user_email']);
        }
        return null;
    }

    function respondWithJson($status, $message) {
        header('Content-Type: application/json');
        if ($status == 200) {
            echo json_encode(['success' => true, 'message' => $message]);
        } else {
            echo json_encode(['success' => false, 'message' => $message]);
        }

    }

    function postThankYouPageHref() {
        if (isset($_COOKIE['auth_token'])) {
            echo "https://clients.pipindex.com";
        }  else {
            echo baseURL() . "login.php?email=" . $_COOKIE['user_email'];
        }

    }
