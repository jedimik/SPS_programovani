<?php
// function, nazev fce,argumenty - zde prazdna mnozina,
// Funkce bez argumentu bez návratové hodnoty
function mojeFce()
{
    //echo "Ahoj";
    $a = 10;
    $b = 5;
    $c = 5*10;
    echo $c;
}
echo("<h2> Funkce bez argumentu bez návratové hodnoty </h2>");
mojeFce();
echo "<br>";
// Funkce s argumentem bez návratové hodnoty
function mojeFce2($str)
{
    echo $str;
}
function mojeFce2A($a,$b,$c)
{
    echo $a . "<br>";
    echo $b. "<br>";
    echo $a+$b. "<br>";
    echo $c. "<br>";
}
echo("<h2> Funkce s argumenty bez návratové hodnoty </h2>");
mojeFce2A($nejakapromenna=10,$b=5,$c=15);
// Funkce bez argumentu s návratovou hodnotou
echo("<h2> Funkce bez argumentu s návratovou hodnotou </h2>");
function mojeFce3()
{
    $prom1 = 10;
    $prom2 = 5;
    $promcelk = $prom1 + $prom2;
    return $promcelk;
}

$promenna = mojeFce3();
echo $promenna;

echo("<h2> Funkce s argumenty a návratovou hodnotou </h2>");
function soucet($a,$b)
{
    $promCelk = $a + $b;
    return $promCelk;
}
$prom2 = 5;
$vyslednysoucet = soucet(10,$prom2);
echo $vyslednysoucet;

/*
for($i=0;$i<5;$i++)
{
    echo nl2br("*\n");
}

for($i=0;$i<6;$i++)
{
    echo nl2br("Ahoj\n");
}

for($i=0;$i<7;$i++)
{
    echo nl2br("Haf\n");
}

for($i=0;$i<4;$i++)
{
    echo nl2br("Retezec\n");
}
*/


?>