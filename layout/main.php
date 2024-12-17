<div class="container d-flex justify-content-center p-2" >

<h2 class="pe-4">My Carousel</h2>
  <div id="myCarousel" class="carousel slide w-75 h-75" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner rounded " >

        <div class="item  active ">
            <img src="../img/art_1.jpg" alt="Los Angeles"  >
        <div class="carousel-caption">
            <h3 class="text-danger">Los Angeles</h3>
          <p class="text-danger">LA is always so much fun!</p>
        </div>
    </div>
    
      <div class="item">
        <img src="../img/art_2.jpg" alt="Chicago"  >
        <div class="carousel-caption">
            <h3 class="text-danger">Chicago</h3>
            <p class="text-danger">Thank you, Chicago!</p>
        </div>
    </div>
    
    <div class="item">
        <img src="../img/art_3.jpg" alt="New York" >
        <div class="carousel-caption">
            <h3 class="text-danger">New York</h3>
            <p class="text-danger">We love the Big Apple!</p>
        </div>
    </div>
    
</div>

<!-- Left and right controls -->
<a class="left carousel-control rounded" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control rounded" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>

<div class="pricing-header p-3 pb-md-4 mx-auto text-center mt-5">
        <h1 class="display-4 fw-normal text-body-emphasis">News today <?php echo date('d.m.Y')?></h1>
        <p class="fs-5 text-body-secondary">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
    
    <?php
// oop conection
require '../conf/conf2.php';

$sql = "SELECT * FROM `news_app` LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>

<div class="row row-cols-1 row-cols-md-3 m-3 text-center">
    
    
    <?php  
  while($row = $result->fetch_assoc()) {
      ?>
     <div class="col ">
         <div class="card  m-4 rounded-3 shadow-sm ">
             <div class="card-header bg-info p-2 text-black bg-opacity-75 py-3 ">
                <img src="../img/img_<?php echo $row['id']?>.png" class="rounded-circle" alt="">
                 <h4 class="mt-0 fw-normal"><?php echo $row['title'] ?></h4>
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
</div>