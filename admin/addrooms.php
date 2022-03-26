<?php 
$msg = "";
if(isset($add))
{
	$sql=mysqli_query($con,"select * from rooms where room_no='$rno'");
	if(mysqli_num_rows($sql))
	{
	$msg = "this room is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into rooms values('','$rno','$type','$price','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$_FILES['img']['name']);
	$msg = "Room added successfully";
	}

}
?>

<form method="post" enctype="multipart/form-data">
	<h1 style='margin-left:10em'>Add New Rooms</h1><hr>
	
<table class="table" border="1">
	<tr>
	<?php echo $msg; ?>
     </tr>
	<tr>	
		<th>Room No</th>
		<td><input type="text" name="rno"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" value="Add" name="add"/>
		</td>
	</tr>
</table> 
</form>



	