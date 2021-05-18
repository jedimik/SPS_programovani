<?php

$pole2D = array(array(9,7,3,4,5),array(1,2,6,7,8),array(10,11,12,13,14),array(15,1,21,17,13),array(1,24,15,1,18));
$poleUprav=UpravPole($pole2D);
$poleUprav2=UpravPole2($pole2D);
VypisPole($pole2D);
echo "<br><br>";
VypisPole($poleUprav2);
echo "<br><br>";
VypisPole($poleUprav);
echo "<br><br>";
VypisPole(nove($pole2D));




function UpravPole($pole)
{
    for($i=0;$i<sizeof($pole);$i++)
    {
        for($j=0;$j<sizeof($pole[$i])-1;$j++)
        {
            $pole[$i][$j]=$pole[$i][$j]+$pole[$i][$j+1];
        }
    }

    return $pole;
}

function UpravPole2($pole)
{
    $pole2=$pole;
    //$novepole=array();
    for($i=sizeof($pole)-1;$i>=0;$i--)
    {
        $subpole=array();
        for($j=sizeof($pole[$i])-1;$j>=0;$j--)
        {
            $pole2[(sizeof($pole2)-1)-$i][(sizeof($pole2[$i])-1)-$j]=$pole[$i][$j];
            //array_push($subpole,$pole[$i][$j]);
        }
        //array_push($novepole,$subpole);
    }
    return $pole2;
    //return $novepole;
}

function VypisPole($pole)
{
    for($i=0;$i<sizeof($pole);$i++)
    {
        for($j=0;$j<sizeof($pole[$i]);$j++)
        {
            echo " ".$pole[$i][$j]." ";
        }
        echo "<br>";
    }

}

function nove($pole)
{
    $polenew=$pole;
    for($i=4;$i>=0;$i--)
    {
        for($j=4;$j>=0;$j--)
        {
        //echo $pole[$i][$j];
            $velikost=4;
            $a=$velikost-$i;
            $b=$velikost-$j;
            $polenew[$a][$b]=$pole[$i][$j];
            //echo $pole[$a][$b];
        }
       // echo "<br>";
    }
    return $polenew;
}


?>