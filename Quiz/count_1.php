<?php

$array = ["Math", "Science", "English", "History", "Geography"];
$count = count($array);

$array[] = "Art";
$array[] = "Music";

echo "Total subjects: " . $count . "<br>";
print_r($array);

?>


