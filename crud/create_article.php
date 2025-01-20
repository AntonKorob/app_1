<?php
// Name title
$title = "New Article";
require '../layout/header.php';
?>

<div class="container ">
    <form class="form-control form-control-lg " action="../crud/create_article.php" method="post">
        <label>Enter Creator</label>
        <input class="form-control form-control-lg  m-3 p-3 w-50" type="text" name="creator" required>

        <label>Enter Article</label>
        <textarea class="form-control form-control-lg m-3 p-3 w-50" name="article" id="" cols="30" rows="10" required></textarea>

        <button class="btn btn-success  d-flex m-3 p-3 w-25" type="submit" value="Save">SAVE</button>
    </form>
    <button class="btn btn-info"><a href="../layout/articles.php">Back</a></button>
</div>

<?php
include '../conf/conf_pdo.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['article'])) {
        $article = $_POST['article'];
        $creator = $_POST['creator'];

        $sql = "INSERT INTO articles(article,creator) VALUES ('$article', '$creator' ) ";
        $stm = $pdo->query($sql);
    }
        // header('Location: ../layout/articles.php');    
}
require '../layout/footer.php';
?>