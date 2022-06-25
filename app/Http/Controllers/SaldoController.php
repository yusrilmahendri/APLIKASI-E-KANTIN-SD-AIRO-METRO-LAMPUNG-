<?php

namespace App\Http\Controllers;

use App\Saldo;
use App\User;
use Illuminate\Http\Request;

class SaldoController extends Controller
{

      public function data(){
        
        $saldo = Saldo::orderBy('created_at','desc');

        return datatables()->of($saldo)

        //mengambil data yang direlasi pada tabel user
            ->addColumn('name', function(Saldo $model){
                return $model->user->name;
            })
            ->addColumn('action','admin.saldo.action')
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
        return view('admin.saldo.index',[
            'title' => 'Riwayat Isi Saldo'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.saldo.create', [
            'title' => 'Isi Saldo'
        ]);
    }

      //parsing data bentuk json dan di panggil pada auto fil
      public function cari(Request $request){
        //menampilkan data create pada top up saldo
        $siswa_id = User::where('id','LIKE',
        '%'.$request->siswa_id.'%')->first();

        return response()->json($siswa_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //validasi form
        $this->validate($request, [
            'siswa_id' => 'required|min:1',
            'name' => 'required|min:2|string',
            'saldo' => 'required|min:4|max:7',
       ]);
    
        //ambil dulu data saldo
        $saldo_lama = User::where('id', request('siswa_id'))->first();

        Saldo::create([
            'siswa_id' => $request->siswa_id,
            'name' => $request->name,
            'saldo' => $request->saldo,
        ]);

         $saldo_baru = $saldo_lama->jumlah_saldo;
         $saldo_lama->update([
            'jumlah_saldo' => $saldo_baru + request('saldo')
        ]);
    
        return redirect()->route('saldo.index')->with('success','Berhasil Isi Saldo');
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
    public function edit($id)
    {
        //
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
    public function destroy(Saldo $saldo){

        $saldo->delete();
        return redirect()->route('saldo.index')
        ->with('danger','Data Saldo Berhasil dihapuskan');
    }
}
