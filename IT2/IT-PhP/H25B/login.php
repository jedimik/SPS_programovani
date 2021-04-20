<?php
session_start();
$GLOBALS['usr'] = "root";
$GLOBALS['pwd'] = "heslo";

if($_SERVER['REQUEST_METHOD']=="POST")
{
    if($usr == $_POST['username'] && $pwd==$_POST['password'])
    {   //V pripade shody jmena a hesla, vytvorte cookinu username s uzivatelskym jmenem z postu
        //Tu hodnotu dejte do Sessny[username] a presmerujte
        setcookie("userlogin",$_POST['username'],time()+3600);
        $_SESSION['username']=$_COOKIE['userlogin'];        
        header("Location: index2.php");
    }
    else //Kdyz zadame spatne udaje a chceme error message
    {
        $_SESSION['errmessage']="Zadane jmeno nebo heslo nesouhlasi!!!§§";
        header("Location: index.php");
    }
}

//header("Location: index.php")
?>