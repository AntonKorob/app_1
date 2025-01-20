<?php
include '../conf/conf_pdo.php';
include '../functions/functions.php';

$sql = "SELECT id, name, email, password FROM users WHERE name = 'admin'";
$statement = $pdo->query($sql);
$members = $statement->fetchAll();

foreach ($members as $member) {
    echo "<h3> Welcome : " . $member['name'] . "<h3>";
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="d-flex">
            <a class="navbar-brand" href="../layout/categories.php">
                <h3>Categories</h3>
            </a>
            <button type="button" class="btn btn-outline-primary"><a href="../crud/create_categorie.php">Create New Categories</a></button>
        </div>
        <div class="d-flex">
            <a class="navbar-brand" href="../layout/atricles.php">
                <h3>Atricles</h3>
            </a>
            <button type="button" class="btn btn-outline-primary"><a href="../crud/create_atricle.php">Create New Atricles</a></button>
        </div>
    </div>
</nav>