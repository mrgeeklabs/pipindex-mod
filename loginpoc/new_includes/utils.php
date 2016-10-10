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
    function getPrizeMoney($currency){
        $prizeMoney=array(
            "eur"=>"11,000",
            "usd"=>"12,000",
            "gbp"=>"10,000"
        );
        return getMoneySymbol($currency)." $prizeMoney[$currency]";
    }
    function getMoneySymbol($currency){
        $prizeMoney=array(
            "eur"=>"€",
            "usd"=>"$",
            "gbp"=>"£"
        );
        return $prizeMoney[$currency];
    }
    function getEtxLink($language, $currency){
        $linksEnglish=array(
            "gbp" => "https://www.etxcapital.com/account/sign-up?v=3&Platform=MT4-FX&RefID=100242&Cur=GBP",
            "usd" => "https://www.etxcapital.com/account/sign-up?v=3&Platform=MT4-FX&RefID=100241",
            "eur" => "https://www.etxcapital.com/account/sign-up?v=3&Platform=MT4-FX&RefID=100241&Cur=EUR"
        );
        if($language==='en'){
            return $linksEnglish[$currency];
        } else {
            $linksLanguage=array(
                "de" => "https://www.etxcapital.de/konto/jetzt-beantragen?v=3&Platform=MT4-FX&RefID=100244",
                "fr" => "https://www.etxcapital.fr/compte/inscription?v=3&Platform=MT4-FX&RefID=100246",
                "es" => "https://www.etxcapital.es/cuenta/solicitala-ahora?v=3&Platform=MT4-FX&RefID=100243",
                "pt" => "https://www.etxcapital.pt/cuenta/solicitala-ahora?v=3&Platform=MT4-FX&RefID=100243",
            );
            return $linksEnglish[$language];
        }
    }
    function getMoneyTable($currency){
        $moneyTable=array(
            "live"=> array(
                array(getMoneySymbol("gbp")." 200/".getMoneySymbol("eur")." 250/".getMoneySymbol("usd")." 275"  ,"100", "150"),
                array("1,000 - 2,999", "250","400"),
                array("3,000 - 4,999", "1000", "1500"),
                array("5,000 - 7,499","1500","2000"),
                array("7,500 - 9,999","2000","3000"),
                array("10,000 - 14,999", "2500", "4000"),
                array("15,000 - 19,999", "3000", "5000"),
                array("20,000 - 24,999", "3500", "7500"),
                array("25,000 - 49,999", "5000", "10000"),
                array("50,000 - 99,999", "7500", "15000"),
                array("100,000+","7500", "")
            ),
            "eur"=>array(
                array(getMoneySymbol("eur")." 250+","100", "150"),
                array("1,000 - 2,999", "250","400"),
                array("3,000 - 4,999", "1000", "1500"),
                array("5,000 - 7,499","1500","2000"),
                array("7,500 - 9,999","2000","3000"),
                array("10,000 - 14,999", "2500", "4000"),
                array("15,000 - 19,999", "3000", "5000"),
                array("20,000 - 24,999", "3500", "7500"),
                array("25,000 - 49,999", "5000", "10000"),
                array("50,000 - 99,999", "7500", "15000"),
                array("100,000+","7500", "")
            ),
            "usd"=>array(
                array(getMoneySymbol("usd")."275+","100", "150"),
                array("1,000 - 2,999", "250","400"),
                array("3,000 - 4,999", "1000", "1500"),
                array("5,000 - 7,499","1500","2000"),
                array("7,500 - 9,999","2000","3000"),
                array("10,000 - 14,999", "2500", "4000"),
                array("15,000 - 19,999", "3000", "5000"),
                array("20,000 - 24,999", "3500", "7500"),
                array("25,000 - 49,999", "5000", "10000"),
                array("50,000 - 99,999", "7500", "15000"),
                array("100,000+","7500", "")
            ),
            "gbp"=>array(
                array(getMoneySymbol("gbp")."200+","100", "150"),
                array("1,000 - 2,999", "250","400"),
                array("3,000 - 4,999", "1000", "1500"),
                array("5,000 - 7,499","1500","2000"),
                array("7,500 - 9,999","2000","3000"),
                array("10,000 - 14,999", "2500", "4000"),
                array("15,000 - 19,999", "3000", "5000"),
                array("20,000 - 24,999", "3500", "7500"),
                array("25,000 - 49,999", "5000", "10000"),
                array("50,000 - 99,999", "7500", "15000"),
                array("100,000+","7500", "")
            )
        );
        return $moneyTable[$currency];
    }
    function Redirect($url, $code = 302)
    {
        if (strncmp('cli', PHP_SAPI, 3) !== 0)
        {
            if (headers_sent() !== true)
            {
                if (strlen(session_id()) > 0) // if using sessions
                {
                    session_regenerate_id(true); // avoids session fixation attacks
                    session_write_close(); // avoids having sessions lock other requests
                }

                if (strncmp('cgi', PHP_SAPI, 3) === 0)
                {
                    header(sprintf('Status: %03u', $code), true, $code);
                }

                header('Location: ' . $url, true, (preg_match('~^30[1237]$~', $code) > 0) ? $code : 302);
            }
           exit();
        }
    }