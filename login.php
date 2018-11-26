<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration System with Php and mysql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form action="login.php" method="post">
																				<!-- display validation errors -->
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>User_Name:</label>
			<input type="text" name="username" placeholder="Enter your name">
		</div>
		

		<div class="input-group">
			<label>Password:</label>
			<input type="password" name="password_1" placeholder="Enter password">
		</div>

		
		<div class="input-group">
			<button type="submit" class="btn" name="login">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>