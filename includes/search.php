<?php
include('connection.php');
$query = $_GET['query'];
$result=mysqli_query($con, "Select * from rooms where type='$query' ");
$res=mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
if($count==0){
    header('location:../index.php');
    exit();
}
else{
    if($res){
            header('location:../roomdetails.php?room_no='.$res['room_no']);
            exit();
        }
        else
        { 
            echo $msg = "No any searches found";
        }
}


?>