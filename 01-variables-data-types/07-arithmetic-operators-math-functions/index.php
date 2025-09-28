<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 10;
$num2 = 3;

// basic math
// $output = "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
// $output .= "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
// $output .= "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
// $output .= "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
// $output .= "$num1 % $num2 = " . ($num1 % $num2) . "<br>";

// assignment operators
// $num3 = 5;
// $num3 += 20;

// $output .= "num3 += 20 -> $num3<br>";
// $num3 -= 4;
// $output .= "num3 -= 4 -> $num3<br>";
// $num3 *= 2;
// $output .= "num3 *= 2 -> $num3<br>";
// $num3 /= 2;
// $output .= "num3 /= 2 -> $num3<br>";
// $num3 %= 3;
// $output .= "num3 %= 3 -> $num3<br>";

// random
// $output = rand();
// $output = getrandmax();
// $output = rand(1, 100);

// //Round
// $output = round(3.1);

// //ceil
// $output = ceil(3.1);

//floor
// $output = floor(3.1);

//sqrt
// $output = sqrt(64);

//pi
// $output = pi();

//abs
// $output = abs(-300);

// max
// $output = max(2, 10, 150, -200);
// $output = max([2, 10, 155, -200]);

// min
// $output = min(2, 10, 150, -200);
// $output = min([2, 10, 155, -107]);

$output = number_format(234562.31312, 2); // 1,234.57

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <p class="text-xl">
        <?= $output ?>
       </p>
    </div>
  </div>
</body>

</html>