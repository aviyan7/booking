<?php 
error_reporting(1);
include('./admin/header.php');
?>

<table class="table">
	<h1 class="top">Room Booking Details</h1><hr>
	<thead>
		<a href="roombooking.php?aid=1"><button class="top">Book Room</button></a>
</thead>
	<tr>
		<th>SN</th>
		<!-- <th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th> -->
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Action</th>
		<th>Status</th>
	</tr>

<?php 
$sql=mysqli_query($con,"select * from room_booking_details");
if (mysqli_num_rows($sql) > 0)
{
while($res=mysqli_fetch_array($sql))
{
$oid=$res['id'];
?>
<tr>
		<td><?php echo $res['0']; ?></td>
		<td><?php echo $res['2']; ?></td>
		<td><?php echo $res['3']; ?></td>
		<td><?php echo $res['4']; ?></td>
		<td><?php echo $res['5']; ?></td>
		<td><?php echo $res['6']; ?></td>
		<td><a href="editorder.php?id=<?php echo $oid;?>"><i class="fa fa-edit"></i></a>&emsp;<a style="color:red" href="../cancelorder.php?id=<?php echo $oid; ?>"><i class="fa fa-trash"></i></a></td>
		<td><?php echo $res['7']; ?></td>
	</td>
	</tr>
	<?php
}
?>	
</table>
<?php
}
?>
