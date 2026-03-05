<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="UTF-8">
<title>Kontakta oss</title> 
<style type="text/css"> 
body { 
    background-color:#FFFFFF; 
    color:#575757; 
    font-family:Tahoma, Verdana, Helvetica, sans-serif, Arial; 
    font-size:12px; 
} 
input,textarea { 
    background-color:#7F7F7F; 
    border:#333333 solid thin; 
    font-family:Tahoma, Verdana, Helvetica, sans-serif, Arial; 
    font-size:10px; 
    color:#EFEFEF; 
} 
</style> 
</head> 
<body> 
<form action="send2.php" method="post"> 
Namn 
<br /> 
<input type="text" name="namn" size="30" /> 
<br /> 
Hemsida 
<br /> 
<input type="text" name="hemsida" size="30" /> 
<br /> 
Email 
<br /> 
<input type="text" name="mail" size="30" /> 
<br /> 
Kommentar 
<br /> 
<textarea name="kommentar" rows="15" cols="40"></textarea> 
<br /> 
<br /> 
<input type="submit" name="send" />&nbsp;&nbsp;<input type="reset" name="reset" /> 
</form> 
</body> 
</html> 
