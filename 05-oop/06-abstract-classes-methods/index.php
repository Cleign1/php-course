<?php

abstract class Shape {
    protected $name;

    abstract function calculateArea();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

$circle1 = new Circle("Circle", 49);
// var_dump($circle1);
echo $circle1->getName() . " Area = " . $circle1->calculateArea();
echo '<br>';

$rectangle1 = new Rectangle("Kotak", 4,6);
echo $rectangle1->getName() . " Area = " . $rectangle1->calculateArea();