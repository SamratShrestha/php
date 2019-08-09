<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location:login.php');
}

require 'bootstrap.php';
/* var_dump($con); */
if(isset($_SESSION['username'])){
	echo "Welcome to my website ".$_SESSION['username'];
}
else{
	$name = $_POST['username'];
	$password = $_POST['password'];
	if(($name !== $password && $name !== '' && $password !== '')){
		$q = "select name,password from login_info where name='$name' and password='$password'";
		$result = $con->query($q);
		if(!$result){
			echo "query error";
		}
		$row=($result->fetch_array());
		var_dump($row);
		if($name == $row[0] && $password == $row[1]){
			$_SESSION['username'] = $name;
			echo "Welcome to my website ".$name;
		}
		else{
			echo "<script>alert('Incorrect username or password')</script>";
			/* header('Location:login.php'); */
		}
	}
}
?>
