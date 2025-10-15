<?php

namespace App\Creational\Prototype;

class Circle extends Shape
{
    public $radius;

    public function __construct($x, $y, $color, $radius)
    {
        parent::__construct($x, $y, $color);
        $this->radius = $radius;
    }

    public function clone(): Shape
    {
        return clone $this; // PHP’s native clone
    }
}
