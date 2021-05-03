<?php

$neco=checkPassword("Ah0j#JakJe");
foreach($neco as $o)
{
    echo $o . "<br>";
}
function checkPassword($pwd) 
{
    $errors=array();

    if (strlen($pwd) < 8) {
        $errors[] = "Heslo je kratke!";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
        $errors[] = "Heslo musi obsahovat alespon jedno cislo!";
    }
    if(!preg_match('/[A-Z]/',$pwd))
    {
        $errors[] = "Heslo neobsahuje velka pismena";
    }

    if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $pwd)) {
        $errors[] = "Heslo musi obsahovat alespon jeden specialni znak!";
    }     

    return $errors;
    //https://www.w3schools.com/php/func_regex_preg_match.asp
}

?>