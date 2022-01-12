<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$beauty_id = mysqli_real_escape_string($conn, $_REQUEST['beauty_id']);
$service_type = mysqli_real_escape_string($conn, $_REQUEST['service_type']);
$beauty_service = mysqli_real_escape_string($conn, $_REQUEST['beauty_service']);
$de_scription = mysqli_real_escape_string($conn, $_REQUEST['de_scription']);
 
// Attempt insert query execution
$sql = "INSERT INTO healthandbeauty (beauty_id, service_type, beauty_service, de_scription) VALUES ('$beauty_id', '$service_type', '$beauty_service', '$de_scription')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/AddBeautyHealth/index.html');
?>