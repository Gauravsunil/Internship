<!DOCTYPE html>
<?php
include 'common.php';
if (isset($_SESSION['email']))
 {
  header('location: product.php');
 }
 ?>
 ?>
<html lang="en">
  <head>

    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
footer{
    position:fixed;
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%
}
</style>
  </head>
  <body>
<?php
include 'header.php';
 ?><br><br><br><br>
<div class="container">
  <div class="col-xs-4 col-xs-offset-4">
    <div class="row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Login</h3>

        </div>
        <div class="panel-body">
          <form method="POST" action="login_submit.php">
          <div class="form-group">
          <input type="text" name="email" class="form-control" id="email" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control"  id="password" placeholder="Enter Password">
          </div>
<div><b >
 <?php
    if(isset($_GET["error"])){
       echo $_GET['error'];
}
?></b></div>
<br>
          <button class="btn btn-success">Submit</button>
        </div>
        </form>
        <div class="panel-footer">
          <h4>Don't have an Account?<h4><a href="signup.php">Register</a>
        </div>
      </div>
     </div>
  </div>

</div>
<?php
include 'footer.php';
 ?></body>
</html>
