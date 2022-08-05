<?php 
include('../includes/header.php');
extract($_REQUEST);
error_reporting(1);
$uid = $_SESSION['ID'];
$aid = $_GET['aid'];

if($_SESSION['ID']=="")
{
  if($aid==""){
    header('location:../userlogin.php');
    exit();
  }
  elseif($aid!==""){
    $id = $aid;
  }

}

 else
 {
  $id = $uid;
 }

    $sql1= mysqli_query($con,"select * from create_account where id='$id' "); 
    while($row = mysqli_fetch_array($sql1)){
      $userid = $row['id'];
      $name = $row['name'];
      $mail = $row['email'];
      $phone = $row['mobile'];
      $address = $row['address'];
    

if(isset($savedata))
{

    $room_type = $con->real_escape_string($_POST['room_type']);
    $rno  = $con->real_escape_string(md5($_POST['rno']));
    $cdate  = $con->real_escape_string($_POST['cdate']);
    $ctime  = $con->real_escape_string($_POST['ctime']);
    $codate  = $con->real_escape_string($_POST['codate']);
    $Occupancy  = $con->real_escape_string($_POST['Occupancy']);
    

$sql4="insert into room_booking_details (id, room_type, userid, check_in_date, check_in_time,check_out_date, occupancy, status ) values('','$room_type', '$userid', '$cdate', '$ctime','$codate', '$Occupancy', 'booked')";
   if(mysqli_query($con,$sql4))
   {
   $msg= "<h1 style='color:green'>Data Saved Successfully</h1>";
   }
}
    

?>

<style>
    .error{
        margin-top:1rem;
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
  	width: 40%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3cb371;;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.create form input[type="submit"]:hover {
	background-color: #3cb371;
  	transition: background-color 0.2s;
}

.Back{
  background-color: #3cb371;
  color: whitesmoke;
}
    </style>

<div class="create">
			<h1>Room Booking</h1>
      <div class="error"><?php echo $msg;?></div>
      <div class="error"><?php echo @$msg1;?></div>
			<form action="#" method="post">

      <div>
        Room Type:
        <select name="room_type">
        <?php
        $i = 0;
        $sql3= mysqli_query($con,"select type from rooms");
        while($row = mysqli_fetch_array($sql3)){
          ?>
          <option>
          <?php echo $row['type']; ?>
          <?php $i++; } ?>
        </option>
        </select>
      </div>

        <div>
            Room Number:
            <select name="rno">
        <?php
        $i = 0;
        $sql3= mysqli_query($con,"select room_no from rooms");
        while($row = mysqli_fetch_array($sql3)){
          ?>
          <option>
          <?php echo $row['room_no']; ?>
          <?php $i++; } ?>
        </option>
        </select>  
        </div>
          
         <div>
          Check In Date :
                  <input type="date" name="cdate" min="<?php echo date('Y-m-d'); ?>" onchange="OnSelect(this); return false; " required>
          </div>

          <div>
          Check In Time: <input type="time" name="ctime" required>
          </div> 
       
          <div>
          Check Out Date: <input type="date" name="codate" onclick="onDisplay()" min="<?php echo date('Y-m-d'); ?>" required>
          </div>
 
          <div>
            Occupancy:
            <input type="radio" name="Occupancy" value="Single" required><b>Single</b>
              <input type="radio" name="Occupancy" value="Twin" required><b>Twin</b>&emsp;
           </div>

				<input type="submit" value="Submit" name="savedata">
			</form>
      <input type="button" value="Back" class="Back" onclick="history.back()"/>
		</div>

<?php 
}
 ?>



