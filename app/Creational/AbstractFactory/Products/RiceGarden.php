<?php

namespace App\Creational\AbstractFactory\Products;

use App\Creational\AbstractFactory\Contracts\Garden;

class RiceGarden implements Garden
{
    public function items(): array
    {
        return ['rice', 'rice', 'rice'];
    }
}
