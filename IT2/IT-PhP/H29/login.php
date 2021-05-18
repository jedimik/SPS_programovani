<?php
session_start();
$jmeno = "Tomas";
$heslo = "admin";

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['Odesli']))
    {
        if($jmeno==$_POST['jmeno'] && $heslo==$_POST['heslo'])
        {
            setcookie("nepovedeno",$pocet,time()-50);
            header("Location: novastranka.php");
        }
        else
        {

            $pocet=$_COOKIE['nepovedeno']+1;
            setcookie("nepovedeno",$pocet,time()+50);
            $_SESSION['ermess']="Spatne uzivatelske jmeno nebo heslo, prihlasili jste se:". $_COOKIE['nepovedeno'];
            header("Location: index.php");
        }
    }

}


?>