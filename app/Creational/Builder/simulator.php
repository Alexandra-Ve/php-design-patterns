<?php

require __DIR__ . '/../../../vendor/autoload.php';

use App\Creational\Builder\Architect;
use App\Creational\Builder\NoviceCarpenter;
use App\Creational\Builder\ExpertCarpenter;

$director = new Architect();

$builder1 = new NoviceCarpenter();
$builder2 = new ExpertCarpenter();

$director->createMyOldHouse($builder1);
$director->createMyOldHouse($builder2);

echo "-- Novice Carpenter --" . PHP_EOL;
echo $builder1->getHouse();

echo "-- Expert Carpenter --" . PHP_EOL;
echo $builder2->getHouse();
