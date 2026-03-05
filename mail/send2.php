<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta charset="UTF-8">
<title>Mailet har skickats!</title> 
<style type="text/css"> 
body { 
    background-color:#FFFFFF; 
    font-family:Tahoma, Verdana, Helvetica, sans-serif, Arial; 
    font-size:12px; 
    color:#575757; 
} 
</style> 
</head> 
<body> 
<?php 
// IP hos personen som skickade mailet, kommer att finnas med i mailet 
$IP = $_SERVER['REMOTE_ADDR']; 
// Tid, datum och lite sådant tjaffs :) 
$week=date("w"); // Vecka 
$day=date("j"); // Dag 
$month=date("n"); // Månad 
$year=date("Y"); // År 
$hour=date("H:i:s"); // Timme, minut, sekund 
$time="$day-$month-$year klockan: $hour"; //Sätter ihop alla olika variablar till en; $time. 

//Det som jag har gjort ovan är ett relativt krångligt sätt att göra det på, men det är bara för att ni ska förstå principen. 

// Vi hämtar datan från formuläret och lägger in det i variabler 

$A1 = $_POST['namn']; 
$A2 = $_POST['email']; 
$A3 = $_POST['hemsida']; 
$A4 = $_POST['kommentar']; 

// Mailen dit mailet ska skickas, ändras helst :) 
$to = "info@hotagensminne.se"; 

// Ämnet för mailet 
$subject = "*min sida* - Kontaktformulär"; 

// Nu sätter vi ihop meddelandet :)) 

$mex = "Användarinfo:\n\n"; // variabeln $mex är det som kommer att innehålla hela meddelandet 
$mex .= "IP: " . trim(stripslashes($IP)) . "\n"; // punkten efter $mex betyder att det är en fortsättning på variabeln ovanför. 
$mex .= "Tid: " . trim(stripslashes($time)) . "\n\n"; 
$mex .= "Meddelande:\n\n"; //Skriver ut "Meddelande" i mailet 
$mex .= "Namn: " . trim(stripslashes($A1)) . "\n"; //"\n" innebär ny rad (dock inte samma som <br>, utan endast en ny rad i koden. 
$mex .= "Email: " . trim(stripslashes($A2)) . "\n"; 
$mex .= "Hemsida: " . trim(stripslashes($A3)) . "\n"; 
$mex .= "Kommentar: " . trim(stripslashes($A4)) . "\n"; 

// Headern på mailet, denna text kommer att visas överst i mailet, är bara att ändra 
$headers = "From: Mitt kontaktformul&auml;r, n&aring;gon har kontaktat mig!"; 
// Kollar att allt är ifyllt, om inte så får man en länk tillbaka 
// if (trim($A1) == "" or trim($A2) == "" or trim($A3) == "" or trim($A4) == "") { 
//    echo "Vänligen gå <a href=\"javascript:history.go(-1)\"><b>Tillbaka</b></A> och fyll i all information!"; 
// } 
// Om allt är ifyllt 
// else { 
mail($to, $subject, $mex, $headers); 
// mail($to, $subject, $mex, $headers);

    echo "Mailet har skickats."; 
// } 
?> 
</body> 
</html> 
