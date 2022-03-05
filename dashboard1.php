<?php 
session_start();
extract($_REQUEST);
include('connection1.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>Admin Dashboard</title>
     <link rel="stylesheet" href="admindashboardstyle.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="sidebar">
          <a>Welcome <?php echo $admin; ?></a>
            <a href="dashboard1.php?option=update_password">Update Password</a>
            <a href="dashboard1.php?option=rooms">Room</a>
			<a href="dashboard1.php?option=booking_details">Booking Details</a>
      <a href="dashboard1.php?option=log_out">Log out</a>
          </div>
<?php 
@$opt=$_GET['option'];
if($opt=="report")
{
include('reports1.php');	
}
else
{
	if($opt=="update_password")
	{
	include('update_password1.php');	
	}
	else if($opt=="rooms")
	{
	include('rooms1.php');	
	}
	
	else if($opt=="add_rooms")
	{
	include('addrooms1.php');	
	}
	else if($opt=="delete_room")
	{
	include('deleteroom1.php');	
	}
  
  else if($opt=="update_room")
  {
    include('updateroom1.php');
  }
  else if($opt=="booking_details")
  {
    include('bookingdetails1.php');
  }
  else if($opt=="user_registration")
  {
    include('userregistration1.php');
  }
  elseif($opt=="log_out")
  {
    header('location:index1.php');
  }

}
?>
          
        </div>
      </div>
    </div>

  </body>
</html>