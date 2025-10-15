<?php

use Illuminate\Support\Facades\Route;
use App\Solid_design\EmptyGarden;
use App\Solid_design\RectangleArea;
use App\Solid_design\CircleArea;
use App\Solid_design\MarijuanaGarden;
use App\Solid_design\VegetableGarden;
use App\Solid_design\BadGarden;
use App\Solid_design\GoodGarden;
use App\Creational\AbstractFactory\Factories\DrugDealer;
use App\Creational\AbstractFactory\Factories\RiceFarmer;
use App\Creational\AbstractFactory\ClientSimulator;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/garden', function () {
    // You can test different shapes here:
    $rectangleGarden = new EmptyGarden(new RectangleArea(10, 10));
    $circleGarden = new EmptyGarden(new CircleArea(10));

    return response()->json([
        'rectangle_garden' => $rectangleGarden->items(),
        'circle_garden' => $circleGarden->items(),
    ]);
});

Route::get('/marijuana', function () {
    $garden = new EmptyGarden(new RectangleArea(10, 10));
    // or, if you want to use a circle instead:
    // $garden = new EmptyGarden(new CircleArea(10));

    return response()->json($garden->items());
});

Route::get('/garden/vegetable', function () {
    $garden = new VegetableGarden();
    return response()->json([
        'growth' => $garden->grow(5),
        'fertilizer' => $garden->fertilize('compost', 3),
        'water' => $garden->water(2),
    ]);
});

Route::get('/bad-garden', function () {
    $garden = new BadGarden();
    return response()->json($garden->items());
});

Route::get('/good-garden', function () {
    $garden = app(GoodGarden::class); // Laravel injects dependencies
    return response()->json($garden->items());
});

Route::get('/factory', function () {
    $type = request()->query('type', 'rice');

    $merchant = $type === 'drug'
        ? new DrugDealer()
        : new RiceFarmer();

    return response()->json(ClientSimulator::simulate($merchant));
});
