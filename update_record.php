<?php
require 'dbconfig.php';

$sql = "UPDATE attendees 
        SET payment_status = :payment_status 
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':payment_status' => 'Paid',
    ':id' => 3
]);

echo "Record updated successfully!";
?>