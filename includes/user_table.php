<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "mystore";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
/* else{
    echo "Connection was successful<br>";
} */

// Create a table in the db
$sql = "CREATE TABLE IF NOT EXISTS `user_table` ( `username` VARCHAR(100) NOT NULL , `user_email` VARCHAR(100) NOT NULL , `user_password` VARCHAR(255) NOT NULL , `user_image` VARCHAR(255) NOT NULL , `user_ip` VARCHAR(100) NOT NULL , `user_address` VARCHAR(255) NOT NULL , `user_mobile` VARCHAR(20) NOT NULL)";



$result = mysqli_query($conn, $sql);


if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}














  
?>
