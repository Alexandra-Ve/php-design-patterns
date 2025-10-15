<?php

namespace App\Solid_design;

class MarijuanaGarden extends EmptyGarden
{
    public function items()
    {
        return array_fill(0, $this->width * $this->height, 'weed');
    }
}
