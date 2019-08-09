<?php


	$username = "admin";
	$password = "admin";

	$x = $_POST['username'];
	$y = $_POST['password'];

	session_start();
	if(isset($_SESSION['username'])){
		echo "Welcome to home page";
	}
	else{

		if($x==$username && $y == $password){
			echo "Welcome to home page";
			$_SESSION['username'] = $x;
		}else{
			echo "username or password is wrong";
			echo "<script> location.href='index.php';
			</script>";
			header('Location:index.php');

		}
	}

?>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<ul>
		<li>
			<a href="logout.php">Logout</a>
		</li>
		<li>
			<a href="signup.php">Signup</a>
		</li>
		<li>
			<a href="table.php">Table</a>
		</li>
	</ul>
</body>
</html>
