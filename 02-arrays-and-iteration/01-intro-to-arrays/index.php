<?php

$numbers = [1, 2, 3, 4, 5];
$names = ["Alice", "Bob", "Charlie"];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

inspect($numbers);
inspect($names);

echo $numbers[0]; // Outputs: 1
echo $names[1];   // Outputs: Bob

$numbers[] = 6; // Adds 6 to the end of the array
inspect($numbers);