<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{

     public function data(){
        $pengguna = User::orderBy('created_at','desc');

        return datatables()->of($pengguna)
               ->addColumn('action','admin.pengguna.action')
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
        return view('admin.pengguna.index', [
            'title' => 'Data Pengguna'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengguna.create', [
            'title' => 'Buat Kartu Pengguna'
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
          //validasi form
            $this->validate($request, [
                'id' => 'required|min:2|unique:users',
                'name' => 'required|string|min:3',
                'email' => 'required|email|max:225|unique:users',
                'password' => 'required|min:5',
                'jumlah_saldo' => 'required|min:4',
           ]);
    
            User::create([
                'id' => $request->id,
                'role' => 'pengguna',
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'jumlah_saldo' => $request->jumlah_saldo,
           ]);
    
           return redirect()->route('pengguna.index')
           ->with('success','Data Berhasil ditambahkan');
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
    public function edit(User $pengguna)
    {
        return view('admin.pengguna.edit', [
            'title' => 'Edit Data Pengguna',
            'pengguna' => $pengguna,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $pengguna)
    {
          //kirim data pada inputan form edit
          //validasi form
          $this->validate($request, [
            'password' => 'required|min:5',
       ]);

        $pengguna->update([
            'password' => bcrypt($request->password),
       ]);

        return redirect()
            ->route('pengguna.index')
            ->with('info','Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
