<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php


include ('db.php');


if (isset ($_POST['submitbtn']))


{
	
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$e = $_POST['email'];
	$s = $_POST['salary'];
	

$query = "insert into employeestb (firstname,lastname,email,salary) values ('$fn','$ln','$e','$s')";


$run = mysqli_query ($con,$query);


if ($run)

{
	echo"Data Inserted";
	echo"<br>";
	echo"<a href='home.php'> <h1>back to home</h1></a>";
}
else
{
	echo"Connection Not Established";
}

}
?>
</body>
</html>