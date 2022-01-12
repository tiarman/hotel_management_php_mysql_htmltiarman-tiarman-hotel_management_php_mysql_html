<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$signup_user = mysqli_real_escape_string($conn, $_REQUEST['signup_user']);
$signup_name = mysqli_real_escape_string($conn, $_REQUEST['signup_name']);
$signup_gender = mysqli_real_escape_string($conn, $_REQUEST['signup_gender']);
$signup_mobile = mysqli_real_escape_string($conn, $_REQUEST['signup_mobile']);
$signup_email = mysqli_real_escape_string($conn, $_REQUEST['signup_email']);
$signup_password = mysqli_real_escape_string($conn, $_REQUEST['signup_password']);
$signup_retypepassword = mysqli_real_escape_string($conn, $_REQUEST['signup_retypepassword']);
 
// Attempt insert query execution
$sql = "INSERT INTO signup (signup_user, signup_name, signup_gender, signup_mobile, signup_email, signup_password, signup_retypepassword) VALUES ('$signup_user', '$signup_name', '$signup_gender', '$signup_mobile', '$signup_email', '$signup_password', '$signup_retypepassword')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/index.html');
?>