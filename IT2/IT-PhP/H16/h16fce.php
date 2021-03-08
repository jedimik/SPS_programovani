<?php
function Obrazek3($pocetRadku)
{
    for($i=0;$i<$pocetRadku;$i++)
    {
        for($j=0;$j<$pocetRadku/2;$j++)
        {
            // || == or , && == and
            if($i==0 || $i==$pocetRadku-1 || $j==0 || $j==$pocetRadku/2-1)
            {
                echo "$";
            }
            else
            {
                echo "#";
            }
        }
        echo "<br>";        
    }

}

//Obrazek 10
// Sudy radek - sudem sloupci == *, lichy sloupec == /
// Lichy radku stoupajici posloupnost (pocet sloupcu)

function Obrazek10($pocetRadku)
{
    for($i=0;$i<$pocetRadku;$i++)
    {
        for($j=0;$j<$pocetRadku/2;$j++)
        {
            if($i%2==0) // sudy radek
            {
                if($j%2==0) // sudy sloupec
                {
                    echo "#";
                }
                else // lichy sloupec
                {
                    echo "$";
                }
            }
            else // lichy radek
            {
                echo $j /*+1*/; // Jednicku pridavam pouye pro efekt
            }
        }
        echo "<br>";
    }
}

function Obrazek61($pocet)
{
    for($i=0;$i<$pocet;$i++)
    {
        for($j=0;$j<$pocet/2;$j++)
        {
            if($i%2==0)
            {
                echo $j;
            }
            else
            {
                echo ($j-$pocet/2+1)*-1;
            }
        }
        echo "<br>";
    }
}

function Obrazek62($pocet)
{
    for($i=0;$i<$pocet;$i++)
    {
            if($i%2==0)
            {
                for($j=0;$j<$pocet/2;$j++)
                {
                    echo $j;
                }
            }
            else
            {
                for($j=$pocet/2;$j>0;$j--)
                {
                    echo $j-1;
                }
            }

        echo "<br>";
    }
}

function WriteField3($NumberOfLine)
{
 
    for($i = 0; $i < $NumberOfLine; $i++)
    {
        $Temp = $NumberOfLine/2;
 
        for($j = 0; $j < $NumberOfLine/2; $j++)
        {
            $Temp2 = $j;
 
            if ($i%2 == 0)
                echo $Temp2;
            else
                echo $Temp;
 
            $Temp --;
        }
        echo "<br>";
    }
}

?>