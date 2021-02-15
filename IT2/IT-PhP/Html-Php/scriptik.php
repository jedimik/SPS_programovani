<?php

if(isset( $_POST['submit']))
{
    $varA = $_POST['A'];
    $varB = $_POST['B'];
    $varC = $_POST['C'];
    $vysledek=fceABC($varA,$varB,$varC);
    echo $vysledek;
}


//Fce pro ((A*B)-(C*A))*A
function fceABC($a,$b,$c)
{
    /*
    $vysledek = Nasobeni($a,$b);
    $vysledek = Odecet($vysledek,$c);
    */
    $vysledek = Odecet(Nasobeni($a,$b) , $c);
    return $vysledek;
}
// Fce pro ((A * B ) - ( C * A )) * A
// Soucin odectu dvou soucinu

function fceABC1($a,$b,$c)
{
    $vysledek = Nasobeni(Odecet(Nasobeni($a,$b),Nasobeni($c,$a)),$a);
    $prom1 = Nasobeni($a,$b);
    $prom2 = Nasobeni($c,$a);
    $vysledek = Odecet($prom1,$prom2);
    $vysledek = Nasobeni($vysledek,$a);
    return $vysledek;
}

//Funkce pro soucet - vraci soucet a echuje ho prostrednictvim Fce

function Soucet($prom1,$prom2)
{
    $vysledek = $prom1+$prom2;
    return $vysledek;
}

//Fce pro odecet, nasobeni, deleni.
function Odecet($prom1,$prom2)
{
    $vysledek = $prom1-$prom2;
    return $vysledek;
}

function Nasobeni($prom1,$prom2)
{
    $vysledek = $prom1*$prom2;
    return $vysledek;
}

function Deleni($prom1,$prom2)
{
    $vysledek = $prom1/$prom2;
    return $vysledek;
}
//Funkce pro mnohonasobny soucet



?>