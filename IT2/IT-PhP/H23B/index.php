<?php
//require_once("fce.php");


//DoReload();

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
//
?>

<form method="POST" action="fce.php">
<input type="text" name="value1" value=<?php if(isset($_COOKIE['kalkulacka'])){echo $_COOKIE['kalkulacka'];}else{echo 0;}?>> <br>
<input type="text" name="value2"> <br>
<input type="submit" name="plus" value="+"> 
<input type="submit" name="minus" value="-"> 
<input type="submit" name="krat" value="*"> 
<input type="submit" name="delit" value="/"> <br>
<input type="submit" name="send" value="Smaz">
</form>

<br><br>
<form method="POST" action="fce1.php">
<input type="text" name="value1" value=<?php if(isset($_COOKIE['kalkulacka1'])){echo $_COOKIE['kalkulacka1'];}else{echo 0;}?>> <br>
<input type="text" name="value2"> <br>
<input type="submit" name="plus" value="+"> 
<input type="submit" name="minus" value="-"> 
<input type="submit" name="krat" value="*"> 
<input type="submit" name="delit" value="/"> <br>
<input type="submit" name="send" value="Smaz">
</form>



</body>

</html>