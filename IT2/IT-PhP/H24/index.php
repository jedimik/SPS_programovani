<?php
//session_start();
//session_unset();
//Vyukova cookina otestujeme ['vyuka']
// echo $_COOKIE['vyuka'];

//phpinfo(); 
//Ulozeni pro konkretni stranky
/*
echo $_COOKIE['pocitadlo'];
// chrome://settings/cookies/detail?site=localhost
//C:\xampp\tmp
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
$x=10;
$GLOBALS['z'] =$x;
echo "<br>".$z;

//Rozdil mezi Global vs Superglobal variable
// Get Post Request
// https://stackoverflow.com/questions/1924939/among-request-get-and-post-which-one-is-the-fastest

function Secti($a,$b){
    return $a+$b;
}
$GLOBALS['promA'] =15;
$GLOBALS['promB'] =15;

function Secti2()
{
    return $GLOBALS['promA']+$GLOBALS['promB'];
}

echo "<br> Soucet puvod:".Secti(10,5);
echo "<br> Soucet novy:".Secti2(); 
echo $promA;
*/
// Sesnu, cookie, global / vsechny vypiste funkci
$_SESSION['sesna']="Ahoj svete";
setcookie("cokina","Hello World",time()+120);
$GLOBALS['globalka']="Ahoj world";
$GLOBALS['globA']=25;
$a=10;
vypis($_SESSION['sesna']);
vypis($_COOKIE['cokina']);
vypis($globalka);
vypis($GLOBALS['globalka']);
vypis(Secti(5));
vypis($globA);
echo "<br>".$_SERVER['PHP_SELF'];

function vypis($objekt)
{
    echo "<br>".$objekt;
}

function Secti($b){

    return $GLOBALS['globA']+$b;
}

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['send'])) //form 1 s post
    {
    $value=$_REQUEST['name1'];
    $value2=$_REQUEST['name2'];
    echo "<br> Hodnota1 je rovna: ".$value.". Hodnota2 je rovna: ".$value2;
    }
    elseif(isset($_POST['send2'])) // form 2 s post
    {
        $value=$_REQUEST['name1'];
        $value2=$_REQUEST['name2'];
        echo "<br> Hodnoticka1 je rovna: ".$value.". Hodnoticka2 je rovna: ".$value2;
    }
}
elseif($_SERVER['REQUEST_METHOD']=="GET")
{
    $value=$_REQUEST['name1'];
    $value2=$_REQUEST['name2'];
    echo "<br> Hodnota1 Getu je rovna: ".$value.". Hodnota2 Getu je rovna: ".$value2;
}
//Get rve, aniz by bylos tisknute tlacitko
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!-- Form 1 s post -->
<form action="" method="POST">
<input type="text" name="name1"><br>
<input type ="text" name="name2"><br>
<input type="submit" name="send" value="Odesli">
</form>
<!-- Form 2 s post -->
<form action="" method="POST">
<input type="text" name="name1"><br>
<input type ="text" name="name2"><br>
<input type="submit" name="send2" value="Odesli">
</form>

<form action="" method="GET">
<input type="text" name="name1"><br>
<input type ="text" name="name2"><br>
<input type="submit" name="send" value="Odesli">
</form>

</body>
</html>




