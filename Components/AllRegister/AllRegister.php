<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ========== Bootstrap ========== -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- ========== Font ========== -->
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <!-- ========== ICON ========== -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- ========== Font End ========== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>

  <!-- ========== HEADER ========== -->
 <section>
     <div class="row">
        <div class="col-md-2">
            
            <div class="sidebar-1">
                <img src="../../image/New folder/logo.png" alt="">
                <br/>
                <br/>
                <br/>
                <div class="sidebar-2">
                <i class="fas fa-server"><a href="../AllRegister/AllRegister.php">Registers</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-plus-circle"><a href="../AddServices/index.html">Add Services</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-server"><a href="../AllBookings/AllBookings.php">Bookings</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-concierge-bell"><a href="../FoodItems/index.html">Add Food</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-plus-square"><a href="../AddEmployee/index.html">Add Employee</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-wheelchair"><a href="../AddBeautyHealth/index.html">Add Beauty</a></i>
                    <br/>
                    <br/>
                    <i class="fas fa-handshake"><a href="../AddConference/index.html">Add Conference</a></i>
                </div>
                
                    <div class="sidebar-homebutton">
                        <a href="../../index.html">Back Home</a>
                    </div>
            </div>
            
            </div>
            <div class="col-md-9">



                <div class="nave-align1">
                    <nav class="navbar navbar-light bg-warning p-2 justify-content-between">
                        <a class="navbar-brand">Registers</a>
                        <form class="form-inline">
                          <img src="../../image/facebook.png" alt="">
                        </form>
                      </nav>
                </div>
                <h1 class="alignTitle">All Register Details</h1>
                <?php 
$username = "hotel"; 
$password = "1234"; 
$database = "hotelmanagement"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM signup";


echo '<table class="tableAlign" border="0" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial">User</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Gender</font> </td> 
          <td> <font face="Arial">Mobile</font> </td> 
          <td> <font face="Arial">E-mail</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $signup_user = $row["signup_user"];
        $signup_name = $row["signup_name"];
        $signup_gender = $row["signup_gender"];
        $signup_mobile = $row["signup_mobile"];
        $signup_email = $row["signup_email"];

        echo '<tr> 
                  <td>'.$signup_user.'</td> 
                  <td>'.$signup_name.'</td> 
                  <td>'.$signup_gender.'</td> 
                  <td>'.$signup_mobile.'</td> 
                  <td>'.$signup_email.'</td> 
              </tr>';
    }
    $result->free();
} 
?>


            </div>
            
     </div>
 </section>
  
</body>

</html>