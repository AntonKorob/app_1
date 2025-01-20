<?php
session_start();
$cookie_name = "admin";
$cookie_password = "admin";

if(isset($_POST['username'] )){

    if($cookie_name === $_POST['username'] && $cookie_name === $_POST['password'] ){
        
        setcookie($cookie_name, $cookie_password, time() + (86400 * 30), "/"); // 86400 = 1 day
        
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
    }
}
?>

