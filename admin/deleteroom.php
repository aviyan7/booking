<?php 
include('../includes/connection.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from rooms where room_no='$id' ");
$res=mysqli_fetch_assoc($sql);
$img=$res['image'];
unlink("../image/rooms/$img");
if(mysqli_query($con,"delete from rooms where room_no='$id' "))
{
header('location:dashboard.php?option=rooms');	
}

?>