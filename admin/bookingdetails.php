<?php 
//  session_start();
error_reporting(1);
include('./admin/header.php');
?>
<!-- <style>
	*{
		margin: 0;
		padding: 0;
	}
	.top{
		margin-left:35%;
		margin-bottom:0.5%;
	}

	table {
  margin-left:15%;
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  margin-left:15%;
  border: 2px solid black;
}

th, td {
border-collapse: collapse;
  text-align: left;
  padding: 8px;
  border: 2px solid black;
}

tr:nth-child(even){background-color: #f2f2f2}
	</style> -->
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
		<th>Action</th>
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
		<td><?php echo $res['1']; ?></td>
		<td><?php echo $res['2']; ?></td>
		<td><?php echo $res['3']; ?></td>
		<td><?php echo $res['4']; ?></td>
		<td><?php echo $res['5']; ?></td>
		<td><?php echo $res['6']; ?></td>
		<td><?php echo $res['7']; ?></td>
		<td><?php echo $res['8']; ?></td>
		<td><?php echo $res['9']; ?></td>
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
