<?php
/*
Nacteme do souboru hodnotu z formulare,
Nacteme hodnotu
appendujeme tam
a budeme vypisovat a cist
*/
// https://www.w3schools.in/php/file-handling/
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['create']))
    {
        $file = fopen(checkni(),"w");
        fwrite($file,$_POST['field']);
    }
    if(isset($_POST['create2']))
    {
        $file = fopen(checkni(),"a");
        fwrite($file,$_POST['field']);
    }
}
function checkni()
{
    if($_POST['filename'])
    {
        return $_POST['filename'];
    }
    else
    {
        return "soubor.txt";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>
</head>
<body>

<form action="" method="POST">
<label for="field" style="font-size:25px;font-weight:bold;">Vse co budes chtit udelat nove</label> <br>
<input type="text" name="filename"><br>
<textarea rows="5" cols="50" name="field"> </textarea> <br>
<input type="submit" value="Vytvor soubor" name="create">
</form>

<form action="" method="POST">
<label for="field" style="font-size:25px;font-weight:bold;">Vse co budes chtit pridat</label> <br>
<input type="text" name="filename"><br>
<textarea rows="5" cols="50" name="field"> </textarea> <br>
<input type="submit" value="Pridej do souboru" name="create2">
</form>

</body>
</html>