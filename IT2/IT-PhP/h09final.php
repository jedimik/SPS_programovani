<?php
//Kazdy blok ukoncujeme strednikem
/* if, elseif, else  switch*/
echo("<h1> If, else if, else, switch. Apostrof vs uvozovka </h1>");
$var=12;
$var2=12;
//$var2=6;
if($var >= 10)
{
    echo nl2br("Promenna je vetsi rovno 10\n");
}
elseif($var == 12)
{
    echo nl2br("Promenna je rovna 6\n");
}
elseif($var2>=10)
{
    echo nl2br("Promenna2 je vetsi rovno 10\n");
}
if($var2 == 12)
{
    echo nl2br("Promenna je rovna 12\n");
}
else
{
    echo nl2br("Promenna nevyhovuje danym podminkam\n");  
}

echo nl2br("Promenna1 ma hodnotu $var".'\n'."\n");
echo nl2br('Promenna1 ma hodnotu $var\n');

$strProm = "\n Promenna ma hodnotu";
$strProm2 = " $var \n";
//echo (var_dump($strProm2));
echo nl2br($strProm . $strProm2);

$barva = "red";
switch ($barva)
{
    case 'red':
        echo nl2br("Barva je cervena\n"); 
        if($var2>10)
        {
            echo nl2br("Promenna je vetsi nez 10\n");
        } 
    case 'red':
        echo nl2br("Barva je modra\n");
        break;
    case 'green':
        echo nl2br("Barva je zelena\n");
        break;
}
echo("<h1> Cykly - For loop, While, Do-while, For each </h1>");
//For
echo("<h2> For loop </h2>");
for($i=0;$i<5;$i++)
{
    echo nl2br("*\n");
}
// 0 1 2 3 4 5 6 7 8 9 
//(1;10) <1;10>
echo("<h2> While loop </h2>");
//$var2=10;
while($var2>10) //var2 je 12
{
    echo nl2br("*\n");
    $var2--;
    /*
    $var2=$var2/2;
    var_dump($var2);
    settype($var2,"integer")
    */
    //$var2 = $var2-1;
}
echo("<h2> Do while loop </h2>");
$var2=10;
do{
    echo nl2br("*\n");
    $var2--;
}while($var2>5);
echo ($var2);
echo("<h2> Pole, Asociativni pole, Foreach </h2>");
$auto = array("medour","oplik","trabos","skodovka","hyundajeee");
echo($auto[0] . " " . $auto[4] . "<br>");
for($i=0;$i<sizeof($auto);$i++)
{
    echo nl2br($auto[$i] . " \n");
}
echo("<br>");
echo("<h2> Asociativni pole, Foreach </h2>");
$auto2 = array("medour"=> "benzin", "oplik"=>"naftu","trabos"=>"benzin");
//echo($auto2["medour"]);
foreach($auto2 as $auticko => $hmota)
{
    echo nl2br("Auto: ".$auticko. " jede na: ". $hmota ."\n");
}
?>