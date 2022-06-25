<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transaksi;
use App\Model;
use App\User;
use App\Menu;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {
    
    $randomNumber = rand(10,100);

    return [
        'siswa_id' => User::inRandomOrder()->first()->id,
        'id_menu' => Menu::inRandomOrder()->first()->id,
        'quantity' => rand(1, 100),
        'price' => rand(1000,10000),
        'sub_total' => rand(1000,10000),
        'total_bayar' => rand(1000,100000),
    ];
});
