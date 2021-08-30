<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/GenComp/vendor/autoload.php');

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('0gencomp0@gmail.com')
    ->setPassword('GenComp123');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendResetPasswordEmail($userEmail, $token)
{
    global $mailer;
    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
      
      </style>
    </head>

    <body>
      <div class="wrapper">
        Hi there, click on this <a href="http://localhost/GenComp/student/reset-password/new_password.php?token='.$token.'">link</a> to reset your password on our site
      </div>
    </body>'
    ;

    // Create a message
    $message = (new Swift_Message('Reset Password'))
        ->setFrom('0gencomp0@gmail.com')
        ->setTo($userEmail)
        ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);

    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}