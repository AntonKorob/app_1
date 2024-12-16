

<div class="container d-flex justify-content-center">
    <div class="fatch_span">
        <h1 class="text-center">Tabel All</h1>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore voluptatem dolor ex, et dolores, totam quae quas ipsam officia, hic natus.</p>

<!-- select all in table table_cities db -->
<?php
// oop conection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `table_cities`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

<table class="table table-info table-hover rounded">
  <thead >
    <tr class="h-25"> 
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">City</th>
    </tr> 

<?php  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td>
    <td>".$row["title"]."</td>
    <td>".$row["description"]."</td>
    <td> ".$row["city"]."</td></tr>";
  }
  echo "</thead></table>";
} else {
  echo "0 results";
}
$conn->close();


?>

    </div>
</div>