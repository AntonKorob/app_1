<?php
include '../conf/conf_pdo.php';

$sql = "SELECT id, article, creator, timestemp FROM articles";
$stm = $pdo->query($sql);
$articles = $stm->fetchAll();

// Name title
$title = "Atricles";


require '../layout/header.php';
require '../layout/main_admin.php';
foreach ($articles as $article) { ?>
    <div>

        <form action="../crud/delete_art.php" method="get">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Article</th>
                        <th scope="col">Creator</th>
                        <th scope="col">Timestemp</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $article['id']; ?></td>
                        <td><?= $article['article']; ?></td>
                        <td><?= $article['creator']; ?></td>
                        <td><?= $article['timestemp']; ?></td>

                        <td>
                            <button class="btn btn-info"><a href="../crud/update_art.php">Up date</a></button>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="submit" name="id" value="<?php echo $article['id'];?>">Delete</button>
        </form>
        </td>
        </tr>

        </tbody>
        </table>
    </div>

<?php }
?>


<?php
require '../layout/footer.php';
?>