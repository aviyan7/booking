<?php
$sql1=mysqli_query($con,"select * from create_account where email='$id' ");
while ($row = mysqli_num_rows($sql)){
    $eid = $_row['id'];
    echo $eid;
}
    ?>