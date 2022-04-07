<?php
session_start();
error_reporting(1);
$room_no = $_GET['room_no'];
$id = $_GET['id'];
echo $id;
if(isset($id)==""){
    // header('location:admin/roombooking.php');
    echo "hawa";
}
else {
    header('location:userlogin.php?room_no='.$room_no);
}
// if($id=="")
// {
//     header('location:userlogin.php?room_no='.$room_no);
//     // header('location:admin/roombooking.php'); 
// }
// else{
//     header('location:admin/roombooking.php'); 
//     // header('location:userlogin.php?room_no='.$room_no);
// }

?>