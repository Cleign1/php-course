<?php
$output = null;

$ids = [1,5,4,9,6,3,7,8,2];
$users = ['Alice', 'Bob', 'Charlie', 'David', 'Eve'];

// count
$output .= " count id : " . count($ids);

//sort
sort($ids);
sort($users);

//rsort
rsort($ids);
rsort($users);

// array push
array_push($ids, 10);
array_push($users, 'Frank');

// array pop
array_pop($ids);
array_pop($users);

// array shift
array_shift($ids);
array_shift($users);

// array unshift
array_unshift($ids, 99);
array_unshift($users, 'Zayn');

// array unslice
$ids2 = array_slice($ids, 2, 5);
// var_dump($ids2);

// array splice
array_splice($ids, 2, 4, [100, 101, 102]);
array_splice($users, 2, 4, ['Xander', 'Yara', 'Zane']);

// array sum
$output .= "<br/> sum id : " . array_sum($ids);

// array search
$output .= "<br/> user Zayn at index : " . array_search('Zayn', $users);

// in_array
$output .= "<br/> is user Zayn exist ?: " . in_array('Zayn', $users);

// explode
$tags = "php,javascript,laravel,codeigniter";
$tagsArray = explode(',', $tags);
// var_dump($tagsArray);

// implode
$output .= "<br/> tags : " . implode(', ', $users);
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
            <h2 class="text-xl my-4 text-semibold">IDs Array:</h2>
            <p>
                <pre>
                    <?= print_r($ids)?>
                </pre>
            </p>
            <h2 class="text-xl my-4 text-semibold">Users Array:</h2>
            <p>
                <pre>
                    <?= print_r($users)?>
                </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>