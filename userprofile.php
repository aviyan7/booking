<?php 
echo @$error; 
session_start();
error_reporting(1);
// include('menu1.php');
$id = $_GET['id'];
 if($id==""){
    header('location:userlogin.php');
 } 


?>