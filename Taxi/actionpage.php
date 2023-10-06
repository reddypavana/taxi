<?php
// Include your database connection configuration
include('db_config.php');


if (!empty($uname1) || !empty($email) || !empty($upswd1) || !empty($upswd2) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tamilhacks";

// Retrieve user inputs from the form
$pickup = $_POST['pickup'];
$drop = $_POST['drop'];
$datetime = $_POST['datetime'];

// Store the booking data in the database
$sql = "INSERT INTO bookings (pickup, drop_location, datetime) VALUES ('$pickup', '$drop', '$datetime')";

if ($conn->query($sql) === TRUE) 
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
