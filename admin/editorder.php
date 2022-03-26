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
<!-- <style>
#error{
        margin-top:15rem;
    }

    .create {
  	width: 550px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 50px auto;
}
.create h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.create form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.create form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.create form input[type="time"], .create form input[type="date"], .create form input[type="select"], .create form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.create form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3274d6;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.create form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}
    </style> -->
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