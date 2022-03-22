<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Projet";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully </br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
