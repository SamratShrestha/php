<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="signup.php" method="post">
		<label>Name:</label>
		<input type="text" name="name">
		<label>Age:</label>
		<input type="text" name="age">
		<label>Email:</label>
		<input type="email" name="email">
		<label>Gender:</label>
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female
		<input type="submit" name="submit">
	</form>
</body>
</html>


<?php
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];

	$con = new mysqli("localhost","niit","","php");

	if($con->connect_errno){
		echo "Cannot connect to database".$con->connect_errno;
	}

	$q = "insert into info values('$name','$age','$email','$gender')";
	$con->query($q);
	if(!$con->query($q)){
		echo "query cannot be executed";
	}

?>
