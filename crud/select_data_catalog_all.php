<?php
// DB connection
require '../conf/conf2.php';

//create sql 
$sql = "SELECT `id`, `title`, `description`, `img`, `price` FROM `catalogs`";
$result = $conn->query($sql);


// $conn->close();