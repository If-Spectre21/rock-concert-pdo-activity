<?php
require 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM attendees WHERE id = :id");
$stmt->bindParam(':id', $id);
$id = 1;

$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";
?>