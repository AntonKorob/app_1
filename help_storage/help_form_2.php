<?php  
 if (isset($_GET['attributes'])) {

    if (array_key_exists('self', $_GET)) {
        $description = join(" ", $_GET['attributes']);
        // var_dump($description);
        echo "Вы - <b>{$description}</b>";
    }
} 