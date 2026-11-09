<?php
$name = "";
$email = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    if (empty($name)) {
        $errors["name"] = "Name is required.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST" action="">

    <label>Name:</label><br>
    <input type="text" name="name"
        value="<?= htmlspecialchars($name) ?>">
    <br>
    <?php if (isset($errors["name"])): ?>
        <span style="color:red;">
            <?= $errors["name"] ?>
        </span>
    <?php endif; ?>

    <br><br>

    <label>Email:</label><br>
    <input type="text" name="email"
        value="<?= htmlspecialchars($email) ?>">
    <br>
    <?php if (isset($errors["email"])): ?>
        <span style="color:red;">
            <?= $errors["email"] ?>
        </span>
    <?php endif; ?>

    <br><br>

    <button type="submit">Submit</button>

</form>

<?php if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)): ?>
    <h3>Submitted Information</h3>
    <p>Name: <?= htmlspecialchars($name) ?></p>
    <p>Email: <?= htmlspecialchars($email) ?></p>
<?php endif; ?>

</body>
</html>
