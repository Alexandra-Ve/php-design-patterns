<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Solid_design\PlotArea;
use App\Solid_design\RectangleArea;
use App\Solid_design\CircleArea;

class GardenServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Dynamically choose implementation based on config or route
        $this->app->bind(PlotArea::class, function ($app) {
            $shape = request()->query('shape', 'rectangle'); // ?shape=circle or ?shape=rectangle

            if ($shape === 'circle') {
                return new CircleArea(10); // radius = 10
            }

            return new RectangleArea(10, 10); // default
        });
    }

    public function boot(): void
    {
        //
    }
}
