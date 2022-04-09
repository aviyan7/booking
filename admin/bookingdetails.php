<?php 
error_reporting(1);
include('./admin/header.php');
$i =1;
?>

<table class="table">
	<h1 class="top">Room Booking Details</h1><hr>
	<thead>
		<a href="roombooking.php?aid=1"><button class="top">Book Room</button></a>
</thead>
	<tr>
		<th>SN</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Status</th>
		<th>Action</th>
	</tr>

<?php 
// $sql=mysqli_query($con,"select * from room_booking_details");
$sql="SELECT create_account.name, create_account.email, create_account.mobile, create_account.address, room_booking_details.id, room_booking_details.room_type, room_booking_details.check_in_date, room_booking_details.check_in_time, room_booking_details.check_out_date, room_booking_details.occupancy, room_booking_details.status FROM create_account INNER JOIN room_booking_details ON create_account.id = room_booking_details.userid";
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) > 0)
{
while($res=mysqli_fetch_array($result))
{
$oid=$res['id'];
?>
<tr>
		<td><?php echo $i; $i++;?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobile']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['occupancy']; ?></td>
		<td><?php echo $res['status']; ?></td>
		<td><a href="editorder.php?id=<?php echo $oid;?>"><i class="fa fa-edit"></i></a>&emsp;<a style="color:red" href="../cancelorder.php?id=<?php echo $oid; ?>"><i class="fa fa-trash"></i></a></td>
	</td>
	</tr>
	<?php
}
?>	
</table>
<?php
}
?>
