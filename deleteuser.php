<?php
include('connection1.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from create_account where id='$id' ");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($con,"delete from create_account where id='$id' "))
{
header('location:dashboard1.php?option=user_registration');	
}
?>
