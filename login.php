<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();


}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<link rel="stylesheet" href="css/style.css" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<body bgcolor="gray">
    
<!-- header section starts -->

<section class="header">

 <a href="home.php" class="logo">travel.</a>

 <nav class="navbar">
    <a href="home.php">home</a> 
    <a href="about.php">about</a> 
    <a href="package.php">package</a> 
    <a href="book.php">book</a> 
    <a href="login.php">login</a>
 </nav>

 <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="bg-img"></div>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
							<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>


<!-- footer section starts -->



<section class="footer">
    
  <div class="box-container">

    <div class="box">
      <h3>quick links</h3>
      <a href="home.php"> <i class="fas fa-angle-right"></i> home</a> 
      <a href="about.php"> <i class="fas fa-angle-right"></i>about</a> 
      <a href="package.php"> <i class="fas fa-angle-right"></i>package</a> 
      <a href="book.php"> <i class="fas fa-angle-right"></i>book</a> 
      <a href="login.php"> <i class="fas fa-angle-right"></i>login</a> 
    </div>

    <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
      <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a> 
    </div>
    
    <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +254-722-000-000</a>
      <a href="#"> <i class="fas fa-envelope"></i> gemvacations@gmail.com</a>
      <a href="#"> <i class="fas fa-map"></i> nairobi, kenya - 15000</a>
    </div>

    <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
    </div>

  </div>



<div class="credit">created by <span>GEM VACATIONS ENTERPRICE</span> |ALL RIGHTS RESERVED!</div>

</section>

<!-- footer section ends -->
</BODY>
</HTML>
