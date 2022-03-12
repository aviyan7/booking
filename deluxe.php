<?php
session_start();
error_reporting(1);
include('connection1.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from rooms where room_id='$id'");
$res=mysqli_fetch_assoc($sql);
extract($_REQUEST);
echo $id;


?>


<!DOCTYPE html>
<html>
    <head>
        <style>
.img-responsive{
    width: 35%;
    height: 15%;
}
            </style>
</head>
<body>
    <h1>Deluxe Room</h1>
  <br>
    <p>In-room amenities include:
Room Features
Individual climate control
Tea and coffee making facilities
220V/240V electrical sockets
Minibar
Communication & Technology
Free WiFi
International calls by operator
Entertainment
LCD TV
Satellite channels
Bathroom Facilities
Shower
Hair-dryer
Housekeeping & In-room Services
Turn down service<p>
<?php 
	$sql=mysqli_query($con,"select * from rooms");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
	<div>
      <img src="images/<?php echo $r_res['image']; ?>"class="img-responsive"alt="Image"id="img1"> <!--Id Is Img-->
      <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
      <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
	    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
    </div>
	<?php } ?>

    <a href="index1.php"><button>Back</button></a>
    <a href="bookingdetails1.php"><button>Book Now</button></a>
</body>
</html>