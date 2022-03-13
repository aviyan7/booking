<?php 
session_start();
// if($_SESSION['create_account_logged_in']!="")
// {
//     header('location:userlogin.php');
// }
error_reporting(1);
require('connection1.php');
extract($_REQUEST);
if(isset($log))
{
	if($id=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>Fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from create_account where email='$id' && password='$pass' ");
    while ($row1 = mysqli_fetch_array($sql)) {
        $eid = $row1['id'];
		}

		if(mysqli_num_rows($sql))
		{
        $_SESSION['create_account_logged_in']=$id;
		header('location:roombooking.php?id='.$eid);   
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

include('menu1.php'); 
 include('footer.php'); 
?>

 
<link rel="stylesheet" href="adminstyle1.css">
 <h2>User Login</h2>    
    <div class="adlogin">  
	<?php echo @$error;?>
    <form id="login" method="post" action="#">  
        <div class="form-group">  
        <label><b>Email</b></label>    
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
        <span>Remember me</span> <br>
        <a href="createuser.php">Create an User</a> 
    </form>  
</div> 

<?php

    ?>
