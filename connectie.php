<?php
$servername = 'localhost';
$dbname= "kevintaria";
$user = 'root';
$pass = 'root';

error_reporting(E_ALL);
ini_set('display_errors','on');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
}
catch(PDOException $e)
{
    echo "". $e->getMessage();
}
