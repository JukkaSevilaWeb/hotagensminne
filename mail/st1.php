<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$IP = $_SERVER['REMOTE_ADDR']; 
$to      = 'info@hotagensminne.se';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
   'Reply-To: webmaster@example.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers, $IP);
?> 


</body>
</html>
