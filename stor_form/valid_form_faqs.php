<?php
// define variables and set to empty values
$email = $massege= "";

if( isset($_POST['email'], $_POST['message']) ) {
  $email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
}else{
         echo 'no insert';
    } 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}