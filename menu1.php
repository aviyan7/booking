<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="navbar1.css">
</head>
<body>
<nav id="navbar">
  <ul>
  <li><a href="index1.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="gallery1.php">Gallery</a></li>

    <?php
     if($_SESSION['create_account_logged_in']!="")
     {
    ?>
    <li class="login">
      View Status <i class="fa fa-angle-down"></i>
      <ul>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="userlogout.php">Logout</a></li>
      </ul>
    </li>
    <?php
     }
     else
     {
    ?>
    <li class="login"><a href="adminlogin1.php">Admin Login</a></li>
		<li class="login"><a href="userlogin.php">User Login</a></li>
		<?php 
		} ?> 
  </ul>
</nav>


