<?php

namespace App\Creational\FactoryMethod;

abstract class Garden
{
    abstract public function harvest();

    public function grow()
    {
        $items = $this->harvest();

        // one plant dies (simulating failure)
        $died = array_shift($items);

        return $items;
    }
}
