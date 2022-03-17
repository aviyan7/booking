<?php
session_start();
error_reporting(1);
$room_no = $_GET['room_no'];
$id = $_GET['id'];
if($id=="")
{
    header('location:userlogin.php?room_no='.$room_no);
}
else{
    header('location:roombooking.php?id='.$id);
}

?>