<?php 
session_start();
error_reporting(1);
include('connection1.php');
extract($_REQUEST);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $eid = $_POST['id'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM create_account WHERE email = '$eid' and password = '$pass'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    $f = $_GET['room_no'];
    echo $f;
    if($count == 1) {
        $id = $row['id'];
        echo $f;
        // $error= "<h3 style='color:red'>alid login details</h3>".$f;	
        if($f!=NULL)
        {
            header('location:roombooking.php?id='.$id);  
        }
        else
        {
            header('location:userprofile.php?id='.$id);  
        }
            
    }

        
    else {
        $error = "<h3 style='color:red'>Your Login Name or Password is invalid</h3>";
    }
}
    

if(isset($back))
{
    header('location:index1.php');
}

// include('menu1.php'); 

?>

 
<link rel="stylesheet" href="adminstyle1.css">
 <h2>User Login</h2>    
    <div class="adlogin">  
	<?php echo $error;?>
    <form id="login" method="POST" action="#">  
        <div class="form-group">  
        <label><b>Email</b></label>    
        <input type="text" name="id" id="id" class="form-control" placeholder="Enter your email" required>    
        <br><br></div> 
        <div class="form-group">    
        <label><b>Password</b></label>    
        <input type="Password" name="pass" id="pass" class="form-control" placeholder="Enter your Password" required>    
        <br><br></div>
        <div class="form-group"> 
        <input type="submit" value="Login" name="log" id="log" required>       
        <input type="submit" value="Back" id="back" name="back">
     </div> 
     <br>
        <input type="checkbox" id="check">    
        <span>Remember me<?php echo $f; ?></span> <br>
        <a href="createuser.php">Create an User</a> 
    </form>  
</div> 

<?php
 include('footer.php'); 
    ?>
