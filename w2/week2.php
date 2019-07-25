<?php
$name = "Manish";
$age = 20;
$age =20;
$double =20.4;
$neg = -20;

//contatination using .
//$ is used to define variable, array
echo "name is:".$name;
echo "<br>";
echo "age is $age";
echo "<br>";
echo "double is $double";
echo "<br>";
echo "negative is $neg";
echo "<br>";

//declaring array
$array1 = array("Manish",20,"Kathmandu Nepal",true);
echo $array1;
echo "<br>";
$array2 = ["Ram",21,"Kathmandu Nepal",false];
echo "My name is $array2[0]. I am $array2[1] years old. I live in $array2[2].";
echo "<br>";

//special functions
$str = "Samrat Shrestha";
echo "Length of Samrat Shrestha is ".strlen($str);
echo "<br>";
echo "string to uppercase ".strtoupper("string");
echo "<br>";
echo "substr function on 'Samrat Shrestha'".substr($str,3,7);
echo "<br>";
echo str_replace("a","b",$str);
echo "<br>";

//number functions
echo "Absolute value of -100 is ".abs(-100);
echo "<br>";
echo "2 power 4 is ".pow(2,4);
echo "<br>";
echo "minimum of 1,2,3 is ".min(1,2,3);
echo "<br>";

//Associative array
//Stores callue in key, value pair

$age = array(
	"Manish" => 20,
	"Dinesh" => 24,
	"Rahul" => 21,
	"Jasmine" => 19,
	"Raj" => 20
);

echo "Age of Manish is ".$age["Manish"];

?>
<html>
	<head>
	</head>
	<body>
		<form action="class2.php" method="post">
		<label>Name</label>
		<input type="text" name="name">
		<label>Age</label>
		<input type="text" name="age">
		<input type="submit" value="Submit" name="submit">
		</form>
	</body>
</html>

<?php
	$name = $_POST["name"];
	$age = $_POST["age"];
	echo "Name is $name."."<br>"."Age is $age.";
?>
