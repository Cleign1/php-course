<?php

  interface contentInterface {
    public function display();
    public function edit();
  }

  class Article implements contentInterface {
    private $title;
    private $content;

    public function __construct($title, $content)
    {
      $this->title = $title;
      $this->content = $content;
    }

    public function display()
    {
      echo "<h2>{$this->title}</h2>";
      echo "<p>{$this->content}</p>";
    }

    public function edit() {
      echo "Editing the Article '{$this->title}";
    }
  }

  class Video implements contentInterface {
    private $title;
    private $videoUrl;

    public function __construct($title, $videoUrl)
    {
      $this->title = $title;
      $this->videoUrl = $videoUrl;
    }

    public function display()
    {
      echo "<h2>{$this->title}</h2>";
      echo "<iframe src='{$this->videoUrl}'</iframe>}";
    }

    public function edit() {
      echo "Editing the Article '{$this->title}";
    }
  }

$article1 = new Article("Judul1", "isi dari judul1");
$video1 = new Video("Judul Video", "https://www.youtube.com/watch?v=AkbMAWgnQC8");

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
       <?= $article1->display() ?>
    </div>
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
       <?= $video1->display() ?>
    </div>
  </div>
</body>

</html>