<?php

namespace App\Creational\AbstractFactory\Factories;

use App\Creational\AbstractFactory\Contracts\GardenMerchant;
use App\Creational\AbstractFactory\Contracts\Garden;
use App\Creational\AbstractFactory\Contracts\Store;
use App\Creational\AbstractFactory\Products\RiceGarden;
use App\Creational\AbstractFactory\Products\RiceStore;

class RiceFarmer implements GardenMerchant
{
    public function createStore(): Store
    {
        return new RiceStore();
    }

    public function createGarden(): Garden
    {
        return new RiceGarden();
    }
}
