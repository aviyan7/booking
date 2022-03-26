<?php
include('includes/connection.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from room_booking_details where id='$id' ");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($con,"delete from room_booking_details where id='$id' "))
{
header('location:admin/dashboard.php?option=booking_details');	
}
?>