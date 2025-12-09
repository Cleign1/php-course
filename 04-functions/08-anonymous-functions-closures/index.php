<?php

// anonymous function
$squares = function ($number) {
    return $number * $number;
};

echo "5 Pangkat 2 adalah ". $squares(5);

// closures
function createCounter() {
    $count = 0;

    $counter = function() use(&$count) {
        return ++$count;
    };

    return $counter;
}

$counter =  createCounter();
echo '<br>';
echo $counter() . "<br>";
echo $counter() . "<br>";
echo $counter() . "<br>";
echo $counter() . "<br>";
echo $counter() . "<br>";