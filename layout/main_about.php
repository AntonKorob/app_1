<div class="container justify-content-center h-100">
<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">About Us</h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

<?php
// oop conection
require '../conf/conf2.php';

$sql = "SELECT * FROM `about_us` LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    
    
<?php  
  while($row = $result->fetch_assoc()) {
?>
     <div class="col ">
        <div class="card  mb-4 rounded-3 shadow-sm">
          <div class="card-header bg- p-2 text-white bg-opacity-75 py-3 ">
            <h4 class="my-0 fw-normal"><?php echo $row['title'] ?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php echo $row['article'];?></h1>
            <p class="list-unstyled mt-3 mb-4"><?php echo $row['description'];?></p>
          </div>
        </div>
      </div>
<?php  
  }

} 
$conn->close();  
?>
</div>
