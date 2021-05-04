<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname ="test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

require_once("dbconnect.php");

$sql = "SELECT ID, username, password FROM users";
$result = mysqli_query($conn, $sql);
//var_dump($result);
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo "id: ".$row['ID']." username: ". $row['username']." password: ". $row['password']. "<br>";
    }
}
else
{
    echo "Nastala chyba";
}
?>
