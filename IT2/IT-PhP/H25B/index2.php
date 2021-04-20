<?php
session_start();
//Omezit pristup na index2.php pouze pro prihlasene uzivatele
?>
<!DOCTYPE html>
<html>
<head>
<title> Moje Komplexni stranka </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Jsem na prihlasene strance </h1>
<h2> Prave je prihlasen uzivatel: <?php echo $_SESSION['username']?> </h2>
<form action="logout.php" method="POST">
<label for="name"> Odhlaseni </label><br>
<input type="submit" name="logout" value="Odhlasit se">
</form>

</body>
</html>