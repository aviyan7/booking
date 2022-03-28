<?php
session_start();
error_reporting(1);
include('header.php');
extract($_REQUEST);
$id = $_GET['id'];
$sql1 = "select * from room_booking_details where id='$id' ";
$query1 = mysqli_query($con, $sql1);
$row = mysqli_fetch_assoc($query1);   //fetch single row

if(isset($save))
{  
   $sql2= mysqli_query($con,"select * from room_booking_details where id='$id' ");
   $query2 = mysqli_fetch_assoc($sql2);
  if(mysqli_num_rows($sql2))
  {
   $sql3= mysqli_query($con, "update room_booking_details set name='$fname', email='$mail' ,phone='$mobi' ,address='$addr', room_type='$room_type', check_in_date='$check_in_date', check_in_time='$check_in_time', check_out_date='$check_out_date' where id='$id' ");
   header('location:editorder.php?id='.$id); 
   $msg= "<h1 style='color:green'>Data Edited and Saved Successfully</h1>"; 
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
			<form action="#" method="post">

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
          <input type="select" name="addr" value="<?php echo $row['room_type']?>" required>
           </div>

           <div>
            Check In Date:
          <input type="date" name="addr" value="<?php echo $row['check_in_date']?>" required>
           </div>

           <div>
            Check In Time:
          <input type="time" name="addr" value="<?php echo $row['check_in_time']?>" required>
           </div>

           <div>
            Check Out Date:
          <input type="date" name="addr" value="<?php echo $row['check_out_date']?>" required>
           </div>

				<input type="submit" value="Submit" name="save">
			</form>
           <a href="dashboard.php?option=booking_details"> <input type="button" value="Back"/></a>
</div>