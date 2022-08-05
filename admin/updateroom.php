<?php 
include('header.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from rooms where room_no='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update rooms set room_no='$rno',type='$type',price='$price',details='$details' where room_no='$id' ");
header('location:dashboard.php?option=rooms');
exit();
}

?>

<div class="create">
<h1>Edit Room </h1>
      <div class="error"><?php echo @$msg;?></div>
	<form method="post" enctype="multipart/form-data" action="#">
<div >
        Room Number:
		<input type="number" name="rno"  value="<?php echo $res['room_no']; ?>"/>
</div>
<div>
        Room Type:
		<input type="text" name="type"  value="<?php echo $res['type']; ?>"/>
</div>
<div>
        Price:
		<input type="number" name="price"  value="<?php echo $res['price']; ?>"/>
</div>
<div>
        Details:
		<input type="textarea" cols="70" name="details" class="urdetails" value="<?php echo $res['details']; ?>"/>
</div>
<div>
<br>
<br>
<br>
</div>
<input type="submit"  value="Update" name="update" required/>
</form>
</div>

