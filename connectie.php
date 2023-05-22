<?php
$servername = 'localhost';
$dbname= "kevintiara";
$user = 'root';
$pass = 'root';

error_reporting(E_ALL);
ini_set('display_errors','on');
//$dbh = new PDO('mysql:host=localhost;dbname=bas', $user, $pass);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectie gelukt";
}
catch(PDOException $e)
{
    echo "connectie mislukt". $e->getMessage();
}
