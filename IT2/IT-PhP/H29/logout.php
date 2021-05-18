<?php
function obrazec($pocetr, $pocets)
{
    for($i=0;$i<$pocetr;$i++)
    {
        for($j=0;$j<$pocets;$j++)
        {
            echo " ".$j." ";
        }
        echo "<br>";
    }
}


if($_SERVER['REQUEST_METHOD']=="POST")
{
    /*
    if(isset($_POST['Odesli']))
    {
        obrazec($_POST['pocetr'],$_POST['pocets']);   
        header("Location: novastranka.php");    
    }
    */
    if(isset($_POST['logout']))
    {
        header("Location: index.php");
    }
}
?>