<?php
session_start();
$_SESSION['Jmeno']="Karel";
require_once("fce.php");
echo $_SESSION['Jmeno'];
Echuj();
//var_dump($_SESSION['Jmeno'])

?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<!--
<a href="page2.php">Odkaz na novou stranku</a>
<a href="page.php">Odkaz na stranku page</a>
-->
<br><br><br><br>
<?php
$_SESSION['NazevDne'] = "Utery";

echo $_SESSION['NazevDne'];
var_dump($_SESSION['NazevDne']);
$_SESSION['NazevDne'] = "streda";
echo "<br>" .$_SESSION['NazevDne'];
unset($_SESSION['NazevDne']);
echo "<br>" .$_SESSION['NazevDne'];
$_SESSION=[];
echo $_SESSION['Jmeno'];
?>



</body>
</html>