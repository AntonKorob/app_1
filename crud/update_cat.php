<?php
include '../conf/conf_pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $category = $_POST['category'];
    $description = $_POST['description'];
}

$sql = "UPDATE cargories SET id = $id, category = $category, description = $description ";
$stm = $pdo->query($sql);
require '../layout/header.php';
?>

...

<?php
require '../layout/footer.php';
?>

