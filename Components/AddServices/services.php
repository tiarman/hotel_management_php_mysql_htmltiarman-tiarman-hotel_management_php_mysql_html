<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$service_type = mysqli_real_escape_string($conn, $_REQUEST['service_type']);
$service_names = mysqli_real_escape_string($conn, $_REQUEST['service_names']);
$service_description = mysqli_real_escape_string($conn, $_REQUEST['service_description']);
 
// Attempt insert query execution
$sql = "INSERT INTO services (service_type, service_names, service_description) VALUES ('$service_type', '$service_names', '$service_description')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/AddServices/index.html');
?>