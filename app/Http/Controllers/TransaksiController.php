<?php

namespace App\Http\Controllers;

use App\Transaksi;
use App\Menu;
use App\Saldo;
use App\User;
use App\Cart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Foundation\Console\Presets\React;

class TransaksiController extends Controller
{

     public function data(){
  
        $transaksi = Transaksi::orderBy('created_at','desc');
        return datatables()->of($transaksi)
        ->addColumn('name', function(Transaksi $model){
            return $model->user->name;
        })
        ->addColumn('nama', function(Transaksi $model){
            return $model->menu->nama;
        })
        ->addColumn('action','admin.transaksi.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaksi.index', [
            'title' => 'Riwayat Transaksi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.transaksi.create', [
            'title' => 'Pembayaran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $saldo = User::where('id', request('siswa_id'))->first();
        $saldoAwal = $saldo->jumlah_saldo;
  
        //cek apakah data saldo masih ada or no ? 
        if($saldoAwal < request('total_bayar')){
            return redirect()->route('shop.index')->with('danger','Maaf jumlah saldo tidak mencukupi');
        }

        $menu = Menu::findOrFail(request('id_menu'));
        $stokAwal = $menu->stock;

        //cek stok apakah masih ada or no ? 
        if($stokAwal < request('quantity')){
            return redirect()->route('shop.index')->with('danger','Maaf jumlah barang tidak mencukupi');
        }


         $transaksi = Transaksi::create([     
            'siswa_id' => $request->siswa_id,
            'id_menu' => $request->id_menu,
            'name' => $request->name,
            'id_menu' => $request->id_menu,
            'nama' => $request->nama,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'sub_total' => $request->sub_total,
            'total_bayar' => $request->total_bayar,
        ]);

         //jika berhasil maka total - jumlah saldo
        $saldo->update([
            'jumlah_saldo' => $saldoAwal - $request->total_bayar,
        ]);

        //jika berhasil maka mengurangi data menu sama dengan jumlah barang
        $menu->update([
            'stock' => $stokAwal - $request->quantity,
        ]);
       
     if($transaksi = true){

        \Cart::clear();
        
           return redirect()->route('transaksi.index')->with('success', 'Transaksi Berhasil');
         }

         return redirect()->route('shop.index')->with('danger', 'Maaf Transaksi Gagal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Request $request, $id){

        $data = Menu::findOrFail($id);
        $editCollection = \Cart::getContent();
      
        
    
        return view('admin.transaksi.edit', [
            'data' => $data,
            'editCollection' => $editCollection,
            'title' => 'Ubah data keranjang',
        ]);
         
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();
        return redirect()->route('transaksi.index')
            ->with('danger', 'Data Berhasil dihapuskan');
    }
}
