<?php
$name = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>

<form method="POST" action="">
    <label>Name:</label><br>
    <input type="text" name="name" required>
    <br><br>

    <label>Phone Number:</label><br>
    <input type="tel" name="phone" required>
    <br><br>

    <button type="submit">Submit</button>
</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
    <h3>Submitted Information</h3>
    <p>Name: <?= htmlspecialchars($name) ?></p>
    <p>Phone: <?= htmlspecialchars($phone) ?></p>
<?php endif; ?>

</body>
</html>
