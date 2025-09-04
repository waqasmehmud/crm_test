<?php
require_once "config.php";

$result = $conn->query("SELECT * FROM leads ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Leads</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Leads Admin</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>GCLID</th><th>Sub ID</th><th>Created At</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <!-- Mask gclid/sub_id for security -->
            <td><?= $row['gclid'] ? substr($row['gclid'], 0, 6) . "..." : "" ?></td>
            <td><?= $row['sub_id'] ? substr($row['sub_id'], 0, 6) . "..." : "" ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php
$conn->close();
