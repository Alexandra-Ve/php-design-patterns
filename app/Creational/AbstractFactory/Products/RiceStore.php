<?php

namespace App\Creational\AbstractFactory\Products;

use App\Creational\AbstractFactory\Contracts\Store;

class RiceStore implements Store
{
    public function price(string $product): string
    {
        return ucfirst($product) . ' costs 10 RON per kg';
    }
}
