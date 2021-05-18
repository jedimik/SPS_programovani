<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<form method="POST" action = "login.php">
<label for="jmeno"> Jmeno </label> <br>
<input type="text" name="jmeno"><br>
<label for="heslo"> Heslo </label> <br>
<input type="text" name="heslo"><br>
<input type="submit" name="Odesli">
</form>
<?php
if(isset($_SESSION['ermess']))
{
    echo $_SESSION['ermess'];
    unset($_SESSION['ermess']);
}
?>

</body>
</html>