<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$employee_id = mysqli_real_escape_string($conn, $_REQUEST['employee_id']);
$employee_names = mysqli_real_escape_string($conn, $_REQUEST['employee_names']);
$employee_status = mysqli_real_escape_string($conn, $_REQUEST['employee_status']);
$description = mysqli_real_escape_string($conn, $_REQUEST['employee_description']);
 
// Attempt insert query execution
$sql = "INSERT INTO employee (employee_id, employee_names, employee_status, employee_description) VALUES ('$employee_id', '$employee_names', '$employee_status', '$employee_description')";
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