<?php
	$name = $_GET['name'];
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$address = $_GET['address'];
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <table>
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Address</th>
	</tr>
	<tr>
	<td>
		<?php echo $name; ?>
	</td>
	<td>
		<?php echo $age; ?>
	</td>
	<td>
		<?php echo $gender; ?>
	</td>
	<td>
		<?php echo $address; ?>
	</td>
	</tr>
</table>
</body>
</html>
