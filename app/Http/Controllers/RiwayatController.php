<?php

namespace App\Http\Controllers;

use App\Riwayat;
use App\User;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function data(){
  
        $transaksi = Riwayat::orderBy('created_at','desc');
        return datatables()->of($transaksi)
        ->addColumn('name', function(Riwayat $model){
            return $model->user->name;
        })
        ->addColumn('nama', function(Riwayat $model){
            return $model->menu->nama;
        })
        ->addIndexColumn()
        ->toJson();
    }

     public function index()
    {
        return view('admin.riwayat.index', [
            'title' => 'Riwayat Transaksi Sebelumnya'
        ]);
    }
}
