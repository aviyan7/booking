<?php 
session_start();
error_reporting(1);
?>

<nav id="navbar">
  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact us</a></li>
  <li class="login"><form action="./includes/search.php" method="GET">
	<input type="text" name="query" />
	<input type="submit" value="Search" />
</form></li>
    <?php
     if($_SESSION['ID']!="")
     {
    ?>
    <li class="login">
      View Status <i class="fa fa-angle-down"></i>
      <ul>
              <li><a href="userprofile.php">Profile</a></li>
              <li><a href="userbooking.php?">Booking Status</a></li>
              <li><a href="userlogout.php">Logout</a></li>
      </ul>
    </li>
    <?php
     }
     else
     {
    ?>
    
		<li class="login"><a href="userlogin.php">User Login</a></li>
    <!-- <li class="login"><input type="text" placeholder="Search ....."></li>
   -->

		<?php 
		} ?> 
  </ul>
</nav>



