<?php

$veta="Ahoj mame svete! Jak se mame? Ja dobre mame";
$prom = strpos($veta,"Ja");
//var_dump($prom);
//echo substr($veta,5,5);
//Vypsat substring ktery zacina od 0 a jde to mame.
//echo substr($veta,0,strpos($veta,"mame"));
$strForFind="mame";
$substring = substr($veta,strpos($veta,$strForFind)+strlen($strForFind));
//echo $substring;

// For cyklus ktery projde cely dany string po jednom pismeni do delky stringu (strlen) po jednom kroce
// echuj pismeno na novy radek

echo "Ofiko se nachazi na:".strpos($veta,$strForFind)."<br>";
//echo "Ofiko se nachazi na:".strrpos($veta,$strForFind)."<br>"; //pro posledni vyskyt 
$index=VratPoziciStringu($veta,$strForFind);

//Vlastni implementace strpos
// Bud jako 3 fce s prvnim, poslednim, vsemi vyskyty, nebo definovano pomoci argumentu
function VratPoziciStringu($velkyString,$hledanyString)
{
    for($i=0;$i<strlen($velkyString);$i++)
    {
        if($hledanyString[0]==$velkyString[$i] && strlen($hledanyString)+$i <= strlen($velkyString))
        {
            for($j=0;$j<strlen($hledanyString);$j++)
            {
                if($hledanyString[$j]==$velkyString[$i+$j])
                {
                    if($j==strlen($hledanyString)-1)
                    {
                        //Pokud existuje
                       $index=$i;
                       break;
                    }
                }
                else
                {
                   break; 
                }
            }            
        }
    }
    if(isset($index))
    {
        echo "Hodnota: $hledanyString se nachazi v stringu: $velkyString a je na pozici: $index";
        return $index;
    }
    else
    {
        echo "Nic jsme tam nenasli";
        return false;
    }   
}

?>
