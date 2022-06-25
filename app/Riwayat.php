<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\User;

class Riwayat extends Model
{
     protected $table = "riwayat";
    protected $fillable = [
        'id','siswa_id','id_menu','jumlah_barang','total_bayar','status_pembayaran',
    ];

      public function menu()
    { return $this->belongsTo(Menu::class,'id_menu'); }

    public function user()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }
}
