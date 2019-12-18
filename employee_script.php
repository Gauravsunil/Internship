<?php
include 'common.php';
$n=$_POST['course'];
$a=$_POST['price'];
$query="select name from items where name='$n'";
$r=mysqli_query($con,$query)or die(mysqli_error($con));
if(mysqli_num_rows($r)>0){

 header('location:employee.php?error=course already exists');

}else {
  $m="insert into items(name,price) values('$n','$a')";
  $result=mysqli_query($con,$m)or die(mysqli_error($con));
  $p=mysqli_insert_id($con);
  $_SESSION['user_id']=$p;
  header('location:employee.php?error=Course Added Successfully');
}?>
