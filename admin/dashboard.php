<?php 
session_start();
extract($_REQUEST);
include('../admin/header.php');
 if(!$_SESSION['AID']){
  header('location:../userlogin.php');
  exit();
 }
?>
    <div class="sidebar">
          <a>Welcome <?php echo $_SESSION['AID']; ?></a>
      <a href="dashboard.php?option=update_password">Update Password</a>
      <a href="dashboard.php?option=rooms">Room</a>
			<a href="dashboard.php?option=booking_details">Booking Details</a>
      <a href="dashboard.php?option=user_registration">Registered Users</a>
      <a href="dashboard.php?option=log_out">Log out</a>
    </div>
<?php 
@$opt=$_GET['option'];
if($opt=="createuser")
{
include('../createuser.php');	
}
else
{
	if($opt=="update_password")
	{
	include('updatepassword.php');	
	}
	else if($opt=="rooms")
	{
	include('rooms.php');	
	}
	
	else if($opt=="add_rooms")
	{
	include('addrooms.php');	
	}
	else if($opt=="delete_room")
	{
	include('deleteroom.php');	
	}
  else if($opt=="add_rooms")
  {
    include('addrooms.php');
  }
  
  else if($opt=="booking_details")
  {
    include('bookingdetails.php');
  }
  else if($opt=="user_registration")
  {
    include('registeredusers.php');
  }
  else if($opt=="log_out")
  {
    header('location:../userlogout.php');
    exit();
  }

}
?>
          
        </div>
      </div>
    </div>

