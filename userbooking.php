<?php
session_start();
error_reporting(1);
include('./includes/header.php');
if (!isset($_SESSION['ID'])) {
	header("Location:userlogin.php");
	exit();
 }
 $id = $_SESSION['ID'];
extract($_REQUEST);

?>
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
$sql="SELECT create_account.name, create_account.email, create_account.mobile, create_account.address, room_booking_details.id, room_booking_details.room_type, room_booking_details.check_in_date, room_booking_details.check_in_time, room_booking_details.check_out_date, room_booking_details.occupancy, room_booking_details.status FROM create_account INNER JOIN room_booking_details ON create_account.id = room_booking_details.userid WHERE room_booking_details.userid = '$id'";
$result = mysqli_query($con,$sql);
while($res=mysqli_fetch_assoc($result))
{
$id=$res['id'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['occupancy']; ?></td>
		<td><a style="color:red" href="cancelorder.php?id=<?php echo $id; ?>"><i class="fa fa-trash"></i></a></td>
	</td>
	</tr>
<?php 	
}

?>	
</table>
