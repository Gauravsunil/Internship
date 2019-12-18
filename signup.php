<!DOCTYPE html>
<?php
include 'common.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
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
 ?>

<br><br><br><br>
 <div class="container">
  <div class="col-xs-4 col-xs-offset-4">
    <div class="row">
      <h3>Signup</h3>
      <form method="POST" action="signup_script.php" >
        <div class="form-group">
          <input type="text" class="form-control" name="user" required="true" placeholder="Name">

        </div>
        <div class="form-group">
          <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="email" required = "true"placeholder="Email">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" pattern=".{6,}" name="password" required = "true" placeholder="Password">

        </div>
        <input type="radio"  id="student" name="role" value="student">Student &nbsp&nbsp
          <input type="radio" id="employee" name="role" value="employee">Employee
  
        <div class="form-group"><br>
          <input type="text" class="form-control" pattern=".{10,10}" name="contact" placeholder="Contact">

        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="city"  placeholder="City">

        </div>
          
    <div><b>
     <?php
    if(isset($_GET["error"])){
       echo $_GET['error'];
     }
     ?></b></div>

        <input type="submit" name="submit1" class="btn btn-primary" value="Submit">
      </form>

    </div>

  </div>

</div>
<?php
include 'footer.php';
?>
</body>
</html>
