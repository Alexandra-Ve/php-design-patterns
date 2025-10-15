<?php

namespace App\Creational\AbstractFactory\Contracts;

interface Store
{
    public function price(string $product): string;
}
