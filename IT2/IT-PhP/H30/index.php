<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="POST" action="">
<label for="filename"> Prace se souborem Vytvaret novy soubor </label><br>
<input type="text" name="filename"><br>
<textarea rows="5" cols="50" name="textfield"></textarea> <br>
<input type="submit" name="send" value="Vytvor">
</form>

<form method="POST" action="">
<label for="filename"> Prace se souborem Pridej k existujicimu nebo zaloz novy </label><br>
<input type="text" name="filename"><br>
<textarea rows="5" cols="50" name="textfield"></textarea> <br>
<input type="submit" name="send2" value="Vytvor">
</form>

<form method="POST" action="">
<label for="filename" style="font-size:35px; font-weight:BOLD;"> Prace se souborem </label><br>
<input type="text" name="filename"><br>
<textarea rows="5" cols="50" name="textfield"><?php if(isset($_SESSION['load'])){echo $_SESSION['load'];} ?></textarea> <br>
<input type="submit" name="create" value="Vytvor">
<input type="submit" name="append" value="Pridej">
<input type="submit" name="load" value="Nacti">
</form>

<?php
/*
$value="";
$value=$_POST['filename'] ?? 'ahoj';
echo $value;
*/
?>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['send']) || isset($_POST['create']))
    {
        work($_POST['filename'],'w',$_POST['textfield']);
    }

    if(isset($_POST['send2']) || isset($_POST['append']))
    {
        work($_POST['filename'],'a',$_POST['textfield']);
    }
    if(isset($_POST['load']))
    {
        work($_POST['filename'],'r');
    }
}

function work($strnazev,$metoda,$data=null)
{
    // ?? Bud ma prvni cast hodnotu, pokud ne, tak to druhe
    // Zkontroluje pred otazniky, a podle toho da hodnotu
    if($strnazev=="")
    {
        $strnazev="soubor.txt";
    }
    else if(strpos($strnazev,".txt"))
    {
        // jdi dal
    }
    else
    {
        //k $strnazev pridej (stringy spojujeme teckou) .txt
        $strnazev.=".txt";
    }
    $file=fopen($strnazev,$metoda);
    //Pro read
    if($metoda=="r")
    {
        $_SESSION['load']=fread($file,filesize($strnazev));
        fclose($file);
    }
    else // Pro append a write
    {
        fwrite($file,$data);
        fclose($file);
    }
}

/* Nestihli jsme - Proc Session a kam ji davame v textarea
    Upravit value v session pro nazev souboru pri loadu
    A cele zopakovat
*/


?>