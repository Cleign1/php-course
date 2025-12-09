<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        return $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }
}

$article1 = new Article("Postingan Pertama", "ini Postingan pertama guee");
$article2 = new Article("Postingan Kedua", "Ini postingan kedua gueeee");

$article1->publish();


var_dump($article1->isPublished(), true . "<br>");
var_dump($article2->isPublished(), true . "<br>");