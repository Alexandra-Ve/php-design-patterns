<?php

namespace App\Creational\AbstractFactory\Products;

use App\Creational\AbstractFactory\Contracts\Store;

class MarijuanaStore implements Store
{
    public function price(string $product): string
    {
        return ucfirst($product) . ' costs 100 RON per gram';
    }
}
