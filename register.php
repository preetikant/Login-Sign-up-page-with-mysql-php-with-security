<?php include('server.php'); ?>
																	<!-- this is registration.php page -->
<!DOCTYPE html>
<html>
<head>
	<title>User Registration System with Php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registration</h2>
	</div>
	<form action="register.php" method="post">
																		<!-- display validation errors -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>User_Name:</label>
			<input type="text" name="username" placeholder="Enter your name" ">
		</div>
		<div class="input-group">
			<label>Email:</label>
			<input type="email" name="email" placeholder="Enter your email" ">
		</div>

		<div class="input-group">
			<label>Password:</label>
			<input type="password" name="password_1" placeholder="Enter password">
		</div>

		<div class="input-group">
			<label>Confirm Password:</label>
			<input type="password" name="password_2" placeholder="Confirm password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register">Resgister</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
	</form>
</body>
</html>