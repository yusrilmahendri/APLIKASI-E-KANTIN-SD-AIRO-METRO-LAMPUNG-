<?php

use Illuminate\Database\Seeder;
use App\Transaksi;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Transaksi::class, 1)->create();
    }
}
