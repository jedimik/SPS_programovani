<!DOCTYPE html>
<html>
<head>
<meta charset="UTF8">
<title> Hodina 07 CSS a HTML </title>
<link rel="stylesheet" href="/ITProjekt/Styles/style.css"> 
<link rel="stylesheet" href="../Styles/styleLogin.css">
<link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
<?php
include '../Styles/header.html';
?>

<div class=loginForm>
    <form action="" method="POST">
        <br>
        <label> Nickname </label><br>
        <input type="text" name="nickname" id="nickname" required> <br>
        <label> Heslo </label> <br>
        <input type="password" name=pwd id ="pwd" required> <br> <br>
        <input type="submit" name="submit" id="submit">
        <br><br>
    </form>
</div>

<?php
include '../Styles/footer.html'
?>
</body>
</html>