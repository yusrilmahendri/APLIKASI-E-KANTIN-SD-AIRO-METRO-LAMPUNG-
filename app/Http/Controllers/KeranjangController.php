<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Cart;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Foundation\Console\Presets\React;

class KeranjangController extends Controller
{
    public function shop(Request $request)
    {
        if ($request->has('cari')) {
            $cart = Menu::where('id', 'LIKE', '%' . $request->cari . '%')->paginate(5);
        } else {
            $cart =  Menu::orderBy('created_at', 'desc')->paginate(5);
        }

        return view('admin.shoping.shop', [
            'cart' => $cart,
        ]);
    }

    public function cart()
    {
        $cart = session("cart");

        $cartCollection = \Cart::getContent();
        return view('admin.shoping.cart')->with([
            'cartCollection' => $cartCollection
        ]);
    }

    public function add(Request $request)
    {
        \Cart::add(array(
            'id' => $request->id_menu,
            'name' => $request->nama,
            'price' => $request->harga,
            'quantity' => $request->quantity,
        ));
        return redirect()->route('shop.index')->with('success', 'Menu Berhasil dimasuk Dalam Keranjang');
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('shop.index')->with('danger', 'Menu Dalam Keranjang Berhasil dihapuskan');
    }

  
    public function update(Request $request)
    {
        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
        ));
        return redirect()->route('shop.index')->with('info', 'Keranjang Berhasil diubah');
    }

    public function clear()
    {
        \Cart::clear();
        return redirect()->route('shop.index')->with('danger', 'Semua Menu Dalam Keranjang Berhasil dihapuskan');
    }
}
