<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(SaldoSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(TransaksiSeeder::class);
        $this->call(RiwayatSeeder::class);
    }
}
