<?php

namespace App;

use App\Transaksi;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'id', 'nama', 'harga', 'stock',
    ];

     public function transaksi()
    { return $this->hasMany(Transaksi::class, 'id'); }
}
