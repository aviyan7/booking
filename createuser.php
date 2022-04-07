<?php
extract($_REQUEST);
 include('includes/header.php');

if(isset($_POST['save']))
{

    $fname = $con->real_escape_string($_POST['fname']);
    $mail  = $con->real_escape_string($_POST['mail']);
    $pass  = $con->real_escape_string(md5($_POST['pass']));
    $mobi  = $con->real_escape_string($_POST['mobi']);
    $addr  = $con->real_escape_string($_POST['addr']);
    $gend  = $con->real_escape_string($_POST['gend']);
    $role  = $con->real_escape_string($_POST['role']);

    // echo $role; echo $pass; 
    
  $sql= mysqli_query($con,"select * from create_account where email='$mail' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> Account already exists</h1>";    
  }
  else
  {
      $sql="insert into create_account(id,name,email,password,mobile,address,gender,role) values('','$fname','$mail','$pass','$mobi','$addr','$gend','$role')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   if($role=="user") 
   {
    header('location:userprofile.php'); 
   }

   }

  }

}
?>


<div class="create">
			<h1>Create New User</h1>
      <div class="error"><?php echo @$msg;?></div>
			<form action="#" method="post">

        <div>
            Name:
        <input type="text" name="fname" placeholder="Enter Your Name"required>
        </div>

         <div>
            Email:
              <input type="email" name="mail" placeholder="Enter Your Email" required>
          </div>

          <div>
          Password:
              <input type="password" name="pass"  placeholder="Enter Your Password" required>
          </div>
       
          <div>
          Mobile:
              <input type="number" name="mobi" placeholder="Enter Your Mobile Number" required>
          </div>
 
          <div>
            Address:
          <input type="text" name="addr" placeholder="Enter Your Address"required>
           </div>

           <div class="r">
            Gender: 
              <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend"value="female"required><b>Female</b>&emsp;
              <input type="radio" name="gend"value="other"required><b>Other</b>
          </div>

          <div class="r1">
            Role:
          <select name="role" required="">
              <option value="">Select Role</option>
              <option value="user">User</option>
              <option value="admin">Admin</option>
            </select>
          </div>
				<input type="submit" value="Submit" name="save" id="sub">
			</form>
      <input type="button" value="Back" onclick="history.back()" id="baack"/>
		</div>


  

