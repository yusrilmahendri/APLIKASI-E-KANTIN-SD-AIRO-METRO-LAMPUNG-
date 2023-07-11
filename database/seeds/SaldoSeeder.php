<?php

use Illuminate\Database\Seeder;
use App\Saldo;

class SaldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Saldo::class, 1)->create();
    }
}
