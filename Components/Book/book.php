<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$booking_id = mysqli_real_escape_string($conn, $_REQUEST['booking_id']);
$payment_type = mysqli_real_escape_string($conn, $_REQUEST['payment_type']);
$payment_details = mysqli_real_escape_string($conn, $_REQUEST['payment_details']);
$payment_status = mysqli_real_escape_string($conn, $_REQUEST['employee_description']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee (booking_id, payment_type, payment_details, employee_description) VALUES ('$booking_id', '$payment_type', '$payment_details', '$employee_description')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/AddEmployee/index.html');
?>