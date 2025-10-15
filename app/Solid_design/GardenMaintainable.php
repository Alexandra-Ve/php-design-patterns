<?php

namespace App\Solid_design;

interface GardenMaintainable {
    public function weed($pickOutPercentage);
    public function pestAttack($attackFactor);
}
