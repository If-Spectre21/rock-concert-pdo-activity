<?php
$host = "127.0.0.1";
$dbname = "rock_concert";
$username = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;port=3307;dbname=$dbname",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>