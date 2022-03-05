<?php 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from rooms where room_id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update rooms set room_no='$rno',type='$type',price='$price',details='$details' where room_id='$id' ");
header('location:dashboard.php?option=rooms');
}

?>
<html>
	<head>
   <title></title>
   <link rel="stylesheet" href="updateroomstyle.css">
</head>
<body>
<div class="container">
	<form method="post" enctype="multipart/form-data" class="updateForm">
<div class="row">
        <label>Room Number</label>
		<input type="text" name="rno" class="form-control" value="<?php echo $res['room_no']; ?>"/>
</div>
<div class="row">
        <label>Room Type</label>
		<input type="text" name="type" class="form-control" value="<?php echo $res['type']; ?>"/>
</div>
<div class="row">
        <label>Price</label>
		<input type="text" name="price" class="form-control" value="<?php echo $res['price']; ?>"/>
</div>
<div class="row">
        <label>Details</label>
		<input type="textarea" name="details" class="form-control" value="<?php echo $res['details']; ?>"/>
</div>
<div class="row">
<input type="submit" class="btn btn-primary" value="Update" name="update"required/>
</div>
</form>
</div>

</body>
</html>