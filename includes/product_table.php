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

$sql = "CREATE TABLE IF NOT EXISTS `product` ( `product_id` INT NOT NULL AUTO_INCREMENT ,`product_title` VARCHAR(100) NOT NULL , `pro_description` VARCHAR(100) NOT NULL , `product_keywords` VARCHAR(255) NOT NULL , `category_id` INT NOT NULL , `brand_id` INT NOT NULL , `product_image1` VARCHAR(255) NOT NULL , `product_image2` VARCHAR(255) NOT NULL , `product_image3` VARCHAR(255) NOT NULL , `product_price` VARCHAR(100) NOT NULL , `date` TIMESTAMP NOT NULL , `status` VARCHAR(100) NOT NULL,PRIMARY KEY (`product_id`))";





$result = mysqli_query($conn, $sql);

// Check for the table creation success
if(!$result){
    echo "The table was not created successfully!<br>";
}
/* else{
    echo "The table created successfully". mysqli_error($conn);
} */













  
?>
