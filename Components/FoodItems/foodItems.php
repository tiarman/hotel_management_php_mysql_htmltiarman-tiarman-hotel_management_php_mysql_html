<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$food_id = mysqli_real_escape_string($conn, $_REQUEST['food_id']);
$service_type = mysqli_real_escape_string($conn, $_REQUEST['service_type']);
$food_names = mysqli_real_escape_string($conn, $_REQUEST['food_names']);
$food_description = mysqli_real_escape_string($conn, $_REQUEST['food_description']);
 
// Attempt insert query execution
$sql = "INSERT INTO foodItems (food_id, service_type, food_names, food_description) VALUES ('$food_id', '$service_type', '$food_names', '$food_description')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/FoodItems/index.html');
?>