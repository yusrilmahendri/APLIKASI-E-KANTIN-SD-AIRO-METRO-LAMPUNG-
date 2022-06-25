<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('siswa_id')->unsigned();
            $table->bigInteger('id_menu')->unsigned();
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('sub_total');
            $table->integer('total_bayar');
            $table->timestamps();

            $table->foreign('id_menu')
                ->references('id')->on('menu')
                ->onDelete('CASCADE');
               
            $table->foreign('siswa_id')
                ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
