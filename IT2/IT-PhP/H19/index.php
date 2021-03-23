<?php
require_once("fce.php");
?>
<!DOCTYPE html>
<html>
<head>
<title> H19 tabulky a multidimensionalni pole </title>
</head>
<body>
<table>
    <tr>
        <th> Jmeno </th>
        <th> Prijmeni </th>
        <th> Vek </th>
    </tr>
    <tr>
        <td> Petr </td>
        <td> Novy </td>
        <td> 24 </td>
    </tr>
    <tr>
        <td> Pavel </td>
        <td> Novotny </td>
        <td> 18 </td>
    </tr>
        <tr>
        <td> Katka </td>
        <td> Lampova </td>
        <td> 15 </td>
    </tr>
</table> <br> <br>

<?php
    Tabulka($lide);
?>


</body>
</html>

