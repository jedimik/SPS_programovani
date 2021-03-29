<?php

$pole=array();
for($i=0;$i<5;$i++)
{
    array_push($pole,rand(0,10));
}

for($i=0;$i<sizeof($pole);$i++)
{
        echo $pole[$i]." ";
}

$hodnota="neni";

if(isset($_POST['send']))
{
    for($i=0;$i<sizeof($pole);$i++)
    {
        if($pole[$i]==$_POST['field'])
        {
            $hodnota="je";
            // $echo "Hodnota tam je"
        }
    }
}

function Echuj($hodnota)
{
    echo "Hodnota tam: $hodnota";
}


function Obrazec($radky)
{
    $pole = array(); #1D pole
    $pole2 = array();
    for($i=0;$i<$radky;$i++)
    {
        for($j=0;$j<$radky/2;$j++)
        {
           if($i%2==0)
           {
               if($j%2==0)
               {
                   $prom="*";
               }
               else{
                   $prom="/";
               }
           }
           else
           {
                if($j%2==0)
                {
                    $prom="*";
                }
                else
                {
                    $prom=$j;
                }
           }       
           array_push($pole2,$prom);
        }
        array_push($pole,$pole2);
        $pole2 = array();
    }

    for($i=0;$i<sizeof($pole);$i++)
    { 
        for($j=0;$j<sizeof($pole[$i]);$j++)
        {
            echo $pole[$i][$j];
        }
        echo "<br>";
    }
}



?>