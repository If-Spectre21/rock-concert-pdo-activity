<?php
require 'dbconfig.php';

$stmt = $pdo->prepare("SELECT * FROM attendees");
$stmt->execute();
$attendees = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ticket Type</th>
        <th>Concert Date</th>
        <th>Payment Status</th>
    </tr>

    <?php foreach ($attendees as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['full_name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['ticket_type']; ?></td>
        <td><?= $row['concert_date']; ?></td>
        <td><?= $row['payment_status']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>