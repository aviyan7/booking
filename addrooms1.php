<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from rooms where room_no='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "this room is already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into rooms values('$rno','$type','$price','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../images/".$_FILES['img']['name']);
	echo "Rooms added successfully";
	}
}
?>
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

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered" border="1">
	
	<tr>	
		<th>Room No</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Room Type</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Room Details" name="add"/>
		</td>
	</tr>
</table> 
</form>