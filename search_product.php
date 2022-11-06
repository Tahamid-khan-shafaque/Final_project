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
  <img src="./img/Apple.jpg" alt="" class="logo" >
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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup><?php  cart_item(); ?></sup></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="#"><?php total_cart_price(); ?></a>
          </li>


      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
    <!--     <button class="btn btn-outline-light" type="submit">Search</button> -->
    <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
  </nav>
  <!-- calling cart function -->
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
            <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden store</h3>
    <p class="text-center">Tour and trvels</p>
</div>

<!-- Fouth Child -->

<div class="row">
   <div class="col-md-9">
       <!-- products -->
     <div class="row px-3">
      <!-- fatching products -->
      <?php

    /*    $select_query="Select * from `product` order by rand() LIMIT 0,4";//limit 0,9;
       $result_query=mysqli_query($conn,$select_query);
       //$row=mysqli_fetch_assoc($result_query);
      // echo $row['product_title'];
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $pro_description=$row['pro_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];

        echo "<div class='col-md-4 mb-2'><div class='card' style='width: 18rem;'>
        <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$pro_description</p>
          <a href='#' class='btn btn-info'>Add to Cart</a>
          <a href='#' class='btn btn-secondary'>View More</a>
        </div>
      </div>
    </div>";

      } */
      //calling from function
      search_product();
      get_unique_category();
      get_unique_brand();
      ?>
         <!-- <div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
            <img src="./img/strobery.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-info">Add to Cart</a>
              <a href="#" class="btn btn-secondary">View More</a>
            </div>
          </div>
        </div> -->
        <!-- row end -->    
              </div>
               <!-- column ends -->
       


   </div>
   <!-- SIDE BAR -->
   <div class="col-md-3 bg-secondary p-0">
       <!-- Brands to be displayed -->
       <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-success">
              <a href="#" class="nav-link text-light"> <h4>Delivery Brands</h4></a>
          </li>

          <?php

        /*    $select_brands="Select * from `brands`";
           $result_brands=mysqli_query($conn,$select_brands); 
            $row_data = mysqli_fetch_assoc( $result_brands);
            echo $row_data['brand_name'];  
          while($row_data=mysqli_fetch_assoc($result_brands)){
            $brand_name=$row_data['brand_name'];
            $brand_id=$row_data['brand_id'];
            echo " <li class='nav-item bg-dark'>
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_name</a>
        </li>";
          } */
          getbrands();
           


          ?>

       <!--    <li class="nav-item bg-dark">
            <a href="#" class="nav-link text-light">Brand1</a>
        </li>

        <li class="nav-item bg-dark">
            <a href="#" class="nav-link text-light">Brand2</a>
        </li>

        <li class="nav-item bg-dark">
            <a href="#" class="nav-link text-light">Brand3</a>
        </li>

        
        <li class="nav-item bg-dark">
            <a href="#" class="nav-link text-light">Brand4</a>
        </li>

        <li class="nav-item bg-dark">
            <a href="#" class="nav-link text-light">Brand5</a>
        </li> -->


       </ul>

       <!-- Categories to be DISPLAYED -->
       <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-success">
            <a href="#" class="nav-link text-light"> <h4>Categories</h4></a>
        </li>

         
        <?php
/* 
$select_category="Select * from `categories`";
$result_category=mysqli_query($conn,$select_category); 
 $row_data = mysqli_fetch_assoc( $result_brands);
 echo $row_data['brand_name']; 
while($row_data=mysqli_fetch_assoc($result_category)){
 $category_name=$row_data['category_name'];
 $category_id=$row_data['category_id'];
 echo " <li class='nav-item bg-dark'>
 <a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a>
</li>";
} */
getcategories();

?>


     </ul>

    <!-- side nav -->
   
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