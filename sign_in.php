<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/as-alert-message.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style-starter.css">
	<link rel="stylesheet" type="text/css" href="assets/css/sign-in.css">
</head>


<body>
	<header id="site-header" class="w3l-header fixed-top">
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="dashboard.php"><span class="fa fa-play icon-log" aria-hidden="true"></span> Myflex </a></h1>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
				<div class="Login_SignUp" id="login_s">
					<a class="nav-link" href="sign_in.php"><i class="fa fa-user-circle-o"></i></a>
				</div>
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
			</div>
		</nav>
	</header>

	<div class="container_signup_signin" id="container_signup_signin">
		<div>
		<?php
  require "config.php";
  // When form submitted, insert values into the database.
  if (isset($_REQUEST["username"])) {
      // removes backslashes
      $username = stripslashes($_REQUEST["username"]);
      //escapes special characters in a string
      $username = mysqli_real_escape_string($con, $username);
      $email = stripslashes($_REQUEST["email"]);
      $email = mysqli_real_escape_string($con, $email);
      $password = stripslashes($_REQUEST["password"]);
      $password = mysqli_real_escape_string($con, $password);
      $create_datetime = date("Y-m-d H:i:s");
      $query =
          "INSERT into `users` (username, password, email, created_on)
                     VALUES ('$username', '" .
          md5($password) .
          "', '$email', '$create_datetime')";
      $result = mysqli_query($con, $query);
      if ($result) {
          echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
      } else {
          echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
      }
  } else {
       ?>
		<form action="sign_in.php" method="post" style="color: var(--theme-title);" > 
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="https://www.facebook.com" class="social" style="color: var(--theme-title);"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.youtube.com/" class="social" style="color: var(--theme-title);"><i class="fa-brands fa-youtube"></i></a>
					<a href="https://www.instagram.com/" class="social" style="color: var(--theme-title);"><i class="fa-brands fa-instagram"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input name="username" type="text" name placeholder="Username" required/>
				<input name="email" type="email" placeholder="Email" required/>
				<input name="password" type="password" placeholder="Password" required/>
				<button>Sign Up</button>
				<br>
				<span class="link"><a href="login.php">Click to Login</a></span>
			</form>
			<?php
  }
  ?>
		</div>
	</div>
	
	<script type="text/javascript" src="assets/js/as-alert-message.min.js"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<!--/theme-change-->
	<script src="assets/js/theme-change.js"></script>
	<!-- disable body scroll which navbar is in active -->
	<script>
		$(function () {
			$('.navbar-toggler').click(function () {
				$('body').toggleClass('noscroll');
			})
		});
	</script>
	<!-- disable body scroll which navbar is in active -->
	<!--/MENU-JS-->
	<script>
		$(window).on("scroll", function () {
			var scroll = $(window).scrollTop();

			if (scroll >= 80) {
				$("#site-header").addClass("nav-fixed");
			} else {
				$("#site-header").removeClass("nav-fixed");
			}
		});

		//Main navigation Active Class Add Remove
		$(".navbar-toggler").on("click", function () {
			$("header").toggleClass("active");
		});
		$(document).on("ready", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
			$(window).on("resize", function () {
				if ($(window).width() > 991) {
					$("header").removeClass("active");
				}
			});
		});
	</script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/sign-in.js"></script>
</body>
<script src="https://kit.fontawesome.com/dc18e510fa.js" crossorigin="anonymous"></script>
</html>