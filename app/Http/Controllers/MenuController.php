<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Transaksi;
use Illuminate\Http\Request;

class MenuController extends Controller
{

     public function data()
    {
        $menu = Menu::orderBy('created_at', 'desc');

        return datatables()->of($menu)

            //addColumn = tindakan yang mana perintahnya terdapat pada pengguna.action
            ->addColumn('action', 'admin.menu.action')
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
        return view('admin.menu.index', [
            'title' => 'Data Menu & Barang'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.create', [
            'title' => 'Tambah Barang'
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
            'id' => 'required|min:1|unique:menu',
            'nama' => 'required|string|min:2|max:255',
            'harga' => 'required|min:1',
            'stock' => 'required|min:1',
        ]);

        Menu::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('menu.index')
            ->with('success', 'Barang Berhasil ditambakan');
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
    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', [
            'title' => 'Edit Data Barang',
            'menu' => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, Menu $menu)
    {
        //validasi form
        $this->validate($request, [
            'id' => 'required|min:1',
            'nama' => 'required|string|min:2|max:255',
            'harga' => 'required|min:2',
            'stock' => 'required|min:1',
        ]);

        $menu->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()
            ->route('menu.index')
            ->with('info', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Menu $menu)
    {
        
        $menu->delete();
     
        return redirect()
                ->route('menu.index')
                ->with('danger','Data Barang Berhasil dihapuskan');
    }
}
