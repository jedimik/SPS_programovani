<?php
//implementovat logiku pro odhlaseni a presmerovani na index.php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['logout']))
    {  
        setcookie("userlogin","",time()-3600);
        $_SESSION=[];  
        header("Location: index.php");             
    }
}  
//evidence poctu prihlaseni do cookiny
    //vyjimky try a catch
    // Php frameworks
    //Nette
    //Laravel, CakePhP
?>