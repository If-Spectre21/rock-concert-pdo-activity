<?php
require 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM attendees");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($results);
echo "</pre>";
?>