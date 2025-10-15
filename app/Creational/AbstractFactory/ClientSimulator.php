<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\Contracts\GardenMerchant;

class ClientSimulator
{
    public static function simulate(GardenMerchant $merchant): array
    {
        $store = $merchant->createStore();
        $garden = $merchant->createGarden();

        $items = $garden->items();
        $product = $items[0] ?? 'unknown';

        return [
            'items' => $items,
            'pricing' => $store->price($product),
        ];
    }
}
