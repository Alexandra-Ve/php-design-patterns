<?php

// app/Solid_design/CircleArea.php
namespace App\Solid_design;

class CircleArea implements PlotArea
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function totalNumberOfPlots()
    {
        return ceil(pi() * pow($this->radius, 2) / 4);
    }
}

