<?php
require_once('logout.php');
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<form method="POST" action = "">
<label for="jmeno"> Pocet radku </label> <br>
<input type="text" name="pocetr"><br>
<label for="heslo"> Pocet sloupcu </label> <br>
<input type="text" name="pocets"><br>
<input type="submit" name="Odesli" value="Vytvor">
</form>

<form method="POST" action = "logout.php">
<input type="submit" name="logout" value="Odhlas me">
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['Odesli']))
    {
        obrazec($_POST['pocetr'],$_POST['pocets']);   
    }
}
?>