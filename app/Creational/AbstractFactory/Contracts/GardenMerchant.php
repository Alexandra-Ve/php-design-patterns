<?php

namespace App\Creational\AbstractFactory\Contracts;

interface GardenMerchant
{
    public function createStore(): Store;
    public function createGarden(): Garden;
}
