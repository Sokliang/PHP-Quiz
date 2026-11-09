<?php
$math = 80;
$english = 20;
$science = 50;

function avgScore($math, $english, $science): float {
    return ($math + $english + $science) / 3;
}

?>

<p><?php echo avgScore($math, $english, $science); ?></p>
