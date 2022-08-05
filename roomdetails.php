<?php 
session_start();
error_reporting(1);
include('./includes/header.php');
$id = $_SESSION['ID'];
?>

<body style="margin-top:50px;">
<br>
<?php 

$room_no = $_GET['room_no'];
$sql=mysqli_query($con,"select * from rooms where room_no='$room_no'");
$res=mysqli_fetch_assoc($sql);
?>
    <div class="desc1"><h1><b><?php echo $res['type']; ?></h1></b></div>
    <div class="gallery">
    <img src="images/<?php echo $res['image']; ?>" alt="Image" >
    </div>

    
    <div class="desc1"><b>Price: <?php echo $res['price']; ?></b></div>
    <div class="desc1"><b>Status: <?php echo $res['status']; ?></b></div>
		<div class="desc1"><b>
      <?php echo $res['details']; ?>
</b>
    </div>

    <div class="desc1">
      <a href="checklogin.php?room_no=<?php echo $room_no;?>&&id=<?php echo $id; ?>"><button>Book Now</button></a>
      <a href="index.php"><button>Back</button></a>
    </div>
      
					<div>
						<h1 align="center">Room Type</h1>
					</div><br>
					<div class="type">
						<?php
            $sql1=mysqli_query($con,"select * from rooms limit 3");
           while($result1= mysqli_fetch_assoc($sql1))
           {
            ?>
            <a href="roomdetails.php?room_no=<?php echo $result1['room_no']; ?>"><button class="roomtype"><?php echo $result1['type']; ?></button></a><hr>
            <?php } ?>
  
				</div>
        


  <?php
      include('./includes/footer.php');
  ?>

