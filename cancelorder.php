<?php
session_start();
include('includes/connection.php');
$id=$_GET['id'];
    if($_SESSION['AID']!="")
{
    $sql = "delete from room_booking_details where id='$id' ";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:admin/dashboard.php?option=booking_details');  
        exit();
    }
}
else{
    $sql = "delete from room_booking_details where id='$id' ";
    $result = mysqli_query($con, $sql);
    if($result){
        header('location:userbooking.php');
        exit();
    }
    
}

?>