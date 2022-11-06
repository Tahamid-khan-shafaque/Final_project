<?php
/* include('includes/Creating_Table.php');
include('includes/cart_table.php'); */


//geting products

function getproducts(){
    global $conn;
    //condition to cheak isset or not
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){

    $select_query="Select * from `product` order by rand() LIMIT 0,4";//limit 0,9;(vid 17)
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

     echo "<div class='col-md-4 mb-2'>
     <div class='card' style='width: 18rem;'>
     <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
     <div class='card-body'>
       <h5 class='card-title'>$product_title</h5>
       <p class='card-text'>$pro_description</p>
       <p class='card-text'>Price :$product_price/-</p>
       <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
       <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>

      




     </div>
   </div>
 </div>";

   }
}
}
}
//getting all products
function get_all_products(){
  global $conn;
  //condition to cheak isset or not
  if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])){

  $select_query="Select * from `product` order by rand()";//limit 0,9;(vid 17)
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
     <p class='card-text'>Price :$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
     <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
   </div>
 </div>
</div>";

 }
}
}
}
//getting unique category
function get_unique_category(){
  global $conn;
  //condition to cheak isset or not
  if(isset($_GET['category'])){
    $category_id=$_GET['category'];
    

  $select_query="Select * from `product` where category_id=$category_id";//limit 0,9;(vid 17)
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger' >No stock for this category</h2>";
  }
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
     <p class='card-text'>Price :$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
     <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
   </div>
 </div>
</div>";

 }
}
}

//brands
function get_unique_brand(){
  global $conn;
  //condition to cheak isset or not
  if(isset($_GET['brand'])){
    $brand_id=$_GET['brand'];
    

  $select_query="Select * from `product` where brand_id=$brand_id";//limit 0,9;(vid 17)
  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows==0){
    echo "<h2 class='text-center text-danger' >This country tour package is not available right now</h2>";
  }
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
     <p class='card-text'>Price :$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
     <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
   </div>
 </div>
</div>";

 }
}
}
// displaying brands in side nav


function getbrands(){
  global $conn;
  $select_brands="Select * from `brands`";
  $result_brands=mysqli_query($conn,$select_brands); 
/*   $row_data = mysqli_fetch_assoc( $result_brands);
   echo $row_data['brand_name']; */ 
 while($row_data=mysqli_fetch_assoc($result_brands)){
   $brand_name=$row_data['brand_name'];
   $brand_id=$row_data['brand_id'];
   echo " <li class='nav-item bg-dark'>
   <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_name</a>
</li>";
 }
}

//displaying categories side nav
function getcategories(){
  global $conn;
  $select_category="Select * from `categories`";
  $result_category=mysqli_query($conn,$select_category); 
  /*   $row_data = mysqli_fetch_assoc( $result_brands);
   echo $row_data['brand_name']; */ 
  while($row_data=mysqli_fetch_assoc($result_category)){
   $category_name=$row_data['category_name'];
   $category_id=$row_data['category_id'];
   echo " <li class='nav-item bg-dark'>
   <a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a>
  </li>";
  }
}

//searching products function

function search_product(){
  global $conn;
  if(isset($_GET['search_data_product'])){
  //condition to cheak isset or not
 $searach_data_value=$_GET['search_data'];

  $searach_query="Select * from `product` where product_keywords like '%$searach_data_value%'";//limit 0,9;(vid 17)
  $result_query=mysqli_query($conn,$searach_query);
  //$row=mysqli_fetch_assoc($result_query);
 // echo $row['product_title'];
 $num_of_rows=mysqli_num_rows($result_query);
 if($num_of_rows==0){
   echo "<h2 class='text-center text-danger' >No Product found in the category</h2>";
 }
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
     <p class='card-text'>Price :$product_price/-</p>
      <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
     <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
   </div>
 </div>
</div>";

 }
}
}

//view details function
function view_details(){
  global $conn;
    //condition to cheak isset or not
    if(isset($_GET['product_id'])){
    if(!isset($_GET['category'])){
      if(!isset($_GET['brand'])){
        $product_id=$_GET['product_id'];

    $select_query="Select * from `product` where product_id=$product_id";//limit 0,9;(vid 17)
    $result_query=mysqli_query($conn,$select_query);
    //$row=mysqli_fetch_assoc($result_query);
   // echo $row['product_title'];
   while($row=mysqli_fetch_assoc($result_query)){
     $product_id=$row['product_id'];
     $product_title=$row['product_title'];
     $pro_description=$row['pro_description'];
     $product_image1=$row['product_image1'];
     $product_image2=$row['product_image2'];
     $product_image3=$row['product_image3'];
     $product_price=$row['product_price'];
     $category_id=$row['category_id'];
     $brand_id=$row['brand_id'];

     echo "<div class='col-md-4 mb-2'>
     <div class='card' style='width: 18rem;'>
     <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
     <div class='card-body'>
       <h5 class='card-title'>$product_title</h5>
       <p class='card-text'>$pro_description</p>
       <p class='card-text'>Price :$product_price/-</p>
        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Book Now</a>
       <a href='index.php' class='btn btn-secondary'>Go home</a>

      




     </div>
   </div>
 </div>
 
 <div class='col-md-8'>
 <!-- img -->
 <div class='row'>
  <div class='col-md-12'>
     <h4 class='text-center'>
         Related Tour Spots
     </h4>
  </div>
  <div class='col-md-6'>
  <img src='./admin_area/product_images/$product_image2' class='card-img-top' class='mypic' alt='...'>
  </div>
  <div class='col-md-6'>
  <img src='./admin_area/product_images/$product_image3' class='card-img-top' alt='...'>
     </div>
 </div>
</div>";

   }
}
}
}
}

//get ip address function
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
/* $ip = getIPAddress();  
echo 'User Real IP Address - '.$ip; */  

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $conn;
  $get_ip = getIPAddress();
  $get_product_id=$_GET['add_to_cart'];
  $select_query="SELECT * FROM `cart_details1` where ip_address='$get_ip' and product_id= $get_product_id";
//INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES ('1', '::1', '2');

  $result_query=mysqli_query($conn,$select_query);
  $num_of_rows=mysqli_num_rows($result_query);
  if($num_of_rows>0){
    echo "<script>alert('This item is already inserted in the cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
}else{

  $insert_query="INSERT INTO `cart_details1` (product_id, ip_address, quantity) VALUES ('$get_product_id', '$get_ip',0)";//0
  $result_query=mysqli_query($conn,$insert_query);
  echo "<script>alert('Add this item to the cart?')</script>";
  echo "<script>window.open('index.php','_self')</script>";
}
}
}

//function to get cart item number
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn;
    $get_ip = getIPAddress();
    $select_query="SELECT * FROM `cart_details1` where ip_address='$get_ip'";
  
    $result_query=mysqli_query($conn,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
  }else{
  
    global $conn;
    $get_ip = getIPAddress();
    $select_query="SELECT * FROM `cart_details1` where ip_address='$get_ip'";
  
    $result_query=mysqli_query($conn,$select_query);
    $num_of_rows=mysqli_num_rows($result_query);
  }
echo  $num_of_rows;
  }


//Total price function
function total_cart_price(){
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
$product_values=array_sum($product_price);
$total_price+=$product_values;
  }

}
echo $total_price;
}
?>