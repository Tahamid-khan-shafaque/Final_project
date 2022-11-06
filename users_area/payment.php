
<?php
session_start();
include('../includes/Data_code.php');
include('../functions/common_function.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT PAGE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<style>
  img{
    width: 80%;
  }
</style>



<body>
    <!-- php code to access user id -->
    <?php
$user_id=getIPAddress();
$get_user="Select * from `user_table` where user_ip='$user_id'";
$result=mysqli_query($conn,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];
    ?>
  
  <!--   <a href="logout.php">LOGOUT</a> -->
  <div class="container">
    <h2 class="text-center text-info">Payment options</h2>
    <div class="row d-flex  justify-content-center align-items-center my-5">

        <div class="col-md-6">
        <a href="https:www.paypal.com" target="_blank"><img src="../img/bk.jpg" alt=""></a>   
        </div>

        <div class="col-md-6">
        <a href="order.php?$user_id=<?php echo $user_id ?>"><h2 class="text-center">Pay Offline</h2></a>   
        </div>
     
    </div>
  </div>
</body>
</html>