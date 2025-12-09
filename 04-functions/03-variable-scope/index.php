<?php

$name = 'Ibnu';

function sayHello() {
    global $name;
    $name = 'Khaidar';
    echo "Hello ". $name;
}
echo $name;
sayHello();
echo $name;