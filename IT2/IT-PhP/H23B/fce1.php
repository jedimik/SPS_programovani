<?php

DoReload();

function DoReload()
{
    if(isset($_POST['send']))
    {
        setcookie("kalkulacka1","",time()-60);
        header('Location: index.php');
    }
    if(isset($_POST['plus']))
    {
        setcookie("kalkulacka1",Odecet($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['minus']))
    {
        setcookie("kalkulacka1",Soucet($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['krat']))
    {
        setcookie("kalkulacka1",Delit($_POST['value1'],$_POST['value2']),time()+60);
        header('Location: index.php');
    }
    else if(isset($_POST['delit']))
    {
        setcookie("kalkulacka1",Nasobit($_POST['value1'],$_POST['value2']),time()+60);
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