<?php

include "common.php"
?>
<html>

<head>

<title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
         <link href="index.css" rel="stylesheet" type="text/css"/>
<style>
footer{
    position:fixed;
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%
}</style>

</head>


<body style="padding-top: 50px;">

    <!-- Header -->

   <?php include 'header.php';
 ?>
    <br>


<div class="container">

<div class="row">

<div class="col-sm-10">

<h1 class="title">LIVE SUPPORT</h1>

<h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3><br>

<div>

<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>

</div>

</div>

<div class="col-sm-2">

<img align="right" src="img/contact.png" alt="contact us">

</div>

</div>
<div class="row">
<div class="col-sm-9">
<div class="contact-form">
<div class="col-sm-9">
<h2>Get In Touch</h2>
<form method="post" action="sendemail.php">
<div class="form-group">
<input type="text" name="name" class="form-control" required="required" placeholder="Name" >
</div>
<div class="form-group">

<input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required" placeholder="Email">

</div>

<div class="form-group">

<textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Your Message Here"></textarea>
				    </div>


<div class="form-group col-sm-7">

<button name="submit" class="btn btn-primary">Submit</button>

</div>

</form>
</div>
</div>

 </div>


<div class="col-sm-3">

<div class="contact-info">

<h2 class="title">Contact Info</h2>

<address>

<p>Lovely Professional University</p>

<p>Phagwara,Punjab</p>

<p>India</p>

<p>Phone:(91) 8974562231</p>

<p>Fax:(000) 222 55 33 6</p>

<p>Email: info@estore.com</p>

 </address>


 <div><h2 class="title">Follow Us On</h2>

<a href="http://www.facebook.com/estore" target="_blank"><img src="./img/logofb.png" alt="fb logo" style="width:30px; height:30px; border:0"></a>

<a href="http://www.twitter.com/estore" target="_blank"><img src="./img/logotwitter.png" alt="twitter logo" style="width:30px; height:30px; border:0 padding-left:10px;"></a>

 </div>

</div>

</div>

</div>

</div>




 <br>
<br>
     <?php include 'footer.php'; ?>

   </body>

</html>
