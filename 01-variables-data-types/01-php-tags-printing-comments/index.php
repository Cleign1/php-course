<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= "Learn PHP From Scratch" ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <p>In this course, you will learn the fundamentals of the PHP language</p>
        </div>
        <div>
            <?php
            // This is a single-line comment in PHP
            # This is also a single-line comment in PHP
            /*
                This is a multi-line comment in PHP
                It can span multiple lines
            */
            echo "<div class='bg-white rounded-lg shadow-md p-6 mt-4'>";
            echo "<h2 class='text-2xl font-semibold mb-4'>PHP Tags, Printing, and Comments</h2>";
            echo "<p>This section covers the basics of PHP tags, printing output, and comments.</p>";
            echo "</div>";
            ?>
        </div>
    </div>
</body>

</html>