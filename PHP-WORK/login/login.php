<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
include('db.php');

session_start();

?>
<form action="" method="post">
<label>UserName</label>
<br><br>
<input type="text" name="username">
<br><br>

<label>Password</label>
<br><br>
<input type="password" name="password">
<br><br>


<input type="submit" name="login" value="login">
</form>
</body>
</html>

<?php

if (isset($_POST['login']))

{
	$username = $_POST['username'];
	$password = $_POST['password'];

$query = "SELECT *from shahroz_tb where username='$username' and password='$password'";

$run = mysqli_query($con,$query);
$totalrows = mysqli_num_rows($run);

if ($totalrows==1)
{
	$_SESSION['aptech']="$username";
	header ('location:dashboard.php');
}

else
	{
		echo"USERNAME OR PASSWORD IS INCORRECT";
	}
	
	
	
}


?>