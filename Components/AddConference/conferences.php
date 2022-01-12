<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$conference_id = mysqli_real_escape_string($conn, $_REQUEST['conference_id']);
$service_type = mysqli_real_escape_string($conn, $_REQUEST['service_type']);
$conference_shift = mysqli_real_escape_string($conn, $_REQUEST['conference_shift']);
$conference_packages = mysqli_real_escape_string($conn, $_REQUEST['conference_packages']);
$conference_description = mysqli_real_escape_string($conn, $_REQUEST['conference_description']);
 
// Attempt insert query execution
$sql = "INSERT INTO conference (conference_id, service_type, conference_shift, conference_packages, conference_description) VALUES ('$conference_id', '$service_type', '$conference_shift', '$conference_packages', '$conference_description')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/AddConference/index.html');
?>