<?php 
session_start();
error_reporting(1);
include('connection1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Booking.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="menustyle.css">
</head> <!--Head Open  Here-->
<body style="margin-top:50px;">
  <?php
      include('menu1.php')
  ?>


 <div class="container"id="red"><!--Id Is Red--> 
<div class="container">    
  <h1>Welcome To <font color="#a6e22b;"><b>Booking.Com</b></font></h1><hr><br>
  <!-- <div class="row">
    <div class="hov"><!--Hov is Class-->
  <!-- </div>
  </div> --> 
</div>
</div>

<div class="img">
  <div class="gallery">
    <a target="_blank" href="./images/Twin_img23.jpg">
      <img src="./images/Twin_img23.jpg" alt="Cinque Terre" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="img">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="./images/Twin_img24.jpg" alt="Forest" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="img">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="./images/Twin_img25.jpg" alt="Northern Lights" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="img">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="./images/Twin_img26.jpg" alt="Mountains" width="400" height="300">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>

<?php
  include('footer.php')
?>
</body>
</html>