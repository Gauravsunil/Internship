<?php
include 'common.php';
$item_id=$_GET['id'];
$b=$_SESSION['user_id'];
$q="insert into users_items(user_id,item_id,status) values('$b','$item_id','added to cart')";
$query=mysqli_query($con,$q)or die(mysqli_error($con));
header('location:product.php');

 ?>
