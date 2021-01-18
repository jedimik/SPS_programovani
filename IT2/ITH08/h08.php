<?php //Vse, co pracuje s php musi byt v php bloku 
// Řádkový komentář
/*  Blokový komentář  */ 

// Deklarace promenne s dolarem 
$x = 8;
//$x = 'Deset';

//Typ promenne
//var_dump($x);

//Vypis promenne
echo ($x);
echo ('<h1> Muj tajny Nadpis obsahuje hodnotu:' . $x . '</h1>');
/* EOF znaci end of file */
$varX="Tohle je muj spesl text";
echo <<<E0F
    <p> To je nas novy text, hezky funguje, ze? $varX </p>
E0F;

$isTrue = true;
var_dump($isTrue);
echo ('<br>');

if($isTrue == false)
{
    echo("Je false <br>");
}
else
{
    echo("Je pravda <br>");    
}

$hledHodnota = 32;
$poleCisel = array(10,6,57,42,0,1,2,45,32,16,17,20,21);
for($i = 0; $i<sizeof($poleCisel); $i++)
{
    if($hledHodnota == $poleCisel[$i])
    {
        echo("Hledana hodnota".$hledHodnota . 'Je na pozici' . $i);
    }

}


?>
