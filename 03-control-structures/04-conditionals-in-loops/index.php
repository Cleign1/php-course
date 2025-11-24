<?php

$number = 1;

// while ($number <= 10){
//     if ($number % 2 ==0) {
//         echo "$number is even <br>";
//     } else {
//         echo "$number is odd <br>";
//     }

//     $number++;
// }

// break out of loop
// for($i=0; $i <=10; $i++) {
//     if($i == 5){
//         break;
//     }
//     echo "$i <br>";
// }

// skip and continue
// for ($i=0; $i < 10; $i++) {
//     if ($i==5) {
//         continue;
//     }
//     echo "$i <br>";
// }

$studentGrades = array(
    'John' => 90,
    'Jack' => 88,
    'Jill' => 100
);

foreach ($studentGrades as $name => $grade) {
    if($grade >= 90) {
        echo "$name has exellent grade <br>";
    }
}