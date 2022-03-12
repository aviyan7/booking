<?php
session_start();
error_reporting(1);
include('connection1.php');
// include('menu1.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> Account already exists</h1>";    
  }
  else
  {
      $sql="insert into create_account(id,name,email,password,mobile,address,gender) values('','$fname','$mail','$Passw','$mobi','$addr','$gend')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>"; 
   header('location:userprofile.php'); 
   }
  }
}
?>
<style>
    #error{
        margin-top:5rem;
    }
    </style>

<div class="container-fluid"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 style="border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
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
</div>
<?php
    include('footer.php');
?>

