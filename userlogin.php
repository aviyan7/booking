<?php 
session_start();
error_reporting(1);
include('includes/header.php');
extract($_REQUEST);
$f = $_GET['room_no'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $eid = $con->real_escape_string($_POST['id']);
    $pass = $con->real_escape_string(md5($_POST['pass']));
    

    $sql = "SELECT * FROM create_account WHERE email = '$eid' and password = '$pass'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);
    if($count == 1) {

        $_SESSION['ROLE'] = $row['role'];
        if($_SESSION['ROLE']=="0")
        {
            $_SESSION['ID'] = $row['id'];
            if($f){
                header('location:admin/roombooking.php');
                exit();
            }
            else{
                header('location:userprofile.php?id='.$_SESSION['ID']);
                exit();
            }

        }
        else {
            $_SESSION['EID'] = $row['id'];
            $_SESSION['AID'] = $row['email'];
            header('location:admin/dashboard.php');
            exit();
         }
           
        
    }

        
    else {
        $error = "<h3 style='color:red'>Your Login Name or Password is invalid</h3>";
    }
}
    

if(isset($back))
{
    header('location:index.php');
    exit();
}

?>


 <h2>Log in to your account</h2>    
    <div class="adlogin">  
	<?php echo $error;?>
    <form id="adlogin" method="POST" action="#">  
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
        <span>Remember me</span> <br>
        <a href="createuser.php" id="register">Register New Account</a> 
    </form>  
</div> 

<?php
 include('includes/footer.php'); 
    ?>
