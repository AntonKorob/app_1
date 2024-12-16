<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=new_db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "ok";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>