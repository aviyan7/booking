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
<h1 class="container">Welcome <?php echo $row['name']; ?></h1>
<h3>Email: <?php echo $row['name']; ?></h3>
<h3>Mobile: <?php echo $row['mobile']; ?></h3>
<h3>Address: <?php echo $row['address']; ?></h3>
<h3>Gender: <?php echo $row['gender']; ?></h3>
<h3>Role: <?php echo $row['role']; ?></h3>
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type="submit" value="Back" name="back" style="margin-top:5rem">
</form>

<a href="edituser.php"><button>Edit Profile</button></a>


<?php
include('./includes/footer.php');
?>