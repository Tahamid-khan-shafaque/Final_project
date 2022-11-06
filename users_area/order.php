<?php
include('../includes/Data_code.php');
include('../functions/common_function.php');
/* 
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    echo hi; 
} */
if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    echo $user_id;
}

?>