<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Riwayat;
use Faker\Generator as Faker;
use App\User;
use App\Menu;

$factory->define(Riwayat::class, function (Faker $faker) {

    $randomNumber = rand(10,100);

    return [
        'siswa_id' => User::inRandomOrder()->first()->id,
        'id_menu' => Menu::inRandomOrder()->first()->id,
        'jumlah_barang' => rand(1, 100),
        'total_bayar' => rand(1000,100000),
        'status_pembayaran' => 'selesai',
    ];
});
