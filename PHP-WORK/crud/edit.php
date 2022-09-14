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
$fn = $_GET['firstname'];
$ln = $_GET['lastname'];
$e = $_GET['email'];
$s = $_GET['salary'];



if(isset($_POST['updatebtn']))
{	
$id = $_POST['id'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$e = $_POST['email'];
$s = $_POST['salary'];

$query = "update `employeestb` SET firstname = '$fn', lastname = '$ln', email = '$e', salary = '$s' where id = '$id'";	
	$run = mysqli_query($con,$query);
	
	if($run)
	{
		header("location: view.php");
		
	}
	else
	{
		echo "Error!!";
	}
}

?>

<form method="post" action="edit.php">

<input type="hidden" name="id" value="<?php echo $id; ?>">

<label>First Name</label>
<br>
<input type="text" name="firstname" required value="<?php echo $fn?>">
<br>

<label>Last Name</label>
<br>
<input type="text" name="lastname" required value="<?php echo $ln?>">
<br>
<label>Email</label>
<br>
<input type="text" name="email" required value="<?php echo $e?>">
<br>
<label>Salary</label>
<br>
<input type="text" name="salary" required value="<?php echo $s?>">
<br>
<br>
<input type="submit" name="updatebtn" value="Update">


			<br><br><a href='view.php'> <h1>Data View:</h1></a>
</form>

</body>
</html>