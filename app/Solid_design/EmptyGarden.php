<?php
// app/Solid_design/EmptyGarden.php
namespace App\Solid_design;

class EmptyGarden
{
    private PlotArea $plot;

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
