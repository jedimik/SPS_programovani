<?php
session_start();

echo $_SESSION['Jmeno'] . ' Jsem na page';
//var_dump($_SESSION['Jmeno'])
require_once("fce.php");
Echuj();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<a href="index.php">Odkaz na stranku puvodni</a>
<br>
<a href="page2.php">Odkaz na stranku page2</a>
</body>
</html>