<?php




//nacitani ze souboru

$filename="soubor.txt";
/*
$celyfile=readfile("soubor.txt");
//echo $celyfile;

*/

$myfile = fopen($filename, "r") or die("Nemohu najit soubor");
//var_dump($myfile);
$celyfile = file_get_contents($filename);
//echo fread($myfile,filesize($filename)); //Cely file naraz
//JEstli se nachazi
//echo strpos($celyfile, 'ipsum'); //Pozice
//strpos  https://www.w3schools.com/php/func_string_strpos.asp
$cutted = substr($celyfile,0,strpos($celyfile,"dolor"));
$cutted2 = substr($celyfile,strpos($celyfile,"dolor"),strpos($celyfile,"elit"));
echo $cutted;
echo "<br>".$cutted2;
if (strpos($celyfile, 'Loremtt') !== false) {
    echo '<br>true';
}
else
{
    echo "<br>false";
}
//echo fgets($myfile);

//Do konce filu po radcich
/*
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
*/

// Po znacich
/*
while(!feof($myfile)) {
    echo fgetc($myfile); //zkusit BR
  }
*/


fclose($myfile);
?>