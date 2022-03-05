<?php 
session_start();
if($_SESSION['create_account_logged_in']!="")
{
    header('location:userbooking.php');
}
error_reporting(1);
require('connection1.php');
extract($_REQUEST);
if(isset($login))
{
	if($id=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from create_account where email='$id' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['create_account_logged_in']=$id;	
		header('location:userbooking.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="loginstyle.css">
</head>
<body">
	<?php
include('menu1.php');
	?>
 <!-- Primary Id-->
  <div class="login-page">
    <div class="form">
		<div class="login">
			<div class="login-header">
				<h3>User Login</h3>
				<p>Please enter your credentials to login. </p>
			</div>
<div>
			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="Email" class="form-control"name="id" placeholder="Email Id"required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="button" required>
      	</form><br>  
        
    </div><br>
</div>
<?php
include('Footer.php');
?>
</body>
</html>
