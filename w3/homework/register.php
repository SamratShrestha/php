<html>
	<head>
	<title>Register</title>
	</head>
	<style>
	input[type=text],input[type=password],input[type=email],input[type=submit],input[type=number]{
			display:block;
			padding:4px;
		}
	input{
		margin:5px;
		}
	</style>
	<body>
		<h1>Register</h1>
		<form action="register.php" method="post">
		<label>Username</label>
		<input type="text" name="username" required>
		<label>Password</label>
		<input type="password" name="password" required>
		<label>Repassword</label>
		<input type="password" name="repassword" required>
		<label>Email</label>
		<input type="email" name="email" required>
		<label>Age</label>
		<input type="number" name="age" required>
		<label>Gender:</label>
		<input type="radio" name="gender" value="male" required>Male
		<input type="radio" name="gender" value="female" >Female
		<input type="submit" name="submit" value="submit">
		</form>
		<label><a href="login.php">Login Page</a></label>
	</body>
</html>
<?php
	require 'bootstrap.php';
	if(isset($_POST['submit'])){
		if($_POST['password'] === $_POST['repassword']){
		$name = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];

		$q = "insert into login_info values('$name','$password','$email','$age','$gender')";
		$query_result = $con->query($q);
		if(!$query_result){
			echo "query failed";
		}
		$con->close();
		}else{
			echo "Both password don't match";
		}
	}


?>
