<?php

if(isset($_POST['plus']))
{
    $cislo1 = Soucet($_POST['cislo1'],$_POST['cislo2']);
}
elseif(isset($_POST['minus']))
{
    $cislo1 = Minus($_POST['cislo1'],$_POST['cislo2']);
}
elseif(isset($_POST['nasobit']))
{
    $cislo1 = Nasobit($_POST['cislo1'],$_POST['cislo2']);    
}
elseif(isset($_POST['delit']))
{
    $cislo1 = Delit($_POST['cislo1'],$_POST['cislo2']);    
}
elseif(isset($_POST['reset']))
{
    ResetCislo();  
}

function Soucet($a,$b)
{
    return $a + $b;
}

function Minus($a,$b)
{
    return $a - $b;
}

function Nasobit($a,$b)
{
    return $a * $b;
}

function Delit($a,$b)
{
    return $a / $b;
}

function ResetCislo()
{
    unset($cislo1);
}

?>