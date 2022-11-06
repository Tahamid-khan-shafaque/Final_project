<!-- connect file -->
<?php
include('./includes/brand_table.php');
include('./includes/create_database.php');
include('./includes/cart_table.php');
session_start();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commece website cheakout page</title>
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
         


      </ul>
      <form class="d-flex" action="search_product.php" method="get"> <!-- seee very importnt -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
    <!--     <button class="btn btn-outline-light" type="submit">Search</button> -->
    <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
  </nav>
  

  <!-- Second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-danger" >

    <ul class="navbar-nav me-auto">
        <li class="nav-item">
            <a class="nav-link text-white" href="./admin_area/loggg.php">ADMIN</a>
        </li>
        
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
        </li> -->
     
    </ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden store</h3>
    <p class="text-center">Communication is the heart of ecommerce community</p>
</div>

<!-- Fouth Child -->

<div class="row">
   <div class="col-md-12">
       <!-- products -->
     <div class="row px-3">

        <?php
     if(!isset($_SESSION['username'])){
        include('./users_area/user_login.php');
    }
        else{
          include('./users_area/user_login.php');
        }
    
       
         ?>
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