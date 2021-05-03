<?php
session_start();
/* Zavolat request method == POST
Porovnat jestli jsou hesla z dvou formularu anvzajem stejna.
*/ 
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['register']))
    {
        $pwd1= $_POST['pwd'];
        $pwd2 = $_POST['pwdCheck'];
        $errormess=array();

        if($pwd1!=$pwd2)
        {
            array_push($errormess,"Hesla se neshoduji.");
        }
        //else{        
        //if na pocet znaku
        if(strlen($pwd1)<8)
        {
            array_push($errormess,"Heslo musi mit alespon 8 znaku.");
        }
        //if na cisla
        if(!preg_match('#[0-9]+#',$pwd1))
        {
            array_push($errormess,"Heslo musi obsahovat cislice.");
        }
        //if na specialni znaky
        if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$pwd1))
        {
            array_push($errormess,"Heslo musi obsahovat specialni znak.");
        }
        //if na velka pismena
        if(!preg_match('/[A-Z]/',$pwd1))
            {
                array_push($errormess,"Heslo musi obsahovat kapitalku.");
            }
        //}
        if($pwd1==$pwd2 && sizeof($errormess)==0)
        {
            $_SESSION['errmessage']="Registrace probehla v poradku";
            $_SESSION['password']=$pwd1;
        }
        else
        {
            foreach($errormess as $msg)
            {
                $str.=$msg."<br>"; //Pro stringy je to .=, mat. operace scitani je+=
            }
            $_SESSION['errmessage']=$str;
        }
        // Ahoj-jakje0
    }
}

//https://www.w3schools.com/php/func_regex_preg_match.asp
header("Location: index.php");
?>