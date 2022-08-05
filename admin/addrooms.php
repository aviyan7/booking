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
	mysqli_query($con,"insert into rooms values('','$rno','$type','$price','$details','$img','open')");	
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
		<td><input type="number" name="rno" required/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type" title="Please enter a valid room type" required/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="number" name="price" required/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details" cols="45" rows="10" required></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img" required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" value="Add" name="add"/>
		</td>
	</tr>
</table> 
</form>



	