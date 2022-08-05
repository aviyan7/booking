<?php
include('includes/header.php');
$msg = "";
// if(isset($submit)){
    if(isset($_POST['submit'])){
    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $phone = $con->real_escape_string($_POST['phone']);
    $message = $con->real_escape_string($_POST['message']);
    $captcha = $con->real_escape_string($_POST['captcha']);
    $cap = $con->real_escape_string($_POST['cap']);

    if($cap==$captcha){    
    $sql = "INSERT INTO contact values('','$name','$email','$phone','$message')";
    $result = mysqli_query($con, $sql);
        if($result){
            $msg = "<h1 style='color:green'>Your message was sent successfully</h1>"; 
        }
        else{
            $msg = "<h1 style='color:green'>Sorry your message could not be sent</h1>"; 
        }
    }
    else{
        $msg = "<h1 style='color:green'>Invalid Captcha</h1>";
    }
    
}
?>

<div class="create">
<h1>Contact Us</h1>
<div class="error"><?php echo $msg;?></div>
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
                    <textarea name="message" id="message" cols="38" rows="3" placeholder="Type Your Message..." required></textarea>
                    <!-- cols="30" rows="10"-->
                </div>
                <div>
                Number: 
                <input type="text" name="cap" value="<?php echo rand(100000,1000000)?>">
                </div>
                <div>
                Captcha:
                <input type="text" name="captcha" id="captcha" placeholder="Enter captcha">
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