<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php

if(isset ($_COOKIE['user']))
{
	echo"welcome".$_COOKIE['user']. "To Online Store";
}

else
{
header('location:index.php');
}
?>

</body>
</html>