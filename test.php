<?php
  date_default_timezone_set("Asia/Kathmandu");
// echo "The time is " . date("h:i:sa");
$currentdate = date("Y-m-d");
$currentyear = date("Y");
echo $currentdate;

?>
<!-- <form action="#" method="POST">
<input type="time" name="time" required>
<input type="submit" value="Submit" name="Submit">
</form> -->

    
<?php
// $time = "j";
$date ="h";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $date = $_POST['cdate'];
//   $time = $_POST['ctime'];
  if($currentdate<$date){
      echo "hawa";
  }
  else{
      echo "all";
  }
  

}

?>


<div class="create">
      <div class="error"><?php echo @$msg; echo $date; ?></div>
			<form action="#" method="POST">
         <div>
          Check In Date :
                  <input type="date" name="cdate" required>
          </div>

          <!-- <div>
          Check In Time: <input type="time" name="ctime" required>
          </div> -->
				<input type="submit" value="Submit" name="savedata">
</form>
		</div>

