<?php
include '../conf/conf_pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $categorie = $_POST['categorie'];
    $description = $_POST['description'];
}

$sql = "UPDATE cargories SET id = $id, categorie = $categorie, description = $description ";
$stm = $pdo->query($sql);
require '../layout/header.php';
?>

...

<?php
require '../layout/footer.php';
?>

