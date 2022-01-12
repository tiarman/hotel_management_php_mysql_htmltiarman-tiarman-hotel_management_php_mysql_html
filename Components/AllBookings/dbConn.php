<?php

$db = mysqli_connect("localhost","root","","hotelmanagement");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>