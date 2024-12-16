<?php
// DB connection
require '../conf/conf.php';

if( isset($_POST['username'], $_POST['email'], $_POST['password']) ){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
 }else{
     echo 'no insert';
} 
// Create sql

try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `users`( `name`, `email`, `password`) VALUES ('$name','$email','$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

    header("Location: ../pages/login.php"); 
    exit;
?>
            
            


