<?php
if(isset($_GET['delete_product'])){
    $delete_id=$_GET['delete_product'];
    //echo $delete_id;

    $delete_product="Delete from `product` where product_id=$delete_id";
    $result_product=mysqli_query($conn,$delete_product);
    if($result_product){
        echo "successfully deleted";
    }
}









