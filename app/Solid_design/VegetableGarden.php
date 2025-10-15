<?php

namespace App\Solid_design;

use App\Solid_design\GardenGrowable;
use App\Solid_design\GardenFertilizable;
use App\Solid_design\GardenHydratable;

class VegetableGarden implements GardenGrowable, GardenFertilizable, GardenHydratable {
    public function grow($advanceNumberOfDays) {
        return "Vegetables grew by {$advanceNumberOfDays} days!";
    }

    public function fertilize($type, $amount) {
        return "Fertilized with {$amount} units of {$type}.";
    }

    public function water($inGallons) {
        return "Watered with {$inGallons} gallons.";
    }
}
