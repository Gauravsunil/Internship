<!DOCTYPE html>
<?php
include 'common.php';
 ?>
<html lang="en">
  <head>
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<style>
  footer{
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
include ('header.php');

 ?>

<br><br><br>
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to our Employeer site</h1>
    <p> Here Employee can add internships</p>

  </div>
  <br><br>
 <div class="container">
  <div class="col-xs-4 col-xs-offset-4">
    <div class="row">
      <h3>ADD Courses</h3>
      <form method="POST" action="employee_script.php" >
        <div class="form-group">
          <input type="text" class="form-control" name="course" required="true" placeholder="ADD Course">

        </div>
        <div class="form-group"><br>
          <input type="text" class="form-control" required="true" name="price" placeholder="Price">

        </div>
          
    <div>
    </div>
    <input type="submit" name="submit1" class="btn btn-primary" value="ADD">
      </form>

    </div>

  </div>

</div>


</div>
<br><br><br><br>
<footer class="footer">
<div class="container">
  <center><p>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
  </center>
</div>
</footer>
</body>
</html>
