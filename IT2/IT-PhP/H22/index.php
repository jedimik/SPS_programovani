<?php
require_once("fce.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> Hodina 22 </title>
</head>
<body>

<!-- Do nadpisu prvni urovne vypsali hodnotu z S_session 'Pondeli' 
a do paragrafu vypsali text s pouzitim hodnoty ulozene v sessionu 'utery' -->
<?php
echo "<h1>". $_SESSION['pondeli'] ."</h1>";
/*
$a=5;s
echo 'Ahoj $a';
echo "Ahoj $a";
*/
// <<< Klasicky heritable se chova jako double quotes - " ", single - ' '
echo <<<END
<p> Utery to byl ten den, kdy rano byl snih a pozdeji take: ${_SESSION['utery']} </p>
END;

// Zalozte si formular s 5 textovymi vstupy a tlacitkem.
?>

<form action="" method="POST">
<label for="value0"> Hodnota 0 </label><br>
<input type="text" name="value0"><br>
<label for="value1"> Hodnota 1 </label><br>
<input type="text" name="value1"><br>
<label for="value2"> Hodnota 2 </label><br>
<input type="text" name="value2"><br>
<label for="value3"> Hodnota 3 </label><br>
<input type="text" name="value3"><br>
<label for="value4"> Hodnota 4 </label><br>
<input type="text" name="value4"><br>
<input type="submit" name="Send" value="Send It">
</form>

<?php
// Foreachem vypsat 2D session pole . $_SESSION['pole']
// Prvni_hodnota je <value0>
if(isset($_SESSION['pole']))
{
    foreach($_SESSION['pole'] as $key => $value)
    {
        echo $key . " je: " . $value . "<br>";

    }
}


?>




</body>

</html>