<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE review (
    
    visitor_name varchar (20),
    visitor_email varchar (15),
    visitor_messages varchar(30),
    primary key (visitor_email))";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Department created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


$visitor_name = mysqli_real_escape_string($conn, $_REQUEST['visitor_name']);
$visitor_email = mysqli_real_escape_string($conn, $_REQUEST['visitor_email']);
$visitor_messages = mysqli_real_escape_string($conn, $_REQUEST['visitor_messages']);

 
// Attempt insert query execution
$sql = "INSERT INTO review (visitor_name, visitor_email,visitor_messages) VALUES ('$visitor_name', '$visitor_email', '$visitor_messages')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/index.html');
exit;

exit;
?>