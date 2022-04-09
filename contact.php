<?php
include('includes/header.php');
// include('includes/connection.php');
$msg = "";
if(isset($_POST['submit'])){
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $message = $con->real_escape_string($_POST['message']);
      
    $sql = "INSERT INTO contact values('','$name','$email','$phone','$message')";
    $result = mysqli_query($con, $sql);
        if($result){
            $msg = "<h1 style='color:green'>Your message was sent successfully</h1>"; 
        }
        else{
            $msg = "<h1 style='color:green'>Sorry your message could not be sent</h1>"; 
        }
}
?>

<div class="create">
<h1>Contact Us</h1>
<div class="error"><?php echo @$msg;?></div>
        <form action="#" autocomplete="off" method="POST">
            <div>
                <div>
                    Name:
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <div>
                    E-mail:
                    <input type="email" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div>
                    Phone:
                    <input type="number" name="phone" id="phone" placeholder="Phone No." required>
                </div>
                <div>
                    Message:
                    <textarea name="message" id="message"  placeholder="Type Your Message..." required></textarea>
                    <!-- cols="30" rows="10"-->
                </div>
                <div>
                <img src="captcha.php"/><input type="text" name="captcha" />

</div>
                <div class="desc1">
                    <input type="Submit" name="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>


    <?php
include('includes/footer.php');

?>