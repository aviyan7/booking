<?php 
// include('menu1.php');
include('connection1.php');
extract($_REQUEST);
error_reporting(1);
$id = $_GET['id'];
$aid = $_GET['aid'];
if($aid=="" and $id=="")
{
  header('location:userlogin.php');
}
else if($id="")
{
  header('location:adminlogin1.php');
}
else
{
  if($id!="")
  {
    $sql1= mysqli_query($con,"select * from create_account where id='$id' "); 
    while($row = mysqli_fetch_array($sql1)){
      $name = $row['name'];
      $mail = $row['email'];
      $phone = $row['mobile'];
      $address = $row['address'];
  }
}
  
    $sql1= mysqli_query($con,"select * from admin where id='$aid' "); 
    while($row = mysqli_fetch_array($sql1)){
      $name = $row['username'];
      $mail = $row['email'];
      $phone = $row['mobile'];
      $address = $row['address'];
    }
      

if(isset($savedata))
{
  $sql2= mysqli_query($con,"select * from room_booking_details where email='$mail' and room_type='$room_type' ");
  if(mysqli_num_rows($sql2)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {
   $sql3="insert into room_booking_details(name,email,phone,address,room_type,Occupancy,check_in_date,check_in_time,check_out_date) 
  values('$name','$mail','$phone','$address','$room_type','$Occupancy','$cdate','$ctime','$codate')";
   if(mysqli_query($con,$sql3))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1>"; 
   }
  }
}

?>

<style>
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
.create form input[type="time"], .create form input[type="date"], .create form select {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}

.create form input[type="radio"]{
  	width: 70px;
  	height: 20px;
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
    </style>

<div class="create">
			<h1>Room Booking<?php echo $aid; ?></h1>
      <div class="error"><?php echo @$msg;?></div>
			<form action="#" method="post">

        <div>
            Room Type:
            <select name="room_type" required>
                  <option>Normal Room</option>
                  <option>Deluxe Room</option>
                  <option>Luxurious Suite</option>
                  <option>Standard Room</option>
                  <option>Suite Room</option>
                  <option>Twin Deluxe Room</option>
               </select>
        </div>

         <div>
          Check In Date :
                  <input type="date" name="cdate" required>
          </div>

          <div>
          Check In Time: <input type="time" name="ctime" required>:
          </div>
       
          <div>
          Check Out Date: <input type="date" name="codate" required>
          </div>
 
          <div>
            Occupancy:
            <input type="radio" name="Occupancy" value="Single" required><b>Single</b>
              <input type="radio" name="Occupancy" value="Twin" required><b>Twin</b>&emsp;
           </div>

				<input type="submit" value="Submit" name="savedata">
			</form>
      <input type="button" value="Back" onclick="history.back()"/>
		</div>

<?php 
}

include ('footer.php'); ?>



