<?php
include '../conf/conf_pdo.php';

$sql = "SELECT id, categorie, description, timestemp FROM cargories";
$stm = $pdo->query($sql);
$categories = $stm->fetchAll();

// Name title
$title = "Categories";


require '../layout/header.php';
require '../layout/main_admin.php';
foreach ($categories as $categorie) { ?>
    <div>
        
        <form action="../crud/delete_cat.php" method="get">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Description</th>
                    <th scope="col">Timestemp</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <td><?= $categorie['id']; ?></td>
                        <td><?= $categorie['categorie']; ?></td>
                        <td><?= $categorie['description']; ?></td>
                        <td><?= $categorie['timestemp']; ?></td>

                        <td>
                            <button class="btn btn-info"><a href="../crud/update_cat.php">Up date</a></button>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="submit" name="id" value="<?php echo $categorie['id']; ?>">Delete</button>
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