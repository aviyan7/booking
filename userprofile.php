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
     exit();
 }

 $id = $_SESSION['ID'];
 $sql = "SELECT * FROM create_account WHERE id = '$id' ";
   $result = mysqli_query($con,$sql);
 $row = mysqli_fetch_assoc($result);
?>

<div class="create">
<h1 class="prname">Welcome <?php echo $row['name']; ?></h1>
<h3 id="pr">Email: <?php echo $row['name']; ?></h3>
<h3 id="pr">Mobile: <?php echo $row['mobile']; ?></h3>
<h3 id="pr">Address: <?php echo $row['address']; ?></h3>
<h3 id="pr">Gender: <?php echo $row['gender']; ?></h3>
<h3 id="pr">Role: <?php echo $row['role']; ?></h3>

<a href="edituser.php"><button id="log2">Edit Profile</button></a>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="submit" value="Back" name="back" id="back1" >


</div>


<?php
include('./includes/footer.php');
?>