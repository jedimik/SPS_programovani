<?php
require_once("process.php")
?>

<!DOCTYPE html>
<html>
<head>
<title> 20. php lekce </title>
</head>
<body>

<!--    1. Vytvorte pole
        Ulozte do nej 5 random cisel s pouzitim fce rand() v rozmezi (0,10)
        Vytvorte html formular, ktery bude odesilat hodnotu
        Nasledne prostrednictvim for cyklu projdete pole a najdete jestli je hodnota
        v poli.
-->
<form action="" method="POST">
<label for="field"> Nactete hodnotu </label>
<input type="text" name="field" id="field"> <br>
<input type="submit" name="send" value="Odesli">
</form>

<?php
Echuj($hodnota);
echo "<br>";
Obrazec(7);

?>


<!--    2. Vytvorte prostrednictvim fce obrazec a ulozte jej do 2D pole.
        Pravidla obrazce:   Pocet sloupcu = pocet radku / 2
                            Sude radky a sude sloupce = *
                     EDIT:  sude radky a liche sloupce = /
                            Liche radky a liche sloupce = cislo sloupce
                     EDIT:  liche radky a sude sloupce = /
        Obrazec vypiste prostrednictvim for cyklu. (muze, nemusi byt fci)
-->

<!--
        3. Vytvorte 2D pole o velikosti 5x5 nactete do nej random hodnoty (0,9)
        Vypiste pomoci funkce toto pole. 
        Upravte diagonalu tak, aby obahovala pouze 1
        Funkci sectete vsechny prvky pole (mimo hodnoty na diagonale)
        a vratte jejich prumer.                
-->

<?php
        $pole=array();
        $pole2=array();
        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<5;$j++)
            {                
                array_push($pole2,rand(0,9));
            }
            array_push($pole,$pole2);
            $pole2=array();
        }

        for($i=0;$i<5;$i++)
        {
            for($j=0;$j<5;$j++)
            {                
                if($i==$j)
                {
                    $pole[$i][$j]=1;
                }
            }
        }
        echo secti($pole);
        function secti($pole)
        {
            $vysledek=0;
            for($i=0;$i<5;$i++)
            {
                for($j=0;$j<5;$j++)
                {             
                    echo $pole[$i][$j];
                    $vysledek +=$pole[$i][$j];
                }
                echo "<br>";
            }

            $vysledek -=5;
            return $vysledek/25;
        }


?>

</body>
</html>