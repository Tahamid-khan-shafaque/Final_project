<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "mystore";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}else{
   echo "success";
}

// Create a table in the db
//$sql = "CREATE TABLE IF NOT EXISTS `user_table` ( `username` VARCHAR(100) NOT NULL , `user_email` VARCHAR(100) NOT NULL , `user_password` VARCHAR(255) NOT NULL , `user_image` VARCHAR(255) NOT NULL , `user_ip` VARCHAR(100) NOT NULL , `user_address` VARCHAR(255) NOT NULL , `user_mobile` VARCHAR(20) NOT NULL)";

$sql="INSERT IF NOT EXISTS `user_table`  (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES ('31', 'admin', 'admin@gmail.com', 'shafaque11', 'zoom.jpg', 'zoom.png', 'Matuail jatrabari dhaka', '98758405989')";

//$insert_query ="INSERT INTO `user_table` ( `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES ('$username', '$user_email', '$user_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";

$result = mysqli_query($conn, $sql);


if($result){
    echo "Your table created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
?>