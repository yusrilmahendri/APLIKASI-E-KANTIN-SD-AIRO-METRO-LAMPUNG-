<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->numberBetween(2, 100),
        'nama' => $faker->name,
        'harga' => rand(1000, 100000),
        'stock' => rand(1, 100),
    ];
});
