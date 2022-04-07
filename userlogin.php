<?php 
session_start();
error_reporting(1);
// include('includes/header.php');
include('includes/connection.php');
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
        // $_SESSION['ID'] = $row['id'];
        $_SESSION['ROLE'] = $row['role'];
        if($_SESSION['ROLE']=="user")
        {
            $_SESSION['ID'] = $row['id'];
            if($f){
                header('location:admin/roombooking.php');
            }
            else{
                header('location:userprofile.php?id='.$_SESSION['ID']);
            }

        }
        else {
            $_SESSION['AID'] = $row['email'];
            header('location:admin/dashboard.php');
         }
           
        
    }

        
    else {
        $error = "<h3 style='color:red'>Your Login Name or Password is invalid</h3>";
    }
}
    

if(isset($back))
{
    header('location:index.php');
}

?>
<!-- echo htmlspecialchars($_SERVER["PHP_SELF"]);-->

 <h2>Log in to your account<?php echo $f;  ?></h2>    
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
