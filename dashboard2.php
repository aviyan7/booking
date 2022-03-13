<link rel="stylesheet" href="dashboard2.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                <span class="icon"></span>
                <span class="title"><h2>Himalayan.Com</h2></span>
</a>
</li>
<li>
<a href="dashboard2.php?option=update_password">
                <span class="icon"></span>
                <span class="title"><h2>Update Password</h2></span>
</a>
</li>
<li>
    <a href="dashboard2.php?option=rooms">
                <span class="icon"></span>
                <span class="title"><h2>Room</h2></span>
</a>
</li>
<li>
    <a href="dashboard2.php?option=add_rooms">
                <span class="icon"></span>
                <span class="title"><h2>Add Rooms</h2></span>
</a>
</li>
<li>
    <a href="dashboard2.php?option=booking_details">
                <span class="icon"></span>
                <span class="title"><h2>Booking Details</h2></span>
</a>
</li>

<li>
    <a href="dashboard2.php?option=user_registration">
                <span class="icon"></span>
                <span class="title"><h2>Users</h2></span>
</a>
</li>

<li>
    <a href="dashboard2.php?option=log_out">
                <span class="icon"></span>
                <span class="title"><h2>Log Out</h2></span>
</a>
</li>

</ul>
</div>

<!-- <div class="main">
    <div class="topbar">
        <div class="toggle"></div>
        <div class="user">
            <img src="../images/A.jpg">
        </div>
    </div>
<div> -->

<!-- <script>
function toggleMenu(){
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    toggle.classList.toggle('active');
    navigation.classList.navigation('active');
}
</script> -->

<?php
@$opt=$_GET['option'];
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
  else if($opt=="add_rooms")
  {
    include('addrooms1.php');
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
    include('userregistration.php');
  }
  else if($opt=="log_out")
  {
    header('location:userlogout.php');
  }
?>

<div class="details">
  <div class="recentOrders">
    <div class="cardHeader">
      <h2>Hello</h2>
` </div>
<table border="2px" cellpadding="400" cellspacing="5" style="color:'solid black' ">
  <thead>
    <tr>
    <th>SN</th>
		<th>Image</th>
		<th>Room No</th>
		<th>TYpe</th>
		<th>Price</th>
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
</tr>
</thead>
<tbody>
<?php 
include('connection1.php');
$i=1;
$sql=mysqli_query($con,"select * from rooms");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['room_no'];	
$img=$res['image'];
$path="../image/rooms/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['room_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard2.php?option=update_room&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil">a</span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span>A</a></td>
	</tr>	
<?php 	
}
?>	
</tbody>
</table>

</div>
</div>


