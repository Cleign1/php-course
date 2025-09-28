<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

// String
$firstName = 'John';
$lastName = 'Doe';

var_dump($firstName);
echo '<br />';
echo gettype($firstName);
echo '<br />';

// Integer
$age = 30;
var_dump($age);
echo '<br />';
echo gettype($age);
echo '<br />';

// Float
$height = 5.9;
var_dump($height);
echo '<br />';
echo gettype($height);
echo '<br />';

// Boolean
$isMarried = false;
var_dump($isMarried);
echo '<br />';
echo gettype($isMarried);
echo '<br />';

// Array
$fruits = ['Apple', 'Banana', 'Orange'];
var_dump($fruits);
$fruits[0] = 'Mango'; // Changing the first element of the array
echo '<br />';
var_dump($fruits);
echo gettype($fruits);
echo '<br />';

// Object
$person = new stdClass();
var_dump($person);
echo '<br />';

// null

$car = null;
var_dump($car);
echo '<br />';

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);