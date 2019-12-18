<!DOCTYPE html>
<?php
include 'common.php';
if(!isset($_SESSION['email'])){
  header('location:index.php');
}
 ?>
<html lang="en">
  <head>
    <title>Settings</title>
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
<br><br><br>
<div class="container">
  <div class="col-xs-4 col-xs-offset-4">
    <div class="row">
      <h3>Change Password</h3>
      <form method="POST" action="setting_script.php" >
        <div class="form-group">
          <input type="password" class="form-control" name="old"  pattern=".{6,}" required="true" placeholder="Old Password">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="new"  pattern=".{6,}" required="true" placeholder="New Password">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="confirm" pattern=".{6,}" required="true" placeholder="Confirm Password">

        </div>
        <div><b>
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
        <button name="button" class="btn btn-primary">Change</button>
      </form>

    </div>

  </div>

</div>
<footer class="footer">
<div class="container">
  <center><p>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000</p>
  </center>
</div>
</footer>
</body>
</html>
