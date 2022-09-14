<?php
include('db.php');
session_start();

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<h1>SignUp Here:</h1>
<br><br>
<label>UserName</label>
<br><br>
<input type="text" name="username">
<br><br>

<label>Password</label>
<br><br>
<input type="password" name="password">
<br><br>

<input type="submit" name="signup" value="signgup">
</form>
<br><br>

</body>
<?php
include('db.php');

if(isset($_POST['signup']))

{   $username = $_POST['username'];
    $password = $_POST['password'];

$query = "INSERT INTO shahroz_tb (username,password)
VALUES
        ('$username','$password')";

$run = mysqli_query($con,$query);

if  ($run)
{
	header('location:login.php');
}

else

{
	echo "Something is wrong bro!";
}
}
?>



</html>