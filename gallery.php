
<?php 
     include('./includes/header.php');

?>
     <div class="container" style="margin-top:60px;">    
  <h1><b>Image Gallery</b></h1><hr><br>
</div>

<?php
	$sql=mysqli_query($con,"select * from rooms");
	while($r_res=mysqli_fetch_assoc($sql))
	{
	?>
  <div class="img">
	<div class="gallery">
      <img src="images/<?php echo $r_res['image']; ?>"alt="Image"id="img1" width="400" height="300">
      <div class="desc"><?php echo $r_res['type']; ?></div><br>
    </div>
  </div>
	<?php } ?>

<br>
<br>
<div class="clearfix"></div>

<?php 
include('./includes/footer.php');
?>
