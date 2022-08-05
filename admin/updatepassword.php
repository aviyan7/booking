<?php 
$msg = "";
$admin = $_SESSION['AID'];
if(isset($update))
{
$sql=mysqli_query($con,"select * from create_account where email='$admin' and password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update create_account set password='$np' where email='$admin' ");	
		$msg = "<h5 style='color:blue'>Password updated successfully</h5>";
		}
		else
		{
			$msg = "<h5 style='color:red'>New and confirm password doesn't match</h5>";
		}
	}
	else
	{
	$msg = "<h5 style='color:red'>Old Password doesn't match</h5>";	
	}
	
}
?>
<div class="container">
<h1 style='margin-left:15em'>Update Password</h1><hr><br>
	<form method="post" enctype="multipart/form-data" class="adlogin">
		<?php echo $msg ?>
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
<input type="submit" class="btn btn-primary" value="Update Password" name="update" required/>
</div>
</form>
</div>
