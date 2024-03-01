<?php

use App\Models\Estate;
use MatanYadaev\EloquentSpatial\Objects\Point;

test('coordinates have to be not dirty on factory create', function () {
    $estate = Estate::factory()
        ->create();

    expect($estate->isDirty('name'))->toBeFalse();

    expect($estate->isDirty('coordinates'))->toBeFalse();
});


test('coordinates have to be not dirty on create', function () {
    $estate = Estate::create([
        'name' => 'Foo',
        'coordinates' => new Point(51.5032973, -0.1217424),
    ]);

    expect($estate->isDirty('name'))->toBeFalse();

    expect($estate->isDirty('coordinates'))->toBeFalse();
});
