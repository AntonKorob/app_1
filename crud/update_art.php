<?php
include '../conf/conf_pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $article = $_POST['article'];
    $creator = $_POST['creator'];
}

$sql = "UPDATE articles SET id = $id, article = $article, creator = $creator ";
$stm = $pdo->query($sql);
require '../layout/header.php';
?>
...


<?php
require '../layout/footer.php';
?>