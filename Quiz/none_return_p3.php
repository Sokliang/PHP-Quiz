<?php
$name = "Both";
$age = 20;

function info($name, $age): void {
    echo "Name: " . $name . ", Age: " . $age;
}

?>

<p><?php info($name, $age); ?></p>
