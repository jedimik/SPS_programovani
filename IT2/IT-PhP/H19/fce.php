<?php

// 1D Pole
/*
$pole1D = array(0,7,5,8,4);
echo $pole1D[2];
*/
// 2D pole klasik
/*
$pole2D = array( array(7,3,1,6,7,8), array(3,2,5,4), array(9,4,6) );
//echo $pole2D[0][1];
//echo $pole2D[2][2];

//echo sizeof($pole2D[0]);

for($i=0;$i<sizeof($pole2D);$i++)
{
    for($j=0;$j<sizeof($pole2D[$i]);$j++)
    {
        echo $pole2D[$i][$j];
    }
    echo "<br>";
}
*/
// 1D pole asoc
/*
$pole1DPetr = array("Jmeno"=>"Petr","Prijmeni"=>"Novy","Vek"=>24);
$pole1DPavel = array("Jmeno"=>"Pavel","Prijmeni"=>"Novotny","Vek"=>18);
//echo $pole1DPetr["Vek"];
// 2D pole asoc
$pole2D = array($pole1DPavel,$pole1DPetr,array("Jmeno"=>"Katka","Prijmeni"=>"Lampova","Vek"=>15));
//echo $pole2D[1]["Jmeno"];
for($i=0;$i<sizeof($pole2D);$i++)
{
    foreach($pole2D[$i] as $klic => $hodnota )
    {
        echo $hodnota . " ";
    }
    echo "<br>";
}
*/
$Petr = array("Jmeno"=>"Petr","Prijmeni"=>"Novy","Vek"=>24);
$Pavel = array("Jmeno"=>"Pavel","Prijmeni"=>"Novotny","Vek"=>18);
$Katka = array("Jmeno"=>"Katka","Prijmeni"=>"Lampova","Vek"=>15);
$atributy = array("Jmeno", "Prijmeni","Vek");
$lide = array($Petr,$Pavel,$Katka);
//Heredoc
    /*
    echo <<<KONEC
        Text
    KONEC;*/
function Tabulka($lide)
{   
    echo "<table> <tr>";
    foreach($lide[0] as $klic => $hodnota )
    {
        echo <<<END
            <th> $klic </th>
        END;
    }
    echo "</tr>";

    echo "</table>";
}
//At to nemame $lide[0] staticky / nova fce na 
//Fce prijima $lide, vraci klice v poli.

?>