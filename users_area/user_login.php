<?php
//session_start();
$login=0;
$invalid=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include('../includes/Data_code.php');
    if(isset($_POST['save'])){
        $username=$_POST['username'];
        $password=$_POST['user_password'];



        $sql="select * from `user_table`   where username='$username' and user_password='$password'";
        $result=mysqli_query($conn,$sql);







        if($result){
            $num=mysqli_num_rows($result); 

           // $row=mysqli_fetch_array($num); 

            if($num>0){
                echo "<script>alert('Log in successfull')</script>";
                $login=1;
                $_SESSION['username']=$username;
                header('location:./users_area/payment.php');
            }


        

            

//C:\xampp\htdocs\E-commerce website\admin_area\index.php




            else{
               echo "invalid credentials"; 
                $invalid=1;
            }
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
    <title>User registration</title>
     <!-- boostrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- Font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
body{
    overflow-x: hidden;
}
</style>

</head>
<body>
    <div class="container-fluid m-3">
       <h2 class="text-center"> User Login</h2>
       <div class="row d-flex align-items-center justify-content-center">
        <div class="col-lg-12 col-xl-6">
             <form action="" method="post">
                 <!-- username -->
                <div class="form-outline mb-4">
                    <label for="username" class="form-label">User name</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" autocomple="off" required="required" name="username"/>
                </div>
               
                 <!-- password_field -->
                 <div class="form-outline mb-4">
                    <label for="user_password" class="form-label">User password</label>
                    <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomple="off" required="required" name="user_password"/>
                </div>
                 

                <div class="text-center mt-4 pt-2">
                    <input type="submit" value="Login" class="bg-info py-2 px-3 border-0" name="save">
                    <p class="small fw-bold">Don't  have an account ? <a href=".\users_area\user_registration.php" class="text-danger"> Register</a></p>
                </div>

    
                
             </form>
        </div>
       </div>
    </div>
 
</body>
</html>