<?php


function DoReload()
{
    if(isset($_POST['send']))
    {
    setcookie("pocitadlo","",time()-60);
    }
}

?>