<div class="container w-25 mt-5">
    <h3>Form messages</h3>
<form action="../crud/insert_data_mess.php" method="post" class="p-2 m-3">
    <input type="email" name="email" placeholder="Enter email" class="form-control" required>
    <textarea name="message" rows="10" class="form-control p-2 mt-3 h-50" placeholder="Enter message" required></textarea>
    <button type="submit" name="send" class="btn btn-success mt-3">Send</button>
</form>

</div>


<?php 
require '../crud/select_data_mess.php';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        ?>
        <div class="row g-0 text-center border border-info-subtle m-4 p-3" style="width: 18rem;">
          <div class="list-group list-group-flush">
            <p class="col-4 col-md-4"><h4>Nomber</h4><?php echo $row["id"];?></p>
            <p class="col-6 col-md-4"><h4>Email</h4><?php echo $row["email"];?></p>
            <p class="col-sm-6 col-md-8"><h4>Message</h4><?php echo $row["messages"];?></p>
            </div>
        </div>

    <?php }
  } else {
    echo "0 results";
  }
?>
