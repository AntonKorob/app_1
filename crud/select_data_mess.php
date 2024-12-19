<?php
// DB connection
require '../conf/conf2.php';

//create sql 
$sql = "SELECT `id`, `email`, `messages`, `time` FROM `messages_users`";
$result = $conn->query($sql);


// $conn->close();