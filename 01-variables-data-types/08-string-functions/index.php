<?php
$output = null;
$string = "Hello, World!";
// strlen
$output = "The length of the string is: " . strlen($string);

// str_word_count
$output .= "<br>The number of words in the string is: " . str_word_count($string);

// strpos
$output .= "<br>The position of 'World' in the string is: " . strpos($string, "World") . "<br>";

// get spesific part of string
$output .= $string[4];
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>