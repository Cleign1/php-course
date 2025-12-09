<?php

$add = fn ($a, $b)  => $a + $b;

echo $add(2,4);

echo '<br>';

$numbers = fn ($number) => $number * $number;

echo $numbers(15);

$nomor = [1,2,3,4,5];

$squaredNumbers = array_map($numbers, $nomor);

echo '<br>';
print_r($squaredNumbers);