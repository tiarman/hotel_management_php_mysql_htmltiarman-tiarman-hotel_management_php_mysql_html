<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="resAlign">Restaurant Details</h1>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from fooditems"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <a href="../Restaurant/Order/index.html" class="foodAlign">
    <h2>
    <img src="../../image/food.jpg" alt="">
    <br/>
      <?php echo $data['food_names']; ?>
    </h2>
    <div>
      <?php echo $data['food_description']; ?>
    </div>
  </a>	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>

</body>
</html>