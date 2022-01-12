<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$signup_user = mysqli_real_escape_string($conn, $_REQUEST['signup_user']);
$order_name = mysqli_real_escape_string($conn, $_REQUEST['order_name']);
$order_mobile = mysqli_real_escape_string($conn, $_REQUEST['order_mobile']);
$order_email = mysqli_real_escape_string($conn, $_REQUEST['order_email']);
 
// Attempt insert query execution
$sql = "INSERT INTO orderitems (signup_user, order_name, order_mobile, order_email) VALUES ('$signup_user', '$order_name', '$order_mobile', '$order_email')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/Restaurant/readphp.php');
?>