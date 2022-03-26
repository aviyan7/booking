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

<!-- <link rel="stylesheet" href="updatestyle1.css"> -->


<div class="container">
<h1 style='margin-left:15em'>Update Password</h1><hr><br>
	<form method="post" enctype="multipart/form-data" class="adlogin">
	<label>Enter your Current  Password:</label>
	<div class="row">
		<input type="password" name="op" required/>
</div>
<label>Enter your New  Password:</label>
<div class="row">
		<input type="password" name="np" required/>
</div>
<label>Please Confirm  Password:</label>
<div class="row">
		<input type="password" name="cp" required/>
</div>
<div class="row">
<input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
</div>
</form>
</div>
