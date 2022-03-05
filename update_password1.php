<?php 
if(isset($update))
{
$sql=mysqli_query($con,"select * from admin where username='$admin' and password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update admin set password='$np' where username='$admin' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<!DOCTYPE html>
<html>
	<head>
<link rel="stylesheet" href="updatestyle.css">
</head>
<body>

<div class="container">
	<form method="post" enctype="multipart/form-data" class="updateForm">
<div class="row">
        <label>Old  Password</label>
		<input type="password" name="op" class="form-control"required/>
</div>
<div class="row">
        <label>New  Password</label>
		<input type="password" name="np" class="form-control"required/>
</div>
<div class="row">
        <label>Confirm  Password</label>
		<input type="password" name="cp" class="form-control"required/>
</div>
<div class="row">
<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
</div>
</form>
</div>

</body>
</html>