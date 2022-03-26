<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='admin/deleteroom.php?id='+id;	
		}
	}
</script>

<div style="overflow-x:auto;">
<table class="table">
	<h1 style='margin-left:10em'>Room Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms"><button>Add New Rooms</button></a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Image</th>
		<th>Room No</th>
		<th>TYpe</th>
		<th>Price</th>
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_no'];	
$img=$res['image'];
$path="../images/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="250px" height="150px"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>"><i class="fa fa-edit" style="color:blue"></i></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><i class="fa fa-trash" style="color:red;"></i></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>