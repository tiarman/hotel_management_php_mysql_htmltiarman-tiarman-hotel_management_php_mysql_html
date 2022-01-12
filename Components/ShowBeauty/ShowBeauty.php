<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 class="resAlign">Beauty and Health</h1>



<?php

include "dbConn.php"; // Using database connection file here

$records = mysqli_query($db,"select * from healthandbeauty"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <div class="foodAlign">
    <h2>
    <img src="../../image/health.png" alt="">
    <br/>
      <?php echo $data['beauty_service']; ?>
    </h2>
    <div>
      <?php echo $data['de_scription']; ?>
    </div>
  </div>	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>

</body>
</html>