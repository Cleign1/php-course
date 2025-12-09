<?php


function add($a, $b) {
    $result = $a + $b;
    return $result;
}

function subtract($a, $b) {
    $result = $a - $b;
    return $result;
}

echo "Addition <br>";
echo "1 + 2 = " . add(1,2);

echo "<br>";

echo "Subtraction <br>";
echo "5 - 3 = ". subtract(5,3);

function sayHello($name) {
    echo "Hello ". $name;
}

echo '<br>';
sayHello('Ibnu');

function addAll(...$numbers) {
    $total = 0;

    foreach ($numbers as $number){
        $total += $number;
    }

    return $total;
}

echo '<br>';
echo "Add All";
echo '<br>';
echo addAll(1,2,3,4,5);
