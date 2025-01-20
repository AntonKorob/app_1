<?php
// Name title
$title = "New Categoies";
require '../layout/header.php';
?>

<div class="container ">
    <form class="form-control form-control-lg w-50 " action="../crud/create_category.php" method="post">
        <label>Enter Categoiry</label>
        <input class="form-control form-control-lg  m-3 p-3 w-50" type="text" name="category" required>

        <label>Enter Description</label>
        <textarea class="form-control form-control-lg m-3 p-3 w-50" name="description"  cols="30" rows="10" required></textarea>

        <button class="btn btn-success  d-flex m-3 p-3 w-25" type="submit" value="Save">SAVE</button>
    </form>
    <button class="btn btn-info"><a href="../layout/categories.php">Back</a></button>
</div>

<?php
include '../conf/conf_pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = $_POST['category'];
    $description = $_POST['description'];

    if (isset($_POST['category'])) {
        $sql = "INSERT INTO cargories(category,description) VALUES ('$category', '$description' ) ";

        $stm = $pdo->query($sql);
    }
}
// header('Location: ../layout/categories.php');    
require '../layout/footer.php';
?>