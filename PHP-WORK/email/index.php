<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<form method="post" action="">

<label>Enter your name:</label>
<br><br>
<input type="text" name="name" placeholder="Enter Name" required>
<br><br>
<label>Enter your email:</label>
<br><br>
<input type="text" name="email" placeholder="Enter email address" required>
<br><br>

<select name="subject" required>
<option value="">Select Subject</option>
<option value="Feedback">Feedback</option>
<option value="Sugesstion">Suggestion</option>
<option value="Complain">Complain</option>
</select>
<br><br>
<textarea name="message" required placeholder="Enter your message" col="30" rows="10"></textarea>
<br><br>
<input type="submit" value="send" name="btnsubmit">
</form>

<?php

if(isset($_POST['btnsubmit']))
{
	$to = "faizanmuhammad747@gmail.com";
	$name = $_POST['name'];
	$sender = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if (mail ($to,$subject,$message,$sender))
{
	echo "email has been sent.....";
	}
	
	else
	{
		echo "Email sending failed....";
	}
}
?>

</body>
</html>