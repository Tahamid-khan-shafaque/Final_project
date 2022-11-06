<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center text-white">All Tour packages</h3>
    <table class="table table-border-mt-5">
        <thead class="bg-info">
            <tr>
                <th>Serial number</th>
                <th>Tour title</th>
                <th style="text-align:center;">Image</th>
                <th>Price</th>
                <th>Total packages sold</th>
                <th>status</th>
                <th>Edit</th>
                <th>Delelte</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php

$get_products="Select * from `product`";
$result=mysqli_query($conn,$get_products);
$number=0;
while($row=mysqli_fetch_array($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $status=$row['status'];
    $number++;
?>

  <tr class='text-center'>
  <td><?php echo $number;?></td>
  <td><?php echo $product_title;?></td>
  <td><img src='./product_images/<?php echo $product_image1;?>' class='product_img text-center'</td>
  <td><?php echo $product_price;?></td>
  <td><?php
  $get_count="Select * from `order_pending` where product_id=$product_id";
  $result_count=mysqli_query($conn,$get_count);
  $rows_count=mysqli_num_rows($result_count);
  echo $rows_count;
  
  ?></td>
  <td><?php echo $status;?></td>
  <td><a href='index.php?edit_products=<?php echo  $product_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
  <td><a href='index.php?delete_product=<?php echo  $product_id ?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
</tr>
<?php

}
?>
          <!--   <tr class="text-center">
                <td>1</td>
                <td>mango</td>
                <td>img</td>
                <td>100</td>
                <td>4</td>
                <td>true</td>
                <td><a href="" class="text-light"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="" class="text-light"><i class="fa-solid fa-trash"></i></a></td>
            </tr> -->
        </tbody>
    </table>

</body>
</html>