<?php
$host = 'localhost';
$dbname = 'stackdev';
$username = 'root';  // À adapter si besoin
$password = '@database2025';      // Ajoute ton mot de passe si nécessaire

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
