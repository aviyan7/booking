<?php 
echo @$error; 
session_start();
error_reporting(1);
include('./includes/header.php');
if (!isset($_SESSION['ID'])) {
   header("Location:userlogin.php");
   exit();
}

 if($_POST['back'])
 {
     header('location:index.php?id='.$_SESSION['ID']);
 }

 $id = $_SESSION['ID'];
 $sql = "SELECT * FROM create_account WHERE id = '$id' ";
   $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
?>

<div>
<h1 class="prname">Welcome <?php echo $row['name']; ?></h1>
<h3 id="pr">Email: <?php echo $row['name']; ?></h3>
<h3 id="pr">Mobile: <?php echo $row['mobile']; ?></h3>
<h3 id="pr">Address: <?php echo $row['address']; ?></h3>
<h3 id="pr">Gender: <?php echo $row['gender']; ?></h3>
<h3 id="pr">Role: <?php echo $row['role']; ?></h3>
</div>

<a href="edituser.php"><button style=" margin-left:47%; background-color:#3cb371; color:whitesmoke;">Edit Profile</button></a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="submit" value="Back" name="back" style=" margin-left:54%; background-color:#3cb371; color:whitesmoke;">
</form>


<?php
include('./includes/footer.php');
?>