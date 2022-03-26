<?php
session_start();
error_reporting(1);
include('includes/header.php');
extract($_REQUEST);
if (!isset($_SESSION['ID'])) {
  header("Location:userlogin.php");
  exit();
}
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
   $msg= "<h1 style='color:green'>Data Edited and Saved Successfully</h1>"; 
   }
   else
   {
	   echo "error";
   }
}
?>
<!-- <style>
    #error{
        margin-top:15rem;
    }

    .create {
  	width: 450px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.create h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.create form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.create form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.create form input[type="password"], .create form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.create form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3274d6;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.create form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}
    </style> -->
<div class="create">
			<h1>Edit User</h1>
      <div class="error"><?php echo @$msg;?></div>
			<form action="#" method="post">

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