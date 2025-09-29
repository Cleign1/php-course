<?php
$output = null;

$fruits = [
  ['Apple', 'Red'],
  ['Banana', 'Yellow'],
  ['Grapes', 'Purple']
];

$output = $fruits[0][0];

$fruits[] = ['Grape', 'Purple'];

$users = [
  ['name' => 'John', 'email' => 'john@example.com', 'password' => 'password123'],
  ['name' => 'Jane', 'email' => 'jane@example.com', 'password' => 'password456'],
  ['name' => 'Doe', 'email' => 'doe@example.com', 'password' => 'password789']
];

$users[] = ['name' => 'Smith', 'email' => 'smith@example.com', 'password' => 'password101'];

$output = $users[1]['email'];

array_pop($users);

unset($users[1]);

$output = count($users);

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
      <p class="text-xl"><?= $output ?></p>
      <p>
        <pre>
          <?= print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>