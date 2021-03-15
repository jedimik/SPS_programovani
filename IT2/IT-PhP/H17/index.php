<?php
require_once("fce.php");
?>

<!DOCTYPE html>
<html>
<head>


</head>
<body>

<form method="POST" action="">
    <label for="form1">Jmeno:</label><br>
    <input type="text" id="form1" name="form1" value="<?php if(isset($_POST['form1'])){echo $_POST['form1'];} else{echo"Karel";}?>" > <br>
    <label for="form2">Vek:</label><br>
    <input type="text" id="form2" name="form2" value="<?php if(isset($_POST['form2'])){echo $_POST['form2'];} else{echo"27";}?>"><br><br>
    <input type="submit" value="Odesli" name="tlacitko">
</form>

<?php

function Soucet($a,$b)
{
    return $a+$b;
}

if(isset($_POST['tlacitko']))
{
    //var_dump($_POST['tlacitko']);

    //echo var_dump($form2);
    if(is_string($form1) || is_string($form2))
    {      
        echo "Je to string, neni to cislo";   
    }
    else
    {
        echo Soucet($form1,$form2); 
    }

}

?>

<form method="GET" action="">
    <label for="pocetradku">Zadejte pocet radku</label><br>
    <input type = "text" id = "pocetradku" name = "pocetradku">
    <input type = "submit" value = "Posli posly" name="Button">
</form>

<?php // Definujeme co se stane, pokud se zmackne tlacitko

if(isset($_GET['Button']))
{
    if(is_numeric($_GET['pocetradku']))
    {
        obrazec(intval($_GET['pocetradku']));
    }
    else
    {
        echo "Pro nakresleni je nutne napsat ciselnou hodnotu";
    }
}

// TODO: Kalkulacka, ktera vzdy vypise vysledek a nasledne s ni muzete delat dalsi operace
/*
    Zakladni mat operace +*-/
    vzdy ukazuje mezi vysledek, muzete napsat hodnotu do formulare a tlacitkem, ktere obsahuje znak (+ / * -) pak udela tu matematickou operaci
    Vaha znamky = 7 ;
*/
?>



</body>


</html>

