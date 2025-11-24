<?php

$age = 13;

// If statement
if ($age < 21) {
    echo "you cannot drink";
}
// If-Else
else {
    echo "you can drink";
}

// Nested if statement
if ($age >= 21 ) {
    echo "you can drink";
} else {
    if ($age >= 18) {
        echo "you can vote";
    }
    else {
        echo 'you cannot vote or drink';
    }
}

// If-Else-If

if ($age >= 21) {
    echo "you can drink";
} elseif ($age >= 18) {
    echo "you can vote";
} else {
    echo "you cannot drink or vote";
}
