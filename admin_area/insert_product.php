<?php

include('../includes/Creating_Table.php');
include('../includes/product_table.php');
if(isset($_POST['insert_product'])){
    $product_title=$_POST['product_title'];
    $pro_description=$_POST['pro_description'];
    $product_keywords=$_POST['product_keywords'];
    $category_id=$_POST['product_categories'];
    $brand_id=$_POST['product_brands'];
    $product_price=$_POST['product_price'];
    $status='true';

    //accessing images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];
 
    //accessing image temp name

    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];

    //cheaking empty condition
    if($product_title=='' or $pro_description=='' or $product_keywords=='' or $category_id=='' or $brand_id=='' or $product_price=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' ){
        echo "<script>alert('Please fill all the available fields')</script>";
        exit();
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        //insert query
        $insert_products="INSERT INTO `product` (`product_title`, `pro_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES ('$product_title', '$pro_description', '$product_keywords', '$category_id', '$brand_id', '$product_image1', '$product_image2', '$product_image3', '$product_price', current_timestamp(), '$status')";
        $result_query=mysqli_query($conn,$insert_products);
        if(!$result_query){
            echo "<script>alert(' not inserted successfully')</script>";
        }
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert product</title>
     <!-- boostrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css link -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="styling.css">
</head>
<body class="bg-light">
    <!-- title -->
    <div class="container mt-3 text-white ">
        <h1 class="text-center text-white">Insert Tour & travels package</h1>
        <form action="../admin_area/insert_product.php" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Package Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter package title" autocomplete="off" Required="required">
            </div>

<!-- description -->

           
        <form action="../admin_area/insert_product.php" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="pro_description" class="form-label">Package Description</label>
                <input type="text" name="pro_description" id="pro_description" class="form-control" placeholder="Enter package description" autocomplete="off" Required="required">
            </div>

<!--keywords  -->

<div class="form-outline mb-4 w-50 m-auto">
      <!--   <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto"> -->
                <label for="product_keywords" class="form-label">Package keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter package keyword" autocomplete="off" Required="required">
            </div>

<!-- CATEGORIES -->

            <div class="form-outline mb-4 w-50 m-auto">
          <select name="product_categories" id="" class="form-select" >
              <option value="">Select a category</option>

<?php

$select_query= "Select * from `categories`";
$result_query=mysqli_query($conn,$select_query);
while ($row=mysqli_fetch_assoc($result_query)){
   $category_name=$row['category_name'];
   $category_id=$row['category_id'];
   echo  "<option value='$category_id'>$category_name</option>";
}  

?>
              </select>
            </div>


<!-- Brands -->
<div class="form-outline mb-4 w-50 m-auto">
          <select name="product_brands" id="" class="form-select" >
              <option value="">Select a Country</option>

              <?php

$select_query= "Select * from `brands`";
$result_query=mysqli_query($conn,$select_query);
while ($row=mysqli_fetch_assoc($result_query)){
   $brand_name=$row['brand_name'];
   $brand_id=$row['brand_id'];
   echo  "<option value='$brand_id'>$brand_name</option>";
}  

?>
              </select>
            </div>

<!-- Image1 -->
          <!--   <div class="form-outline mb-4 w-50 m-auto">
        <form action="" method="post" enctype="multipart/form-data"> -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Package image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  Required="required">
            </div>

<!-- img2 -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Package image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  Required="required">
            </div>

<!-- product image 3 -->

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Package image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  Required="required">
            </div>

<!-- price -->
<div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Package price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter package price" Required="required">
            </div>


<!-- price -->

 <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert package">

            </div>





        </form>
    </div>
</body>
</html>