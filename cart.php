<!-- connect file -->
<?php
include('includes/brand_table.php');
include('includes/Creating_Table.php');
include('functions/common_function.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commece website</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    

<!-- Navbar -->

<div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <img src="./img/saint.jpg" alt="" class="logo" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
          </li>

      

          <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php  cart_item(); ?></sup></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="#"><?php total_cart_price();?></a>
          </li>


      </ul>
    </div>
  </div>
  </nav>
  <!-- calling cart funtion -->
  <?php
 cart();
  ?>

  <!-- Second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary" >

    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">welcome guest</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="./users_area/user_login.php">Login</a>
        </li>
    </ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden store</h3>
    <p class="text-center">Tour and travels</p>
</div>

<!-- Fouth Child table-->
<div class="container">
    <div class="row">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Package Title</th>
                    <th> Price</th>
                   <!--  <th>Members</th>
                    <th>Total price</th>
                    <th>Remove</th>
                    <th>Operations</th> -->
                  
                </tr>
            </thead>
            <tbody>
                <!-- php code to display dinamic data -->
                <?php

global $conn;
$get_ip = getIPAddress();
$total_price=0;
$cart_query="SELECT * FROM `cart_details1` where ip_address='$get_ip'";
$result=mysqli_query($conn,$cart_query);
while($row=mysqli_fetch_array($result)){
  $product_id=$row['product_id'];
  $select_product="SELECT * FROM `product` where product_id='$product_id'";
  $result_product=mysqli_query($conn,$select_product);
  while($row_product_price=mysqli_fetch_array($result_product)){
$product_price=array($row_product_price['product_price']);
$price_table=$row_product_price['product_price'];
$product_title=$row_product_price['product_title'];
$product_image1=$row_product_price['product_image1'];
$product_values=array_sum($product_price);
$total_price+=$product_values;


?>
                <tr>
                     <td><?php echo $product_title  ?></td>
                   <!--  <td><img src="./img/<?php echo $product_image1  ?>" style="width:10%;"></td> -->
                   <!--  <td><input type="text" name="qty" class="form-input w-50"></td> -->

                    <td><?php echo $price_table  ?></td>

                  <!--   <td><input type="checkbox"></td>
                    <td>
                       <button class="bg-info px-3 py-2 border-0 mx-3"style="margin-bottom:10px">Update</button><button class="bg-info px-3 py-2 border-0 mx-3">Remove</button>
                    </td> -->
                </tr>
                <?php
}

}
                ?>
            </tbody>
        </table>
        <!-- subtotal -->
        <div class="d-flex mb-5">
            <h4 class="px-3">Subtotal: <strong class="text-success"><?php echo $total_price  ?></strong></h4>
            <a href="index.php"><button class="bg-info px-3 py-2 border-0 mx-3">Continue Booking</button></a>
            <a href="cheakout.php"><button class="bg-secondary px-3 py-2 border-0">Cheak out</button></a>
        </div>
    </div>
</div>




<!-- Last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved Designed by tahamid-2022</p>
</div>
</div>



 <!-- Bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>