<?php
session_start();
error_reporting(1);
include('./includes/header.php');
if (!isset($_SESSION['ID'])) {
	header("Location:userlogin.php");
	exit();
 }
 $id = $_SESSION['ID'];
 $sql = "SELECT * FROM create_account WHERE id = '$id' ";
   $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
 $id = $row['email'];
extract($_REQUEST);

?>


<style>
	table{
		margin-left:15%;
		margin-top: 1rem;
	}
	.top{
		margin-top: 5rem;
		margin-left:15%;
	}
	</style>
<table class="table" border="1px solid;">
	<h1 class="top">User Room Booking</h1><hr>
	<tr>
		<th>SN</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check in Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Cancel Order</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from room_booking_details where email='$id' ");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['occupancy']; ?></td>
		<td><a style="color:red" href="cancelorder.php?booking_id=<?php echo $oid; ?>"><i class="fa fa-trash"></i></a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>