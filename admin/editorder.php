<?php
session_start();
error_reporting(1);
include('header.php');
extract($_REQUEST);
$id = $_GET['id'];
$sql1 = "select * from room_booking_details where id='$id' ";
$query1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($query1);   //fetch single row
$msg1 ="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $sql2= mysqli_query($con,"select * from room_booking_details where id='$id' ");
  $query2 = mysqli_fetch_assoc($sql2);
  if(mysqli_num_rows($sql2))
  {
   $sql3="update room_booking_details set name='$fname', email='$mail' ,phone='$mobi' ,address='$addr',room_type='$room_type', check_in_date='$check_in_date', check_in_time='$check_in_time', check_out_date='$check_out_date'  where id='$id' ";
   $query3 = mysqli_query($con, $sql3);
   header('location:editorder.php?id='.$id); 
   $msg1= "<h1 style='color:green'>Data Edited and Saved Successfully</h1>"; 
   }
   else
   {
	   echo "error";
   }
}
?>

<div class="create">
			<h1>Edit Room Booking Details</h1>
      <div class="error"><?php echo @$msg;?></div>
      <div class="error"><?php echo $msg1;?></div>
			<form action="#" method="POST">

        <div>
            Name:
        <input type="text" name="fname" value="<?php echo $row['name']?>" required>
        </div>

         <div>
            Email:
              <input type="text" name="mail" value="<?php echo $row['email']?>" required>
          </div>
       
          <div>
          Mobile:
              <input type="text" name="mobi" value="<?php echo $row['phone']?>" required>
          </div>
 
          <div>
            Address:
          <input type="text" name="addr" value="<?php echo $row['address']?>" required>
           </div>

           <div>
            Room Type:
          <input type="select" name="room_type" value="<?php echo $row['room_type']?>" required>
           </div>

           <div>
            Check In Date:
          <input type="date" name="check_in_date" value="<?php echo $row['check_in_date']?>" required>
           </div>

           <div>
            Check In Time:
          <input type="time" name="check_in_time" value="<?php echo $row['check_in_time']?>" required>
           </div>

           <div>
            Check Out Date:
          <input type="date" name="check_out_date" value="<?php echo $row['check_out_date']?>" required>
           </div>
           <!-- <div>
            Occupancy:
            <input type="radio" name="occupancy" value="" required><b>Single</b>
              <input type="radio" name="occupancy"  required><b>Twin</b>&emsp;
           </div> -->

				<input type="submit" value="Update" name="save">
			</form>
           <a href="dashboard.php?option=booking_details"> <input type="button" value="Back"/></a>
</div>