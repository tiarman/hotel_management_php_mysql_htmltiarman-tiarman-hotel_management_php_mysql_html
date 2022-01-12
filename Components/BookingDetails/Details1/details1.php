<?php
$servername = "localhost";
$username = "hotel";
$password = "1234";
$dbname = "hotelmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

$sql = "CREATE TABLE booking_room (
    signup_user varchar (20),
    book_name varchar (50),
    visitor_name varchar (20),
    visitor_email varchar (15),
    visitor_phone numeric(12),
    checkin varchar(12),
    checkout varchar(12),
    FOREIGN KEY (signup_user) REFERENCES signup(signup_user))";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Department created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

$signup_user = mysqli_real_escape_string($conn, $_REQUEST['signup_user']);
$book_name = mysqli_real_escape_string($conn, $_REQUEST['book_name']);
$visitor_name = mysqli_real_escape_string($conn, $_REQUEST['visitor_name']);
$visitor_email = mysqli_real_escape_string($conn, $_REQUEST['visitor_email']);
$visitor_phone = mysqli_real_escape_string($conn, $_REQUEST['visitor_phone']);
$checkin = mysqli_real_escape_string($conn, $_REQUEST['checkin']);
$checkout = mysqli_real_escape_string($conn, $_REQUEST['checkout']);
 
// Attempt insert query execution
$sql = "INSERT INTO booking_room (signup_user, book_name,visitor_name, visitor_email,visitor_phone,checkin,checkout) VALUES ('$signup_user', '$book_name','$visitor_name', '$visitor_email', '$visitor_phone','$checkin','$checkout')";
if($conn->query($sql) === TRUE){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
$conn->close();

// after insert data redirect to given link
header('Location: http://localhost:800/hotelmanagement/hotel_management_system/Components/Book/index.html');
exit;
exit;
?>