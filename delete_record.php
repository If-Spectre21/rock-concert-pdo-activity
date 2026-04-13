<?php
require 'dbconfig.php';

$sql = "DELETE FROM attendees WHERE id = :id";
$stmt = $pdo->prepare($sql);

$id = 2;

$stmt->execute([':id' => $id]);

echo "Record deleted successfully!";
?>