<?php

use Illuminate\Database\Seeder;
use App\Riwayat;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Riwayat::class, 1)->create();
    }
}
