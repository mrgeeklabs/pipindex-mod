<?php
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){

    $response = makeApiRequest();

    $lang = isset($_POST['lang']) ? trim($_POST['lang'])  : 'en';
    $allowedLanguages = array("en", "it", "es","de", "fr", "pt");
    if (in_array($lang, $allowedLanguages )===false ) {
        $lang="en";
    }

    if (isset($response['non_field_errors'])) {
        header('LOCATION: login.php?error=true&lang=' . $lang);
    }

    $username = $_POST['username']; $password = $_POST['password'];
    if(isset($response['token'])) {
        setcookie("auth_token", $response['token'], 0, "/", "pipindex.com", 1);
        setcookie("auth_token", $response['token']);
        setcookie("user_email", $username);

        $_SESSION['auth_token'] = $response['token'];
        // appending auth_token as a parameter
        // to show token is received correctly
        header('LOCATION: terms-and-condition-fl.php?email=' . $username . '&lang=' . $lang);
    }


}

function makeApiRequest() {
    $post = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];

    $ch = curl_init('https://clients.pipindex.com/api/accounts/login/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, TRUE);
}



