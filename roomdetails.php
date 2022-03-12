<?php 
session_start();
error_reporting(1);
include('connection1.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Booking.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin-top:50px;">
	<?php
      include('menu1.php');
  ?><br><br><br>
<?php 
$room_no = $_GET['room_no'];
$sql=mysqli_query($con,"select * from rooms where room_no='$room_no' ");
$res=mysqli_fetch_assoc($sql);
?>

		<h2 class="Ac_Room_Text"><?php echo $res['type']; ?></h2>
    <h3 class="Ac_Room_Text"><?php echo $res['price']; ?></h3>
		<p class="text-justify">
      <?php echo $res['details']; ?>
</p>
    <div class="row">
      <!-- <h2>Amenities & Facilities</h2> -->
      <!-- <img src="image/icon/wifi.png"class="img-responsive"> -->
      <a href="roombooking.php"><button>Book Now</button></a>
      <a href="index1.php"><button>Back</button></a>
      </div>
	</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 align="center">Room Type</h4>
					</div><br>
					<div class="panel-body-right text-center">
    <!--Fatch Mysql Database Select Query Room Details -->
						<?php
            include('connection1.php');
            $sql1=mysqli_query($con,"select * from rooms");
           while($result1= mysqli_fetch_assoc($sql1))
           {

            ?>
            <a href="roomdetails.php?room_no=<?php echo $result1['room_no']; ?>"><button><?php echo $result1['type']; ?></button></a><hr>
            <?php } ?>
    <!--Fatch Mysql Database Select Query Room Details -->
    					
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
  <?php
      include('footer.php')
  ?>
</body>
</html>
