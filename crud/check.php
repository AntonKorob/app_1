<?php

// DB connection
require '../conf/conf.php';
// Validate Form Data
require '../stor_form/valid_form_faqs.php';

// 
$error = '';

if($email == ''){
    $error = 'Enter your email';
}else if($message == ''){
    $error = 'Enter your message';
}elseif (strlen($message) < 10) {
    $error = 'Message < 10 str';
}

if($error != ''){
    echo $error;
    exit;
}

$subject = "=?utf-8?B?".base64_encode("Test message")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('admin@com', $subject, $message, $headers);

header('Location: ../pages/faqs.php');