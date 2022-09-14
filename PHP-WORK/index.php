<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<form action=""  method="Post">

<label>Enter Name:/<label>
<br><br>
<input type="text" name="uname" required>
<br><br>
<input type="submit" name="btnsubmit" value="login">
</form>


<?php 

if (isset($_POST['btnsubmit']))
{
	$name = $_POST['uname'];
	setcookie('user',$name);
	header('location:page2.php');
}
	?>
    
   <br><br>
   <a href="page2.php">Go to page2</a>
</body>
</html>