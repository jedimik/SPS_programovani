<?php
session_start();
$GLOBALS['usr'] = "root";
$GLOBALS['pwd'] = "Abc/d3fG"; //Definuj nove heslo pro DU

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if($usr == trim($_POST['username']," ") && $pwd==$_POST['password'])
    {   //V pripade shody jmena a hesla, vytvorte cookinu username s uzivatelskym jmenem z postu
        //Tu hodnotu dejte do Sessny[username] a presmerujte
        setcookie("userlogin",trim($_POST['username'], " "),time()+3600);
        $_SESSION['username']=$_COOKIE['userlogin'];        
        header("Location: index2.php");
    }
    else //Kdyz zadame spatne udaje a chceme error message
    {
        $_SESSION['errmessage']="Zadane jmeno nebo heslo nesouhlasi!!!§§";
        header("Location: index.php");
    }
}

/* TODO: Pri registraci hesla zkontrolovali heslo
 Novy formular obsahujici jeden input a jedno tlacitko.
    Predpokladame, ze uzivatelske jmeno je stejne jako mame definovano v Globalni
    Heslo vytvarime nove a ukladame do session, ze session (pokud existuje) tak do globalni promenne 


 Heslo musi splnovat nasledujici pozdavky: 
 - Obsahovat alespon jedno velke pismeno
 - Obsahovat alespon jednu cislici
 - Obsahovat alespon jeden specialni znak
 - Nesmi obsahovat mezeru
 - Musi byt vetsi nez 8 znaku
 - Pokud je chyba - chybu evidujte v SESSION pro error message a vypiste
 // Znamka vahy 4
 */
?>