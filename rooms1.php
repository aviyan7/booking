<script>
	function delRoom(id)
	{
		if(confirm("You want to delete this Room ?"))
		{
		window.location.href='delete_room.php?id='+id;	
		}
	}
</script>
<style>
	table {
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
</style>
<div style="overflow-x:auto;">
<table class="table">
	<h1 style='margin-left:10em'>Room Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard1?option=addrooms1.php"><button>Add New Rooms</button></a></td>
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
$path="images/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="250px" height="150px"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard1.php?option=update_room&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil">a</span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span>A</a></td>
	</tr>	
<?php 	
}
?>	
	
</table>