<?php
require_once('h18fce.php');
?>
<!DOCTYPE html>
<html>
<head>
<title> Moje best kalkulacka </title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="formularek" method="POST" action="">
    <label for="cislo1"> Číslo 1</label><br>
    <input type = "number" name="cislo1" id="cislo1" value ="<?php
if(isset($cislo1))
{
    echo intval($cislo1).'"'.' readonly>';
    //echo intval($cislo1);
}
?><?php/*
if(isset($cislo1))
{
    echo "readonly";
} */
?><br>
    <label for="cislo2"> Číslo 2</label><br>
    <input type = "number" name="cislo2" id="cislo2"> <br>
    <input type = "submit" name ="plus" value="+"> 
    <input type = "submit" name ="minus" value="-"> 
    <input type = "submit" name ="nasobit" value="*">
    <input type = "submit" name ="delit" value="/">
    <input type = "submit" name ="reset" value="RESET">
</form>
<?php
    if(isset($cislo1))
    {
       //var_dump($cislo1);
        echo '<p style="font-size:25px; font-weight:bold;">' . $cislo1 . '</p>';
    }   
?>

</body>

</html>