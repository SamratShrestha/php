<html>
<head>
	<title>Login</title>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Gender</th>
		</tr>
<?php
	$con =new mysqli("localhost","niit","","php");
	$q = "select * from info";
	$result = $con->query($q);
	print_r($result);
	while($row=($result->fetch_array())){
		echo "<tr>";
			echo "<td>$row[0]</td>";
			echo "<td>$row[1]</td>";
			echo "<td>$row[2]</td>";
			echo "<td>$row[3]</td>";
		echo "</tr>";
	}

?>
	</table>
</body>
</html>
