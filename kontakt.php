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
	error_reporting(E_ALL);
	ini.set('display_errors', 1);
	}
	echo($imiee);
	?>
<p>Ogolne informacje o kontakcie itp.</p>
<p>Dzial wyslania wiadomosci</p>

<a href="monkey.html">Powrót</a>
</body>
</html>