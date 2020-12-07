<!DOCTYPE html>
<html>
<head>
<meta charset="UTF8">
<title> Hodina 07 CSS a HTML </title>
<link rel="stylesheet" href="../Styles/style.css"> 
<link rel="stylesheet" href="../Styles/styleRegister.css"> 
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
<?php
include '../Styles/header.html';
?>
<div class=loginForm>


<!--Pro registraci -->
<div class="registerForm">
    <form action="" method="POST">
        <br>
        <label> Jméno </label><br>
        <input type="text" name="name" id="name" required> <br>
        <label> Příjmení</label> <br>
        <input type="text" name="surname" id="surname" required> <br>
        <label> Věk </label> <br>
        <input type="text" name="age" id="age"> <br>
        <label> Přezdívka </label> <br>
        <input type="text" name="nickname" id="nickname" required> <br>
        <label> Heslo </label> <br>
        <input type="password" name=pwd id ="pwd"> <br><br>
        <input type="submit" name="submit" id="submit" value="Zaregistrovat">
        <br> <br>
    </form>
</div>



</div>
<?php
include '../Styles/footer.html'
?>
</body>
</html>
