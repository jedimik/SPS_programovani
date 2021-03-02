<?php

$znamkyBedrich=array(
    "Matika" => 3,
    "CeskyJazyk" => 2,
    "Informatika" => 1,
    "Dejepis" => 4
);

$znamkyPetr=array(
    "Matika" => 4,
    "CeskyJazyk" => 1,
    "Informatika" => 5,
    "Dejepis" => 3
);

$policko = array(   
    "JedenKlic" => 10,
    "DruhyKlic" => 5,
    "TretiKlic" => 6,
    "NeniKlic" => 7,
    "Utery"=> 3      
);
// Dynamicky definovane
$predmety=array("Matika","CeskyJazyk","Informatika","Dejepis","Telocvik");
$predmety1=array("Matika","Zemepis","Dejepis","ZSV");

$znamkyKarel=VytvorZnamky($predmety,array(2,3,1,4,5));
//$znamkyLibor=VytvorZnamky(/*$predmety,*/array(3,4,3,5,3));
$znamkyPetra=VytvorZnamky($predmety1,array(1,3,3,2));
CtiPole($znamkyKarel);
echo "<br>";
//CtiPole($znamkyLibor);
CtiPole($znamkyPetra);



//CtiPole($znamkyLibor);

function VytvorZnamky($predmety,$znamky)
{
    //Staticky definovane
    //$predmety=array("Matika","CeskyJazyk","Informatika","Dejepis","Telocvik");
    //Sizeof nebo count
    for($i=0;$i<sizeof($predmety);$i++)
    {
       $znamkystudent[$predmety[$i]]=$znamky[$i];
    }
    return $znamkystudent;
}

function CtiPole($pole)
{
    foreach($pole as $key => $value)
    {
        echo "Z predmetu: " . $key . ", ma student znamku: " . $value . "<br>";
    }
}



?>