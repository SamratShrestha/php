<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('location:welcome.php');
	}
?>
<html>
<head>
	<title>Login</title>
	</head>
	<style>
		input{
		display: block;
		margin: 10px;
		}
	</style>
	<body>
		<h1>Login</h1>
		<form action="welcome.php" method="post">
		<label>Username</label>
		<input type="text" name="username" required>
		<label>Password</label>
		<input type="password" name="password" required>
		<input type="submit" value="Login" name="submit">
		</form>
		<label><a href="register.php">Register</a></label>
	</body>
</html>
