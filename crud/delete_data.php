<?php
include '..//conf/conf.php';

 $sql = "DELETE FROM {catalog} WHERE id = ?";

 $id = '';

//  pdo($pdo, $sql, [$id]);