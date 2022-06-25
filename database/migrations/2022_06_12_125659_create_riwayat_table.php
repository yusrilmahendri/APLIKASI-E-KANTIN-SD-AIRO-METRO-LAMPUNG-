<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('siswa_id')->unsigned();
            $table->bigInteger('id_menu')->unsigned();
            $table->integer('jumlah_barang');
            $table->integer('total_bayar');
            $table->enum('status_pembayaran', ['selesai', 'belum']);
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
        Schema::dropIfExists('riwayat');
    }
}
