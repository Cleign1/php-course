<?php
  $dayoftheweek = date('l');


  switch ($dayoftheweek) {
    case "Monday":
      $message = "Monday Blues!";
      $color = "blue";
      break;
    case "Tuesday":
      $message = "At least it\'s not monday";
      $color = "green";
      break;
    case "Wednesday":
      $message = "Hell nah man";
      $color = "red";
      break;
    case "Thursday":
      $message = "One more till Friday";
      $color = "purple";
      break;
    case "Friday":
      $message = "TGIF";
      $color = "gold";
      break;
    case "Saturday":
      $message = "WEEEKENDSSSS";
      $color = "yellow";
      break;
    case "Sunday":
      $message = "Lesgooooo";
      $color = "yellow";
      break;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>