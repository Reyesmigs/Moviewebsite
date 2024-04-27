<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                <h1><a class="navbar-brand" href="dashboard.php"><span class="fa fa-play icon-log"
                            aria-hidden="true"></span>
                            MyShowz </a></h1>
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
        session_start();
        // When form submitted, check and create user session.
        if (isset($_POST["username"])) {
            $username = stripslashes($_REQUEST["username"]); // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST["password"]);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query =
                "SELECT * FROM `users` WHERE username='$username'
                     AND password='" .
                md5($password) .
                "'";
            ($result = mysqli_query($con, $query)) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION["username"] = $username;
                // Redirect to user dashboard page
                header("Location: dashboard.php");
            } else {
                echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
            }
        } else {
             ?>
        <form action="login.php" method="post">
				<h1>Log in</h1>
				<div class="social-container">
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social" style="color: var(--theme-title);"><i
							class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input name="username" type="text" placeholder="Username" />
				<input name="password" type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
            <?php
        }
        ?>
<p class="link"><a href="sign_in.php">New Registration</a></p>
		</div>
    </div>
</body>

</html>
