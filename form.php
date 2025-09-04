<?php
// Capture gclid and sub_id from query string if available
$gclid = $_GET['gclid'] ?? '';
$subId = $_GET['sub_id'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lead Form</title>
</head>
<body>
    <h2>Submit Lead</h2>
    <form action="submit.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <!-- Hidden fields for tracking -->
        <input type="hidden" name="gclid" value="<?= htmlspecialchars($gclid) ?>">
        <input type="hidden" name="sub_id" value="<?= htmlspecialchars($subId) ?>">

        <button type="submit">Save Lead</button>
    </form>
</body>
</html>
