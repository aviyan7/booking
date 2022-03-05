<?php 
session_start();
error_reporting(1);
require('connection1.php');
extract($_REQUEST);
if(isset($log))
{
	if($id=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$id' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$id;	
		header('location:dashboard1.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}

if(isset($back))
{
    header('location:index1.php');
}
?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="adminstyle1.css">    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="adlogin">  
    <?php echo @$error;?> 
    <form id="login" method="post" action="#">  
        <div class="form-group">  
        <label><b>User Name</b></label>    
        <input type="text" name="id" id="id" class="form-control" placeholder="Enter your email" required>    
        <br><br></div> 
        <div class="form-group">    
        <label><b>Password</b></label>    
        <input type="Password" name="pass" id="pass" placeholder="Enter your Password" required>    
        <br><br></div>
        <div class="form-group"> 
        <input type="submit" value="Login" name="log" id="log" required>       
        <input type="submit" value="Back" id="back" name="back">
     </div> 
     <br>
        <input type="checkbox" id="check">    
        <span>Remember me</span>  
    </form>  
</div>    
</body>    
</html>