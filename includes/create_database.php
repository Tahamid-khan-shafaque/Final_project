<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}

// Create a db
$sql = "CREATE DATABASE IF NOT EXISTS mystore";


$result = mysqli_query($conn, $sql);
// Check for the database creation success
if(!$result){
    echo "The db was not created successfully!<br>";
}





?>
