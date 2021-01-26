<?php

function fce1($str,$pocet)
{
    for($i=0;$i<$pocet;$i++)
    {
        echo $str;
    }
}

$pocet = 5;
$str ="*";
//fce1($str=$str."/",$pocet);

function fce2($pocet,$str)
{
    for($i=0;$i<$pocet;$i++)
    {
        echo $str;        
    }
    //$pocet+=10;
    return $pocet;
}

//$returned_pocet = fce2("*",$pocet2=6);
//echo "<br> Celkovy pocet je:".$returned_pocet;

function fce3($str,$pocet)
{
    for($i=0;$i<$pocet;$i++)
    {
        echo $str;
        
    }
    $pocet+=10;
    return $str;
}

//$returned_pocet = fce3($ahoj="*",$pocet2=6);
//echo "<br> Ten na string je:".$returned_pocet;

function fce4($str, $pocet)
{
    $pole = array();
    for($i=0;$i<$pocet;$i++)
    {
        echo $str . "<br>";
        //$pole[$i]=$str;
        array_push($pole,$str ." " . $i);
    }
    return $pole;
}

$policko = fce4("Tohle je cool",3);
//var_dump($policko);
for($i=0;$i<sizeof($policko);$i++)
{
    echo "Na pozici: ". $i . " je hodnota: " . $policko[$i] . "<br>";
}

function hvezdicky($hodnota, $podminka, $podminka1, $podminka2, $odecet1, $odecet2)
{
    $puvodnihodnota = $hodnota;
    $value=0;
    for($i=0;$i<$podminka;$i++)
    {
        $hodnota=$puvodnihodnota;
        while($hodnota > $podminka1)
        {
            echo "*";
            $value++;
            if($hodnota>=$podminka2)
            {
                $hodnota = $hodnota - $odecet1;
            } 
            else
            {
                $hodnota = $hodnota - $odecet2;
            }
        }
    }
    return $value;
}

$celk = hvezdicky(100,3,25,45,7,6);
echo " <br> Celkem: $celk hvezdicek";
$celk = hvezdicky(200,7,32,24,2,13);
echo " <br> Celkem: $celk hvezdicek";
$celk = hvezdicky(111,6,5,35,7,8);
echo " <br> Celkem: $celk hvezdicek";

?>