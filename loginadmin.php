<?php
// require('includes/dbcon.rec.php');
require('connection1.php');
?>
<!DOCTYPE html>
<html>

<head>
      <?php include_once("menu1.php"); ?> 
     <style>
         * {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html {
	--primary: #ddd;
	--secondary: #000;
	--red: #e50914;
	--dark-red: #a30810;
	scroll-behavior: smooth;
}
body {
	font-family: "EB Garamond", serif;
	background-color: var(--primary);
	font-size: 1rem;
	font-weight: 400;
	letter-spacing: 0.5px;
}
         .register,
.login1 {
	background-color: var(--primary);
}
.register__card,
.login__card {
	width: 320px;
	height: auto;
	padding: 15px;
	background-color: var(--secondary);
	margin: 0 auto;
	border-radius: 3px;
	box-shadow: 0 16px 28px 0 rgb(0 0 0 / 22%), 0 25px 55px 0 rgb(0 0 0 / 21%);
}
.form__heading {
	margin-bottom: 20px;
}
.card__heading {
	color: var(--primary);
	font-size: 36px;
	text-align: center;
	padding-top: 5px;
}
.card__subheading {
	font-size: 20px;
	font-weight: 600;
	text-align: center;
}
.card__subheading a {
	color: var(--primary);
}
.card__subheading a:hover {
	color: var(--red);
}
.card__subheading::after {
	content: "";
	display: block;
	width: 45%;
	padding-top: 5px;
	margin: 0 auto;
	border-bottom: 3px solid #fe980f;
}
.input__group {
	width: 100%;
	margin-bottom: 10px;
}
.input__group svg {
	position: absolute;
	color: black;
	min-width: 50px;
	margin-top: 5px;
}
.input-field {
	width: 100%;
	padding: 10px;
	padding-left: 50px;
}
.termsandcondition {
	color: var(--primary);
	font-size: 16px;
	font-weight: 500;
}
.termsandcondition a,
.form__footer a {
	color: var(--dark-red);
}
.termsandcondition a:hover,
.form__footer a:hover {
	color: var(--red);
}
.register_btn {
	margin: 10px 0;
}
.form__footer {
	color: var(--primary);
	font-size: 16px;
	font-weight: 500;
	margin-bottom: 10px;
	text-align: center;
}
         </style>
</head>

<body>
     <!-- <?php include_once("includes/navbar.inc.php"); ?> -->
     <div class="login1">
          <form class="login__card" action="process-login.php" method="POST">
               <div class="form__heading">
                    <h2 class="card__heading">Welcome Back To!</h2>
                    <p class="card__subheading">
                         <a href="index.php"> Booking.Com </a>
                    </p>
               </div>
               <div class="input__group">
                    <svg style="width: 24px; height: 24px" viewBox="0 0 24 24">
                         <path fill="currentColor" d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z" />
                    </svg>
                    <input class="input-field" type="email" name="username" placeholder="Email" required />
               </div>
               <div class="input__group">
                    <svg class="icon" style="width: 24px; height: 24px" viewBox="0 0 24 24">
                         <path fill="currentColor" d="M12,17C10.89,17 10,16.1 10,15C10,13.89 10.89,13 12,13A2,2 0 0,1 14,15A2,2 0 0,1 12,17M18,20V10H6V20H18M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6C4.89,22 4,21.1 4,20V10C4,8.89 4.89,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z" />
                    </svg>
                    <input class="input-field" type="password" name="password" placeholder="Password" required />
               </div>
               <p class="termsandcondition">
                    By logging an account you agree to our <br />
                    <a href="#">Terms & Privacy</a>.
               </p>
               <p class="termsandcondition">
                    <input type="submit" class="btn btn-all register_btn" value="Login">
                    <!-- <a href="contact.php">Forget password?</a> -->
               </p>
               <p class="form__footer">
                    <a href="userregister.php">Click here</a> to create free
                    account.
               </p>
          </form>
     </div>
</body>

</html>