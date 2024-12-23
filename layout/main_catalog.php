<?php require('../js/catalog.js'); ?>

<div class="container justify-content-evenly w-25 mt-5">
    <!-- list-group -->
    <div class="left_menu">

        <!-- search input -->
        <?php require "../layout/components/catalog_search_input.php";
        
        // layout components
        for($i=1; $i<=10; $i++){
            require "../layout/components/catalog_ul_{$i}.php";       
        }
        ?>
    
    </div>

</div>
<div class="right_menu">

</div>
</div>