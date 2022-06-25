<?php

namespace App;

use App\Menu;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = [
        'id','siswa_id','id_menu','quantity','price','sub_total', 'total_bayar',
    ];

     public function menu()
    { return $this->belongsTo(Menu::class,'id_menu'); }

    public function user()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }
}
