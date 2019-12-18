<?php
include 'common.php';
if(!isset($_SESSION['email']))
{
  header('location:index.php');
}

$a=$_POST['old'];
$b=$_POST['new'];
$c=$_POST['confirm'];
$user=$_SESSION['user_id'];
$query="select id,password from users where id='$user'";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_array($result);
$d=$data['password'];
if ($b!= $c) {
    header('location: setting.php?error=The two passwords don\'t match.');
} else {
    if ($a == $d) {
        $query = "UPDATE  users SET password = '$c' WHERE id='$user'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: setting.php?error=Password Updated Successfully');
    } else
        header('location: setting.php?error=Wrong Old Password.');
}

?>
