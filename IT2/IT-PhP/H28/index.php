<?php
//zapis do souboru pro logovani chyb.

//$prom = readfile("data.txt");
$filename ="data.txt";
//Hlavni metoda, fopen("co chceme otevrit","jakym zpusobem")

//$file4Read = fread($file,filesize($filename));
//echo $file4Read."<br>";
//echo strpos($file4Read,'Svete');
//$cut = substr($file4Read, strpos($file4Read,'Svete'),strlen($file4Read));
//echo $cut."<br>";
//$hledanystr="mas";
//$cut = substr($file4Read, strpos($file4Read,'Svete'),strpos($file4Read,$hledanystr)-strpos($file4Read,'Svete')+strlen($hledanystr));
//echo $cut."<br>";
//echo $cut;
/*
echo "Zacatek svete na:".strpos($file4Read,'Svete')."<br>";
echo "Zacetek se na:".strpos($file4Read,$hledanystr);
$cut = substr($file4Read, 5,6);
echo "<br>".$cut
*/
$file = fopen($filename,"r");
//echo fgets($file);
// E0F
$pocet=0;
while(!feof($file))
{
    if($pocet<2)
    {
        echo fgets($file) . "<br>"; // Po radcich
        $pocet++;        
    }
    else
    {
        break;
    }
    
}
fclose($file);

/*
$file=fopen($filename,"r");
while(!feof($file))
{    
    if($pocet<5)
    {
        echo fgetc($file); // Po znacich    
        $pocet++;
    }
    else
    {
        $pocet=0;
    echo "<br>"; // Po znacich
    }
}
fclose($file);
*/
$file2=fopen("data2.txt","w");
fwrite($file2,"Ahoj svete, jak se mas, ja se mam dobre");
fclose($file2);
?>