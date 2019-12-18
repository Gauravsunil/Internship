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
include 'check-if-added.php';
 ?>

<br><br><br>
<div class="container">
  <div class="jumbotron">
    <h1>Welcome to our Internship Store!</h1>
    <p> We have the best Web,Android,Data Science Courses. No need to hunt around, we have all in one place</p>

  </div>


<div class="row text-center">
  <div class="col-md-4 col-sm-4">
    <a href="#" class="thumbnail"><img src="img/1.jpg" alt="fgfdgd" style="width:100%;height:250px;" class="img-responsive img-rounded"></a>
    <div class="caption">
      <h3>Web Development</h3>
      <h5>Price:Rs.7000.00</h5>
      <?php
if(!isset($_SESSION['email'])) {
 ?>
        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
      } else {
          //We have created a function to check whether this particular product is added to cart or not.
        if(check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
      } else {
        ?>
        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
      <?php
    }
    }
      ?>

  </div>

</div>
<div class="col-md-4 col-sm-4">
  <a href="#" class="thumbnail"><img src="img/2.jpg" alt="fgfdgd"  style="width:100%;height:250px;"  class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Android</h3>
    <h5>Price:Rs.4500.00</h5>
    <?php  if (!isset($_SESSION['email'])) { ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
        //We have created a function to check whether this particular product is added to cart or not.
      if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
      ?>
      <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
  }
  }
    ?>

</div>

</div>
<div class="col-md-4 col-sm-4">
  <a href="#" class="thumbnail"><img src="img/3.jpg" alt="fgfdgd"  style="width:100%;height:250px;" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Data Science</h3>
    <h5>Price:Rs.5000.00</h5>
    <?php  if (!isset($_SESSION['email'])) { ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
        //We have created a function to check whether this particular product is added to cart or not.
      if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
      ?>
      <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
  }
  }
    ?>
</div>
</div>
</div>
<br>
<div class="row text-center">
  <div class="col-md-4 col-sm-4">
    <a href="#" class="thumbnail"><img src="img/4.jpg" style="width:100%;height:250px;"  alt="fgfdgd" class="img-responsive img-rounded"></a>
    <div class="caption">
      <h3>Machine Learning</h3>
      <h5>Price:Rs.3000.00</h5>
      <?php  if (!isset($_SESSION['email'])) { ?>
        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
      <?php
      } else {
          //We have created a function to check whether this particular product is added to cart or not.
        if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
      } else {
        ?>
        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
      <?php
    }
    }
      ?>

  </div>

</div>
<div class="col-md-4 col-sm-4">
  <a href="#" class="thumbnail"><img src="img/5.jpg" style="width:100%;height:250px;"  alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Photoshop</h3>
    <h5>Price:Rs.3000.00</h5>
    <?php  if (!isset($_SESSION['email'])) { ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
        //We have created a function to check whether this particular product is added to cart or not.
      if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
      ?>
      <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
  }
  }
    ?>

</div>

</div>
<div class="col-md-4 col-sm-4">
  <a href="#" class="thumbnail"><img src="img/6.jpg" style="width:100%;height:250px;"  alt="fgfdgd" class="img-responsive img-rounded"></a>
  <div class="caption">
    <h3>Robotics</h3>
    <h5>Price:Rs.8000.00</h5>
    <?php  if (!isset($_SESSION['email'])) { ?>
      <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
        //We have created a function to check whether this particular product is added to cart or not.
      if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
       echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
    } else {
      ?>
      <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
  }
  }
    ?>
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
<script>
$("img").hover(function(){
  $(this).css("transform","scale(1.1)")
},function(){
  $(this).css("transform","scale(1)")
})
</script>
</html>
