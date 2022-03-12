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
  <link rel="stylesheet" href="indexstyle1.css">
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

<!-- <div>
<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img23.jpg" alt="Cinque Terre" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="deluxe.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>


<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img24.jpg" alt="Forest" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="normal.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>

<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img25.jpg" alt="Northern Lights" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="standard.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>

<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img26.jpg" alt="Mountains" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="twin_deluxe.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>
</div>

<div>
<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img23.jpg" alt="Cinque Terre" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="luxurious.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>


<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img24.jpg" alt="Forest" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="suit.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>


<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img25.jpg" alt="Northern Lights" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="userlogin.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>

<div class="img">
  <div class="gallery">
      <img src="./images/Twin_img26.jpg" alt="Mountains" width="400" height="300">
    <div class="desc">Add a description of the image here</div>
    <a target="_self" href="loginadmin.php"><button type="submit" class="rooms">Read More</button></a>
  </div>
</div>
</div> -->

<?php 
	$sql=mysqli_query($con,"select * from rooms");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <div class="img">
	<div class="gallery">
      <img src="images/<?php echo $r_res['image']; ?>"alt="Image"id="img1" width="400" height="300"> <!--Id Is Img-->
      <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
      <p class="desc"><?php echo substr($r_res['details'],0,100); ?></p><br>
	    <a href="roomdetails.php?room_no=<?php echo $r_res['room_no'];?>"><button>Read more</button></a><br><br>
    </div>
  </div>
	<?php } ?>

<br>
<br>
<div class="clearfix"></div>

<?php
  include('footer.php')
?>
</body>
</html>