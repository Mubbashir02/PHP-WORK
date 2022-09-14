<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<h1>You are logout</h1>


<?php
include('db.php');

session_start();
session_destroy();

?>

</body>
</html>