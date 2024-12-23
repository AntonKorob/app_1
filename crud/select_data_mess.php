<?php
// DB connection
require '../conf/conf2.php';

//create sql 
$sql = "SELECT `id`, `email`, `messages`, `time` FROM `messages_users` ORDER BY `id` DESC LIMIT 6";
$result = $conn->query($sql);


// $conn->close();