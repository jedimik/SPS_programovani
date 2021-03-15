<?php

if(isset($_POST['form1']) && isset($_POST['form2']))
{
    // Pro test ucely
    /*
    if(is_numeric($_POST['form1'])) 
    {
        echo "Je to numeric ve formu 1";
    }
    if(is_numeric($_POST['form2'])) 
    {
        echo "Je to numeric ve formu 2";
    }
    */
    
    if(is_numeric($_POST['form1']) && is_numeric($_POST['form2']))
    {
        $form1 = intval($_POST['form1']);
        $form2 = intval($_POST['form2']);
    }
    else
    {
        $form1 = $_POST['form1'];
        $form1 = $_POST['form2'];
    }
    
}


// Definujeme funkci pro obrazec
// Pocet sloupcu je roven pocet radku/2 
// plati, ze kazdy lichy sloupec je cislo
// plati, ze kazdy sudy sloupec je hvezdicka
function obrazec($a)
{
    for($i=0;$i<$a;$i++)
    {
        for($j=0;$j<$a/2;$j++)
        {
            if($j % 2==0)
            {
                echo "*";
            }
            else
            {
                echo $j;
            }
        }
        echo "<br>";
    }
}


?>

