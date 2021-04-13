<?php

DoReload();

function DoReload()
{
    if(isset($_POST['send']))
    {
        setcookie("kalkulacka","",time()-60);
        header('Location: index.php');
    }
    if(isset($_POST['plus']))
    {
        setcookie("kalkulacka",Soucet($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['minus']))
    {
        setcookie("kalkulacka",Odecet($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['krat']))
    {
        setcookie("kalkulacka",Nasobit($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['delit']))
    {
        setcookie("kalkulacka",Delit($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }    

}

function Delit($a,$b)
{
    return $a/$b;
}
function Soucet($a,$b)
{
    return $a+$b;
}
function Odecet($a,$b)
{
    return $a-$b;
}
function Nasobit($a,$b)
{
    return $a*$b;
}

?>