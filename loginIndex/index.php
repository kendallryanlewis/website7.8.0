<!DOCTYPE html>
<html >
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div id="back">
			<div class="backRight"></div>
			<div class="backLeft"></div>
		</div>
		<div id="slideBox">
			<div class="topLayer">
				<div class="right">
					<div class="content">
						<h2>Login</h2>
						<form method="post" action="../loginSystem/validate.php">
							<div class="form-group">
								<input type="text" id="username" name="username" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" id="password" name="password" placeholder="Password">
							</div>
							<button id="send" type="Submit" name="Submit" value="Register"/>Login
							</button>
							<input type="button" id="goRight" class="off" value="Sign Up"/>
						</form>
					</div>
				</div>
				<div class="left">
					<div class="content">
						<h2>Sign Up</h2>
						<form id="form register" method="post" action=" ../loginSystem/register.php">
							<div class="form-group">
								<input name="username" type="text" id="username" placeholder=" Who Are You?" />
							</div>
							<div class="form-group">
								<input type="email" id="email" name="email" placeholder="Email@domain.com">
							</div>
							<div class="form-group">
								<input name="user_password" type="password"id="user_password" placeholder="Password" />
							</div>
							<div class="form-group">
								<input name="confirm_user_pass" type="password" id="confirm_user_pass" placeholder="Confirm Password"/>
							</div>
							<button id="send" type="submit" name="Submit">Sign Up</button>
							<input type="button" id="goLeft" class="off" value="Login"/>
						</form>
					</div>
				</div>
			</div>
		</div>
    	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>	
		</script>
		<script src="js/index.js"></script>
	</body>
</html>



