<?php
define("EMAIL_DEFAULT_FROM", "ali.gajani@academyft.com");
define("EMAIL_DEFAULT_FROM_NAME", "PIPX");
define("EMAIL_SMTP_SERVER", "smtp.gmail.com");

define("EMAIL_SMTP_ENCRYPTION", "tls");
define("EMAIL_SMTP_PORT", 587);
define("EMAIL_SMTP_USERNAME", "ali.gajani@academyft.com");
define("EMAIL_SMTP_PASSWORD", "246810aa");

require_once($_SERVER['DOCUMENT_ROOT'] . '/Mail/phpmailer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/new_includes/utils.php');

function dispatchTo($inboundEmail)
{

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = EMAIL_SMTP_ENCRYPTION;
    $mail->Host       = EMAIL_SMTP_SERVER;
    $mail->Port       = (int)EMAIL_SMTP_PORT;
    $mail->Username   = EMAIL_SMTP_USERNAME;
    $mail->Password   = EMAIL_SMTP_PASSWORD;
    $mail->CharSet    = "UTF-8";

    $mail->SetFrom('ali.gajani@academyft.com', 'Ali Gajani');
    $mail->AddAddress($inboundEmail, '');
    $mail->Subject = 'PipIndex Transfer Request';
    $mail->MsgHTML('<p>The follow client has agreed to transfer their PipIndex account to ETX capital, has agreed to ETX Capital’s Privacy Policy and has consented to be contact directly by ETX Capital</p>');

    if (!$mail->Send())
    {
        logThis("Mailer error while sending to: " . $inboundEmail);
    } else
    {
        logThis("Email sent to: " . $inboundEmail);
    }
}