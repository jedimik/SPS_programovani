<?php


?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<table> 
<tr>
<th> Jmeno </th>
<th> Prijmeni </th>
<th> Vek </th>
</tr>
</table>
<br><br><br>
<?php
    //Zacit multidimensionalnim
    $pole=array("Jmeno","Prijmeni","vek");
    $Petr=array("Jmeno"=>"Petr","Prijmeni"=>"Novak","Vek"=>24);
    $Pavel=array("Jmeno"=>"Pavel","Prijmeni"=>"Lampa","Vek"=>38);
    $Katka=array("Jmeno"=>"Katka","Prijmeni"=>"Novotna","Vek"=>18);
    $Romana=array("Jmeno"=>"Romana","Prijmeni"=>"Malarova","Vek"=>15);
    $lide=array($Petr,$Pavel,$Katka,$Romana);
    $pocetRadku=10;

    echo "<table> <tr>";
    for($i=0;$i<sizeof($pole);$i++)
    {
        //$value=$pole[$i];
        /*echo <<<END
        <th> 
        END;

        echo <<<END
        $pole[$i]
        END;

        echo <<<END
        </th> 
        END;*/
        echo <<<Konec
        <th> $pole[$i] </th>
        Konec;
    }
    for($i=0;$i<sizeof($lide);$i++)
    {
        echo "<tr>";
        foreach($lide[$i] as $atribut => $hodnota)
        {
            echo <<<END
                <td> $hodnota </td>
            END;
        }        
        echo "</tr>";

    }
    echo "</table>";
?>



</body>
</html>

<?php
/*
for($i=0;$i<sizeof($pole);$i++)
    {
        echo "<th>";
        echo $pole[$i];
        echo "</th>";
    }
*/
?>