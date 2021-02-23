<?php
// Pole vs asociativni pole, sorty, linprohled, binprohled
$pole = array();
for($i=0;$i<10;$i++)
{
    array_push($pole,rand(0,20));
    //echo $pole[$i] . "<br>";   
}
//echo "<br>";

$policko = array(   "JedenKlic" => 10,
                    "DruhyKlic" => 5,
                    "TretiKlic" => 6,
                    "NeniKlic" => 7,
                    "Utery"=> 3      );
foreach($policko as $kvetinac => $lampicka)
{
    if($kvetinac=="JedenKlic")
    {
        echo "Jsem na prvni pozici";
    }
    if($kvetinac=="DruhyKlic")
    {
        echo "Jsem na druhy pozici";
    }
    else
    {
        echo "Neco:";
    }
    echo $lampicka . "<br>";
}                    


//Volam Lin prohled a echuju na zaklade returnnuty promenny
$hledam = LinProhled($pole,15);
//CoNamVraci($hledam);
//echo $hledam;
//Pokud je string tak echuju



//Lin prohled
function Linprohled($pole,$hodnota)
{
    for($i=0;$i<count($pole);$i++)
    {
        if($pole[$i]==$hodnota)
        {
            //echo "Hodnota:" . $hodnota . " Na pozici:" . $i;
            return array("Hodnota"=>$hodnota,"Pozice"=>$i);
        }        
    }
    //echo "Nic nebylo nalezeno";
    return "Nic nebylo nalezeno";
}

function CoNamVraci($hledam)
{
    if(is_array($hledam))
    {
        foreach($hledam as $klic => $hodnota)
        {
            $hodnota = $hodnota*10;
            echo $klic . " " . $hodnota;
    
        }   
    }
    else //Asociativni pole 
    {
        echo $hledam;
    }
}

?>