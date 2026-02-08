<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "africa_safaris";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected to server<br>";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

