<?php
include '../conf/conf2.php';
include '../crud/info_app.php'
?>

<div class="container justify-content-center">
    <?php
    if ($result->num_rows > 0) {
        echo "<table><h3>Info app</h3>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] . " " . $row["info"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</div>