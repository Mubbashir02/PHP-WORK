<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
include ('db.php');

$id = $_GET['id'];


$query = "delete from employeestb where id = '$id'";	
	$run = mysqli_query($con,$query);
	
	if($run)
	{
		header("location: view.php");
		
	}
	else
	{
		echo "Error!!";
	}


?>

</body>
</html>