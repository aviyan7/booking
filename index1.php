<?php 
session_start();
error_reporting(1);
include('connection1.php');
include('menu1.php');
?>
  <link rel="stylesheet" href="indexstyle1.css">
<body >

<div class="container" id="red" style="margin-top:60px;">    
  <h1>Welcome To <font color="#a6e22b;"><b>Booking.Com</b></font></h1><hr><br>
</div>

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
	    <a href="roomdetails.php?room_no=<?php echo $r_res['room_no'];?>"><button class="rooms">Read more</button></a><br><br>
    </div>
  </div>
	<?php } ?>

<br>
<br>
<div class="clearfix"></div>

<?php
  include('footer.php')
?>
