<?php

$host = 'localhost';
$dbname = 'viajes';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo "Error al conectar a la base de datos: " . $e->getMessage();
}


$query = "SELECT * FROM posts";
$stmt = $pdo->prepare($query);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
