<?php

namespace App\Solid_design;

use App\Solid_design\PlotArea;

class GoodGarden
{
    private PlotArea $plot;

    // ✅ Dependency is inverted — abstraction injected, not constructed
    public function __construct(PlotArea $plot)
    {
        $this->plot = $plot;
    }

    public function items()
    {
        $numberOfPlots = $this->plot->totalNumberOfPlots();
        return array_fill(0, $numberOfPlots, 'handful of dirt');
    }
}
