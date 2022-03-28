<?php
session_start();
error_reporting(1);
include('includes/header.php');
extract($_REQUEST);
if (!isset($_SESSION['ID'])) {
  header("Location:userlogin.php");
  exit();
}
$msg1="";
$id = $_SESSION['ID'];
$sql1 = "select * from create_account where id='$id' ";
$query1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($query1); 

if(isset($save))
{
  $sql2= mysqli_query($con,"select * from create_account where id='$id' ");
  $query2 = mysqli_fetch_assoc($sql2);
  if(mysqli_num_rows($sql2))
  {
   $sql3="update create_account set name='$fname', email='$mail' ,mobile='$mobi' ,address='$addr' ,gender='$gend' where id='$id' ";
   $query3 = mysqli_query($con, $sql3);
   header('location:edituser.php?id='.$id); 
   $msg1= "<h1 style='color:green'>Data Edited and Saved Successfully</h1>"; 
   }
   else
   {
	   echo "error";
   }
}
?>

<div class="create">
			<h1>Edit User</h1>
      <div class="error"><?php echo $msg1;?></div>
      <div class="error"><?php echo @$msg;?></div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <div>
            Name:
        <input type="text" name="fname" value="<?php echo $row['name']?>" required>
        </div>

         <div>
            Email:
              <input type="text" name="mail" value="<?php echo $row['email']?>" required>
          </div>
       
          <div>
          Mobile:
              <input type="text" name="mobi" value="<?php echo $row['mobile']?>" required>
          </div>
 
          <div>
            Address:
          <input type="text" name="addr" value="<?php echo $row['address']?>" required>
           </div>

           <div>
            Gender: 
              <input type="radio" name="gend" value="male" <?php if($row['gender']=="male"){ echo "checked";}?> required><b>Male</b>&emsp;
              <input type="radio" name="gend" value="female" <?php if($row['gender']=="female"){ echo "checked";}?> required> <b>Female</b>&emsp;
              <input type="radio" name="gend" value="other" <?php if($row['gender']=="other"){ echo "checked";}?> required><b>Other</b>
          </div>

				<input type="submit" value="Update" name="save" id="log1">
			</form>
           <a href="userprofile.php"> <input type="button" value="Back" id="back1"/></a>
</div>


<?php 
include('includes/footer.php');
?>