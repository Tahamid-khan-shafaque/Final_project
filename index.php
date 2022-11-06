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
    <title>Tour and Travels</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
 
  
   
</head>
<body>
<style>
        .fa:hover {
            opacity: 0.9;
        }
  
        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
  
        .fa-pinterest {
            background: #cb2027;
            color: white;
        }
  
        .fa-reddit {
            background: #ff5700;
            color: white;
        }
  
        .fa {
            padding: 20px;
            font-size: 40px;
            width: 60px;
            text-decoration: none;
            margin: 5px 80px;
        }
  
        h1 {
            color: green;
        }
        .carousel-item img{
          height:550px;
          object-fit: cover;
        }
    </style>

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
          <a class="nav-link" href="display_all.php">Tour package</a>
          </li>

          <!-- <li class="nav-item">
          <a class="nav-link" href=" ">About Us</a>
          </li>
 -->
      

          <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="./html/index.html">About Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php  cart_item(); ?></sup></a>
          </li>

          <li class="nav-item">
          <a class="nav-link" href="#"><?php total_cart_price();?></a>
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
  <!-- calling cart funtion -->
  <?php
 cart();
  ?>

  <!-- Second child -->
  <div id="carouselExampleControls" class="carousel slide active " data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/2.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/banana.jpg" alt="Second slide">
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100"  src="./img/angur.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- Third child -->
<div class="bg-dark mt-3">
    <h3 class="text-center text-white">Tour and Travels</h3>
    <p class="text-center text-white">The world is a book and those who do not travel read only one page</p>
</div>

<!-- Fouth Child -->

<div class="row">
   <div class="col-md-3">
       <!-- products -->
     <!-- Brands to be displayed -->
     <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-success">
              <a href="#" class="nav-link text-light"> <h4>Countries</h4></a>
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
   <!-- SIDE BAR -->
   <div class="col-md-9 bg-secondary p-0">

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
     getproducts();
     get_unique_category();
     get_unique_brand();
   /*  $ip = getIPAddress();  
echo 'User Real IP Address - '.$ip; */ 
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











</div>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center" id="contact">Payment confirmation</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">

      <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Emaili Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Bikash transiction ID</label>
        <textarea class="form-control" name="comment" id="" cols="30" rows="10"></textarea>
      </div>

      <div>
        <button type="submit" class="btn btn-danger my-2">Submit</button>
      </div>
    </form>
  </div>
</section>
<!-- footer  -->
<!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-red" style="background:greenyellow;">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block text-success ">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-facebook-f">facebook</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-twitter">Twitter</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-google">Google</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-instagram bg-dark">Instagram</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-linkedin bg-dark">Linkedin</i>
      </a>
      <a href="" class="me-4 link-secondary">
        <i class="fab fa-github">Github</i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 text-success">
            <i class="fas fa-gem me-3 text-secondary"></i>Company name
          </h6>
          <p class="text-grey">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate consequatur, ab quasi ratione distinctio tenetur laboriosam rem iste! Mollitia, quos.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-info">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Packages</a>
          </p>
          <p>
            <a href="#!" class="text-reset">All product</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Register</a>
          </p>
          <p>
            <a href="#!" class="text-reset">About Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-success">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-dark">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i>Motijheel Dhaka</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
           Tourandtravels@gmail.com
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i>01771986539</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> 01887654736</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
</footer>
<!-- Footer -->




<!-- footer  -->

<!-- Last child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved Designed by tahamid-2022</p>
</div>
</div>



 <!-- Bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>