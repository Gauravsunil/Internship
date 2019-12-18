<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Internship Store</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <?php
      if (isset($_SESSION['email'])) {
        ?>
        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span>MyCourses </a></li>
         <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
         <li><a href = "order-history.php"><span class = "glyphicon glyphicon-file"></span>Order History</a></li>
         <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
         ?>
          <?php


                } else {
                   ?>
                   <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                   <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                   <li><a href = "about_us.php"><span class = "glyphicon glyphicon-th-list"></span> About Us</a></li>
                   <li><a href = "contact_us.php"><span class = "glyphicon glyphicon-phone"></span> Contact Us</a></li>

                 <?php
                }
                ?>
              </ul>
            </div>
          </div>
        </div>
