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

if(isset($_SESSION['aptech']))

{
echo "Welcome".$_SESSION['aptech'];	
}

else

{
	header ('location:login.php');
	
}



?>
</body>
</html>