<?php
// define variables and set to empty values
$name = $email = $password= "";

if( isset($_POST['username'], $_POST['email'], $_POST['password']) ) {
  $username = test_input($_POST["username"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
}else{
         echo 'no insert';
    } 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>