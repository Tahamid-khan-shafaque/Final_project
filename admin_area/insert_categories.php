


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $category_name = $_POST['category_name'];
       
        
      
      // conecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "mystore";

      // Create a conection
      $con =mysqli_connect($servername, $username, $password, $database);
      // Die if conection was not successful


     $select_query="Select * from `categories` where category_name='$category_name'";
     $result_select=mysqli_query($con,$select_query);
     $number=mysqli_num_rows($result_select);

     if($number>0){
      header('location:index.php?category');
      echo "<script>(' not inserted successfully')</script>";
     }
    
     else if (!$con){
          die("Sorry we failed to conect: ".mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql =  "INSERT INTO `categories` (`category_name`) VALUES ('$category_name')";
        $result = mysqli_query($con, $sql);
        header('location:index.php?category');

        
        if($result){
          echo "<script>alert('Category has been inserted successfully')</>";
        }
        else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($con);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">??</span>
          </button>
          </div>';
        }
        
      }

    }

    
?>


 
<div class="container mt-3">
<h1 class="text-center text-white">Insert your Categories</h1>
    <form action="../admin_area/insert_categories.php" method="post">
    <div class="form-group text-white">
        <label for="name">Name</label>
        <input type="text" name="category_name" class="form-control">
    </div>
    <button type="submit" class="btn btn-success" >Insert category</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

