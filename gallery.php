
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
      <img src="images/<?php echo $r_res['image']; ?>"alt="Image"id="img1" width="400" height="300"> <!--Id Is Img-->
      <p class="desc"><?php echo substr($r_res['details'],0,100); ?></p><br>
    </div>
  </div>
	<?php } ?>

<br>
<br>
<div class="clearfix"></div>

<?php 
include('./includes/footer.php');
?>
