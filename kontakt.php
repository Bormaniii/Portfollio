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
	ini_set('display_errors', 1);
	}
	$sql = 'SELECT Imie FROM administratorzy'; 
	$admini = mysqli_query($conn,$sql);
	
	?>
<p>Ogolne informacje o kontakcie itp.</p>
<p>Dzial wyslania wiadomosci</p>
<form method="post" action="wysylka.php">
Adresat:<br>
<?php while($tablica = mysqli_fetch_assoc($admini)){?>
<input type="radio" name="adresat" value="<?php echo $tablica['Imie'] ?>"><?php echo $tablica['Imie'] ?>
<?php } ?>
<br>
Imię:<br>
<input type="text" name="imie">
<br>
E-mail:<br>
<input type="text" name="mail">
<br>
Wiadomość:<br>
<textarea name="wiadomosc" rows="5" cols="40"></textarea>
<br>
<input type="submit" name="send" value="Wyślij">
</form>

<a href="monkey.html">Powrót</a>
<?php mysqli_close($conn); ?> 
</body>
</html>