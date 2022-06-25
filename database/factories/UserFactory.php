<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'id' => '1',
        'role' => 'admin',
        'name' => 'admin',
        'email' => 'AdminKantin@Ekantin.com',
        'email_verified_at' => now(),
        'password' => bcrypt('Ekantinsdairo123'),
        'remember_token' => Str::random(10),
    ];
});
