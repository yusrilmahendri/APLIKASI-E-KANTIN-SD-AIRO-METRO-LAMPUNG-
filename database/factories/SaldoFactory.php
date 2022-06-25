<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Saldo;
use App\User;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Saldo::class, function (Faker $faker) {
    return [
        'siswa_id' => User::inRandomOrder()->first()->id,
        'saldo' => rand(1000, 100000),
    ];
});
