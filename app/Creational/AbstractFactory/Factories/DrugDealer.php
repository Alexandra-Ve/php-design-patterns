<?php

namespace App\Creational\AbstractFactory\Factories;

use App\Creational\AbstractFactory\Contracts\GardenMerchant;
use App\Creational\AbstractFactory\Contracts\Garden;
use App\Creational\AbstractFactory\Contracts\Store;
use App\Creational\AbstractFactory\Products\MarijuanaGarden;
use App\Creational\AbstractFactory\Products\MarijuanaStore;

class DrugDealer implements GardenMerchant
{
    public function createStore(): Store
    {
        return new MarijuanaStore();
    }

    public function createGarden(): Garden
    {
        return new MarijuanaGarden();
    }
}
