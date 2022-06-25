<?php

namespace App\Http\Controllers;

use App\Saldo;
use App\User;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //custom function or create a widget to make helper
    public function index(Request $request){

        $data = auth()->user();
        
        $x = $data->Saldo->siswa_id;
         
        $transaksi = Transaksi::where('siswa_id', $x)->paginate(10);

        $saldo = Saldo::where('siswa_id', $x)->paginate(10);

                
        return view('siswa.index',[
            'data' => $data,   
            'saldo' => $saldo,
            'transaksi' => $transaksi,
        ]);
    }
}
