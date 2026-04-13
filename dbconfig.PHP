<?php
$host = "localhost";
$dbname = "rock_concert";
$username = "root";
$password = ""; // IMPORTANT: leave blank for XAMPP default

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>