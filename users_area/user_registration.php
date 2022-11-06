<?php
include('../includes/create_database.php');
include('../functions/common_function.php');
include('../includes/Data_code.php');


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
     <!-- boostrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="backgrn.css"

</head>
<body>
    <div class="container-fluid m-3 text-white">
       <h2 class="text-center">New user Registration</h2>
       <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
             <form action="" method="post" enctype="multipart/form-data">
                 <!-- username -->
                <div class="form-outline mb-4">
                    <label for="username" class="form-label">User name</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" autocomple="off" required="required" name="username"/>
                </div>
                <!-- email_field -->
                <div class="form-outline mb-4">
                    <label for="user_email" class="form-label">User E-mail</label>
                    <input type="email" id="user_email" class="form-control" placeholder="Enter your E-mail" autocomple="off" required="required" name="user_email"/>
                </div>
                <!-- image -->
                <div class="form-outline mb-4">
                    <label for="user_image" class="form-label">User Image</label>
                    <input type="file" id="user_image" class="form-control" required="required" name="user_image"/>
                </div>
                 <!-- password_field -->
                 <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">User password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomple="off" required="required" name="user_password"/>
                </div>
                 <!--Confirm password_field -->
                 <div class="form-outline mb-4">
                    <label for="conf_user_password" class="form-label">Confirm User password</label>
                    <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm your password" autocomple="off" required="required" name="conf_user_password"/>
                </div>
                <!-- Address field -->
                <div class="form-outline mb-4">
                    <label for="user_address" class="form-label">User address</label>
                    <input type="text" id="user_address" class="form-control" placeholder="Enter your address" autocomple="off" required="required" name="user_address"/>
                </div>
                 <!-- Contact field -->
                 <div class="form-outline mb-4">
                    <label for="user_contact" class="form-label">User contact</label>
                    <input type="text" id="user_contact" class="form-control" placeholder="Enter your Mobile number" autocomple="off" required="required" name="user_contact"/>
                </div>

                <div class="text-center mt-4 pt-2">
                    <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">
                    <p class="small fw-bold">Already have an account ? </p>
                    <a href="../cheakout.php" class="text-danger"> Login</a>
                   
                  
                </div>
                
             </form>
        </div>
       </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['user_register'])){
    
    $username=$_POST['username'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    $conf_user_password=$_POST['conf_user_password'];
    $user_address=$_POST['user_address'];
    $user_contact=$_POST['user_contact'];
    $user_image=$_FILES['user_image']['name'];
    $user_image_tmp=$_FILES['user_image']['tmp_name'];
    $user_ip=getIPAddress();

    //select query
   
    $select_query="Select * from `user_table` where username='$username' or user_email='$user_email'";
    $result=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows($result);
    /* $sql_execute=''; */
    if($rows_count>0){
        echo "<script>alert('Username and email already exist')</script>";
    }else if($user_password!=$conf_user_password){
        echo "<script>alert('Password do not match')</script>";
    }
    
    
    else{
        move_uploaded_file($user_image_tmp,"./user_images/$user_image");

        $insert_query ="INSERT INTO `user_table` ( `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES ('$username', '$user_email', '$user_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";
        
        $sql_execute=mysqli_query($conn,$insert_query);
    }


   //insert query 
  /*  move_uploaded_file($user_image_tmp,"./user_images/$user_image");

    $insert_query ="INSERT INTO `user_table` ( `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES ('$username', '$user_email', '$user_password', '$user_image', '$user_ip', '$user_address', '$user_contact')";  */

    

   /*  if($sql_execute){
        echo "<script>alert('Data inserted successfully')</>";
        header('location:cheakout.php');
    }else{
        echo "no !!";
    } */


    //select cart item

 /*    $select_cart_item="Select * from `cart_details` where ip_address='$user_ip'";
    $result_cart=mysqli_query($conn,$select_query);
    $rows_count=mysqli_num_rows( $result_cart);
    if($rows_count>0){
        $_SESSION['username']=$username;
        echo "<script>alert('You have items in cart')</>";
        echo "<script>window.open('cheakout.php','_self')</>";
    }else{
        echo "<script>window.open('../index.php','_self')</>";
    } */
}

?>