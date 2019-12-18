
<?php
include ("common.php");
if (isset($_SESSION['email']))
 {
  header('location: product.php');
 }
 ?>
<!DOCTYPE html>
<html>
 <head> <!---- The page has a title Lifestyle Store-->
    <title>Insternship Store</title>
    <!---- External css file index.css placed in the folder css is linked-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

     <link href="index.css" rel="stylesheet" type="text/css"/>
   </head>
    <body>
      <?php
      include 'header.php';
?>
   <div id="banner-image">
     <div class="container">
       <div id="banner-content">
         <br>
         <h1>We Provides Knowledge</h1><br>
         <p>Flat 40% OFF on premium Courses </p><br>
         <a href="product.php" class="btn btn-danger btn-lg">Explore Now</a>
      </div>
    </div>
     </div>

 <div class="container">
   <div class="items">
      <a href="#" >
        <img src="./img/1.jpg" alt="" style="width:100%;height:250px;"  class="thumbnail">
        <div class="caption">
        <h2>Web Development</h2>
        <p>Choose among best available in the world.</p>
      </div>
      </a>
      </div>
      <div class="items">
         <a href="#" >
           <img src="./img/2.jpg" style="width:100%;height:250px;" alt="" class="thumbnail">
           <div class="caption">
           <h2>Android</h2>
           <p>Original and complete course.</p>
         </div>
         </a>

      </div>
   <div class="items">
      <a href="#" >
        <img src="./img/3.jpg" alt="" style="width:100%;height:250px;" class="thumbnail">
        <div class="caption">
        <h2>Data Science</h2>
        <p>Our equisite collection of courses.</p>
      </div>
      </a>

   </div>

 </div>
<?php
include 'footer.php';
 ?>
</body>
 </html>
