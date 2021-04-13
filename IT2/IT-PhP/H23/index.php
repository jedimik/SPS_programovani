<?php
require_once("fce.php");
session_start();
$_SESSION['sesna']="Ahoj";
// Set cookie (nazev,hodnota,cas);
//setcookie("cokina","tohle je cookies",time() + 60 ); 
//+(7*24*60*60)
$value=0;
if(isset($_COOKIE['pocitadlo']))
{
    $value=$_COOKIE['pocitadlo'];
    $value++;
    setcookie("pocitadlo",$value,time()+60);
}
else
{
    $value=1;
    setcookie("pocitadlo",$value,time()+60);
}
DoReload();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
    //$_COOKIE
    echo "<h1> ${_SESSION['sesna']} </h1>";
    //echo "<h2> ${_COOKIE['cokina']} </h2>";
    echo "Pocitadlo:" . $_COOKIE['pocitadlo'];
    echo $_COOKIE['vyuka'];
    // Tlacitko ve formulari - pricemz po jeho stisknuti zruste cookinu.
?>

<form method="POST" action="">
<input type="submit" name="send" value="Smaz">
</form>

</body>


</html>