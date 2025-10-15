<?php
require __DIR__ . '/../../../vendor/autoload.php';

use App\Creational\FactoryMethod\FactoryMarijuanaGarden;

$garden = new FactoryMarijuanaGarden();
$plants = $garden->grow();

foreach ($plants as $plant) {
    $plant->consume();
}
