

<div class="container  justify-content-center">
    <div class="fatch_span">
        <h1 class="text-center">Tabel All</h1>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum labore voluptatem dolor ex, et dolores, totam quae quas ipsam officia, hic natus.</p>

<!-- select all in table table_cities db -->
<?php
// oop conection
require '../conf/conf2.php';

$sql = "SELECT * FROM `table_cities`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

<table class="table table-info table-hover rounded">
  <thead >
    <tr> 
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
    <!-- info -->
<div class="info mt-3">
  <h3>Copy : Click on button </h3>
  <h3>Enter : Ctr + V</h3>
  <h3>Reset : Click on buttpn "Reset"</h3>
</div>
<!-- btn-group -->

<div class="btn-group mt-3" role="group" aria-label="Basic example">
  <button id="Copy1" type="button" class="btn btn-primary">Left</button>
  <button id="Copy2" type="button" class="btn btn-primary">Middle</button>
  <button id="Copy3" type="button" class="btn btn-primary">Right</button>
  <button id="Copy4" type="button" class="btn btn-primary">Hello</button>
</div>

<div class="textarea mt-3">
  <textarea name="text" id="text" cols="30" rows="10" placeholder="Enter your text"></textarea>
</div>
<div class="reset">
  <button onClick="window.location.reload();" class="btn btn-danger" type="reset">Reset</button>
</div>

<!-- script -->
<script src="../js/features.js"></script>
</div>



