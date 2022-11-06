

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
    <title>Admin Dashboard</title>
    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css link -->
    <link rel="stylesheet" href="../style.css">
    <style>
        
body{
    height: 90vh;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(./product_images/b.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
}
        .product_img{
           width:20%;
           object-fit:contain;
        }
    </style>

</head>

<body>
    <!-- Creating nav -->
    <div class="container container-fluid p-0 ">
        <!-- 1st child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                           <!--  <a href="" class="nav-link">welcome guest</a> -->
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!-- second child -->

  <div class="bg-light">
      <h3 class="text-center p-2">Manage-detail</h3>
  </div>

  <!-- THIRD CHILD -->
  <div class="row">
      <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
       
        <div class="px-3" >
            <a href="#"><img src="./product_images/ANAM.jpg" alt="" class="admin-image" ></a>
          <p class="text-light text-center">Mehedi anam</p>
        </div>
        <div class="button text-center">
            <button class="my-3" ><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Tour Package</a></button>
            <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="index.php?category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
           <!--  <button><a href="index.php?display_all" class="nav-link text-light bg-info my-1">View Categories</a></button> -->
            <button><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Country</a></button>
           <button><a href="" class="nav-link text-light bg-info my-1">View Country</a></button> 
          <!--   <button><a href="" class="nav-link text-light bg-info my-1">All Order</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>  -->
            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
            <button><a href="../index.php" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
      </div>
  </div>

  <!-- FOURTH CHILD -->

  <div class="container my-3">
 <?php

if(isset($_GET['category'])){
include('insert_categories.php');
}


if(isset($_GET['insert_brands'])){
    include('insert_brands.php');
    }


    if(isset($_GET['view_products'])){
        include('view_products.php');
        }
    

        
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
        }

     
        if(isset($_GET['delete_product'])){
            include('delete_product.php');
            }


?>
  </div>


  <!-- <div class="bg-info p-3 text-center">
    <p>All rights reserved Designed by tahamid-2022</p>
</div>
</div> -->

    </div>





    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>