<?php 
//  session_start();
error_reporting(1);
include('connection1.php');
?>
<style>
	table{
		margin-left:15%;
	}
	.top{
		margin-left:15%;
	}
	</style>
<table class="table" border="1px solid;">
	<h1 class="top">Room Booking Details</h1><hr>
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
		<th>Cancel Order</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from room_booking_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['no'];
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
		<td><a style="color:red" href="cancelorder1.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
	</td>
	</tr>	
</table>
<?php
}
?>
