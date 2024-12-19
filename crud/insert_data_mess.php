<?php
// DB connection
require '../conf/conf.php';
// Validate Form Data
require '../stor_form/valid_form_faqs.php';

// Create sql

try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO `messages_users`( `email`, `messages`) VALUES ('$email','$message')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

    header("Location: ../pages/faqs.php"); 
    exit;
?>
            
            


