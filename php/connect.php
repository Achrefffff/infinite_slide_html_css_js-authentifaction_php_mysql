<?php
// Informations de connexion à la base de données
$host = 'localhost'; 
$user = 'root';      
$password = '';      
$dbname = 'slide_db_user';  

// Connexion bd
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
