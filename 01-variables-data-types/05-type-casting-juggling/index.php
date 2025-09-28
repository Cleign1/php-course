<?php

$number1 = 10;
$number2 = 3;
$number3 = '25';
$fruit = 'Apple';
$bool1 = true;
$bool2 = false;

// implicit type casting

$result = $number1 + $number2; // integer + integer = integer
$result = $number1 + $number3; // integer + string = integer + integer
$result = $number3 + $number3; // string + string = integer + integer
$result = $number1 . $number2; // integer . integer = string . string
// $result = $fruit + $number1; // string . integer = string . string error
$result = $number1 + $bool1; // boolean + boolean = integer + integer

var_dump($result);