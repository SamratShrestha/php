<?php
	session_start();

	$_SESSION['counter'] = 0;
	if(isset($_SESSION['counter'])){
		$_SESSION['counter'] += 1;
	}else{
		$_SESSION['counter'] +=1;
	}

	$msg = "You have visited this page ". $_SESSION['counter'];
	$msg.=" in this session.";

	echo $msg;
?>
<?php
	if(isset($_SESSION['username'])){
		/* echo "Welcome to my page"; */
		header('Location:file.php');
	}
?>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="file.php" method="post">
		<label>
		Username
		</label>
		<input type="text" name="username">
		<label>
		Password
		</label>
		<input type="password" name="password">
		<input type="submit" name="Submit" value="Submit">
	</form>

</body>
</html>
