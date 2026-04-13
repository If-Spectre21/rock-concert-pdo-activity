<?php
require 'dbconfig.php';

$sql = "INSERT INTO attendees (full_name, email, ticket_type, concert_date, payment_status)
        VALUES (:full_name, :email, :ticket_type, :concert_date, :payment_status)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':full_name' => 'Carlos Dela Cruz',
    ':email' => 'carlos@email.com',
    ':ticket_type' => 'VIP',
    ':concert_date' => '2026-05-12',
    ':payment_status' => 'Paid'
]);

echo "Record inserted successfully!";
?>