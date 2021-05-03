<?php
session_start();
if(isset($_COOKIE['userlogin']))
{
    $_SESSION['username']=$_COOKIE['userlogin'];
    header("Location: index2.php");
}
else
{
    unset($_SESSION['username']);
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Moje Komplexni stranka </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1> Moje prihlasovaci stranka </h1>

<form action="login.php" method="POST">
<label for="username"> Prihlasovaci jmeno </label><br>
<input type="text" name="username" required><br>
<label for="password"> Heslo </label><br>
<input type="password" name="password" required><br>
<input type="submit" name="login" value="Prihlasit se">
</form>
<!-- Vytvorte form pro registraci 
    Pro dva vstupni textz
    a tlacitko
-->

<form action="regpassword.php" method="POST">
<label for="pwd"> HEslo </label><br>
<input type="password" name="pwd" required><br>
<label for="pwd"> Heslo znovu </label><br>
<input type="password" name="pwdCheck" required><br>
<input type="submit" name="register" value="Registrovat">
</form>



<?php
if(isset($_SESSION['errmessage']))
{
    echo '<p class="errmessage">'. $_SESSION['errmessage'] . '</p>';
    unset($_SESSION['errmessage']);
}
?>

</body>
</html>