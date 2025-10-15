<?php

namespace App\Creational\AbstractFactory\Products;

use App\Creational\AbstractFactory\Contracts\Garden;

class MarijuanaGarden implements Garden
{
    public function items(): array
    {
        return ['weed', 'weed', 'weed'];
    }
}
