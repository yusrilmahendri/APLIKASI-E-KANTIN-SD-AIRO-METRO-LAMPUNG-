<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    protected $table ='saldo';
    protected $fillable = [
        'id','siswa_id','saldo',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
