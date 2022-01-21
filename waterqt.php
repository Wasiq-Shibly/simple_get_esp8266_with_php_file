<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waterqt";

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection  

$temperature=$_GET['temperature'];
$tdsValue=$_GET['tdsValue'];
echo $temperature;
echo $tdsValue;
}
?>