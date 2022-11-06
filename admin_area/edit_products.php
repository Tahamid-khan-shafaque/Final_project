<?php

if(isset($_GET['edit_products'])){
    $edit_id=$_GET['edit_products'];
    //echo $edit_id;
    $get_data="Select * from `product` where product_id= '$edit_id'";
    $result=mysqli_query($conn,$get_data);
    $row=mysqli_fetch_assoc($result);
    $product_title=$row['product_title'];
    $pro_description=$row['pro_description'];
    $product_keywords=$row['product_keywords'];
   // echo $product_title;
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
    $product_image1=$row['product_image1'];
    $product_image2=$row['product_image2'];
    $product_image3=$row['product_image3'];
    $product_price=$row['product_price'];

    //fatching category name
    $select_category="Select * from `categories` where category_id='$category_id'";
    $result_category=mysqli_query($conn,$select_category);
    $row_category=mysqli_fetch_assoc($result_category);
    $category_name=$row_category['category_name'];
    //echo $category_name;


     //fatching category name
     $select_brand="Select * from `brands` where brand_id=$brand_id";
     $result_brand=mysqli_query($conn,$select_brand);
     $row_brand=mysqli_fetch_assoc($result_brand);
     $brand_name=$row_brand['brand_name'];
    // echo $brand_name;

}

?>
    





<div class="container mt-5">
    <h1 class="text-center">Edit product</h1>
    <form action=""  method="post" enctype="multipart/form-data">

    <div class="form-group row w-50 m-auto mb-4">
        <label for="product_title" class="form-label">Product title</label>
        <input type="text" id="product_title" value="<?php echo $product_title?>"name="product_title" class="form_control"  required="required">
    </div>

   <div class="form-group row w-50 m-auto mb-4">
        <label for="product_desc" class="form-label">Product description</label>
        <input type="text" id="product_desc" name="product_desc" value="<?php echo $pro_description?>"class="form_control"  required="required">
    </div>

    <div class="form-group row w-50 m-auto">
        <label for="product_keywords" class="form-label">Product keywords</label>
        <input type="text" id="product_keywords" name="product_keywords"  value="<?php echo $product_keywords?>"class="form_control"  required="required">
    </div>


    
    <div class="form-group row w-50 m-auto">
    <label for="product_category" class="form-label">Product categories</label>
        <select name="product_category" class="form-select">
            <option value="<?php echo $category_name ?>"><?php echo $category_name ?></option>
            <option value="">


            <?php
   $select_category_all="Select * from `categories`";
   $result_category_all=mysqli_query($conn,$select_category_all);
  while($row_category_all=mysqli_fetch_assoc($result_category_all)){
$category_name=$row_category_all['category_name'];
$category_id=$row_category_all['category_id'];
echo "<option value='category_id'>$category_name</option>";
  };
  /*  $category_name=$row_category['category_name']; */


?>
            </option>
         
        </select>
    </div>

    <div class="form-group row w-50 m-auto">
    <label for="product_brands" class="form-label">Product brands</label>
        <select name="product_brands" class="form-select">
        <label for="product_brands" class="form-label">Product brands</label>
        <option value="<?php echo $brand_name ?>"><?php echo $brand_name ?></option>
            <option value="">
        <option value="">


<?php
$select_brand_all="Select * from `brands`";
$result_brand_all=mysqli_query($conn,$select_brand_all);
while($row_brand_all=mysqli_fetch_assoc($result_brand_all)){
$brand_name=$row_brand_all['brand_name'];
$brand_id=$row_brand_all['brand_id'];
echo "<option value='brand_id'>$brand_name</option>";
};
/*  $brand_name=$row_brand['brand_name']; */


?>
</option>
        </select>
    </div>

    <div class="form-outline w-50 m-auto">
        <label for="product_image1" class="form-label">Product Image1</label>
        <div class="d-flex">

            <input type="file" id="product_image1" name="product_image1" class="form_control w-90 m-auto"  required="required">
            <img src="./product_images/<?php echo $product_image1 ?>" alt="" class="product_img">

        </div>
    </div>


    <div class="form-outline w-50 m-auto">
        <label for="product_image2" class="form-label">Product Image2</label>
        <div class="d-flex">

            <input type="file" id="product_image2" name="product_image2" class="form_control w-90 m-auto"  required="required">
            <img src="./product_images/<?php echo $product_image2 ?>" alt="" class="product_img">

        </div>
    </div>



    
    <div class="form-outline w-50 m-auto">
        <label for="product_image3" class="form-label">Product Image3</label>
        <div class="d-flex">

            <input type="file" id="product_image3" name="product_image3" class="form_control w-90 m-auto"  required="required">
            <img src="./product_images/<?php echo $product_image3 ?>" alt="" class="product_img">

        </div>
    </div>


    <div class="form-group row w-50 m-auto">
        <label for="product_price" class="form-label">Product Price</label>
        <input type="text" id="product_price" name="product_price"  value="<?php echo $product_price ?>"class="form_control"  required="required">
    </div>

    <div class="text-center mt-3 w-50">
        <input type="submit" name="edit_product" value="update product"  class="btn btn-info px-3 mb-3">
    </div>

    </form>
</div>

<!-- editing products -->
