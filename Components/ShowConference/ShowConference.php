<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="resAlign">Restaurant Details</h1>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from conference"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <div class="foodAlign">
    <h2>
    <img src="../../image/conference.png" alt="">
    <br/>
      <?php echo $data['conference_packages']; ?>
    </h2>
    <div>
      <?php echo $data['conference_shift']; ?>
    </div>
    <div>
      <?php echo $data['conference_description']; ?>
    </div>
  </div>	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>

</body>
</html>