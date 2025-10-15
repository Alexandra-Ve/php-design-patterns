<?php

namespace App\Creational\FactoryMethod;

class FactoryMarijuanaGarden extends Garden
{
    public function harvest()
    {
        return [new MarijuanaPlant(), new MarijuanaPlant()];
    }
}
