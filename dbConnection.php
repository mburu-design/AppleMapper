<?php
$host = 'localhost';
$port = 3307;
$user = 'colin';
$password = 'Nyamiaka@321';
$database = 'applesdb';

// Connect to MySQL database
$conn = mysqli_connect($host, $user, $password, $database, $port);

// Check if the connection was successful
if (!$conn) {
    die("Error connecting to MySQL database: " . mysqli_connect_error());
}



// Close the connection
//mysqli_close($conn);
?>
