<?php
include('includes/connection.php');
// $sql = "SELECT * FROM create_account WHERE email = '$eid' and password = '$pass'";
$sql="insert into booking_details(userid,name) values('7','f')";
$result = mysqli_query($con,$sql);
if($result){
    echo "fyes";
}
// $row = mysqli_fetch_assoc($result);
// $count = mysqli_num_rows($result);
?>