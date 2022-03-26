<?php
extract($_REQUEST);
 include('includes/header.php');
// include('includes/connection.php');

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
  //  header('location:dashboard.php');
   }

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

<!-- <div class="container-fluid"> 
  <div class="container">
    <div class="row">
      <center><h1 style="border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
       <center></center><br>
      <div class="col-sm-6 ">
        <form class="form-horizontal" method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Name :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Enter Your Name"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mail" class="form-control"placeholder="Enter Your Email-id" required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Password :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Enter Your Password" required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobile No:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Enter Your Mobile Number"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Address :</h4></div>
          <div class="col-sm-7">
          <input type="text" name="addr" class="form-control"placeholder="Enter Your Address"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gender :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Male</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Female</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Other</b>
          </div>
          </div>


        <div class="form-group">
          <div class="row">
            <div class="col-sm-6"style="text-align:center;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="cursive;height:40px;"/>
          </div>
          </div>
          </div>
        </form>
        <input type="button" value="Back" onclick="history.back()"/>
        </div>
      </div>
    </div>
  </div>
</div> -->

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
              <input type="text" name="mail" placeholder="Enter Your Email" required>
          </div>

          <div>
          Password:
              <input type="password" name="pass"  placeholder="Enter Your Password" required>
          </div>
       
          <div>
          Mobile:
              <input type="text" name="mobi" placeholder="Enter Your Mobile Number" required>
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


  

