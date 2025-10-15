<?php

namespace App\Solid_design;

//Violating Dependency Injection Principle
use App\Solid_design\RectangleArea;

class BadGarden
{
    public function items()
    {
        // ❌ Violation: directly depends on a concrete class
        $rectangle = new RectangleArea(10, 10);
        $numberOfPlots = $rectangle->totalNumberOfPlots();

        return array_fill(0, $numberOfPlots, 'handful of dirt');
    }
}
