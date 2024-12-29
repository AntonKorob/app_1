<?php 
require('../js/catalog.js');
?>
<div class="container d-flex  w-75 mt-5">
    <!-- list-group -->
    <div class="left_menu justify-content-evenly w-25 ">

        <!-- search input -->
        <?php require "../layout/components/catalog_search_input.php";
        
        // layout components
        for($i=1; $i<=10; $i++){
            require "../layout/components/catalog_ul_{$i}.php";       
        }
        ?>
    
    </div>

<div class="right_menu w-75 h-75" >

<div class="text-center m-4 p-4" id="panel" style="display: none;">
    
    <?php require('../crud/select_data_catalog_all.php');

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
    <h3 class="text-secondary"><?php echo $row["title"];?></h3>
    <p id="<?php echo $row["title"];?>"></p>
    <p id="panel_img"><img src="../img/img_holod.png" alt="www"></p>
    <p id="panel_descript"><?php echo $row["description"];?></p>
    <p id="panel_descript"><?php echo $row["price"];?></p>
    
    <?php ;}
}; 
$conn->close();
?>
</div>

    
</script>
</div>
</div>