<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="UTF-8">
	<title>Monkey</title>
</head>
<body>
<?php

include("config.php");
	if(!$conn){
		echo("kupa");
	error_reporting(E_ALL);
	ini.set('display_errors', 1);
	}
	
	//Pobieram dane od uzytkownika
if(isset($_POST['imie']) && isset($_POST['mail']) && isset($_POST['wiadomosc']) && isset($_POST['adresat'])){
    $imie_klienta = $_POST['imie'];    
	$mail_klienta = $_POST['mail']; 
	$wiadomosc_klienta = $_POST['wiadomosc'];
	$do_kogo = $_POST['adresat'];
	}
	
	
	
	//dodaje wiadomosc do bazy danych
	$ins = "INSERT INTO $do_kogo (imie,wiadomosc,mail) 
	VALUES ('$imie_klienta','$wiadomosc_klienta','$mail_klienta')";
	$wysyla = mysqli_query($conn,$ins);
	
	if (!$wysyla){
		               die('Could not enter data: ' . mysqli_error($conn));

		            }
	
	mysqli_close($conn); 
?>
<p>Wiadomość została wysłana</p>
<a href="kontakt.php">Powrót</a>
</body>
</html>