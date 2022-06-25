<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'AuthController@login')
    ->name('login');

Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');


Route::group(
    ['middleware' => ['auth', 'checkRole:admin']],
    function () {

        Route::get('/dashboard', 'DashboardController@index')
            ->name('dashboard');
        Route::get('/api/pengguna/data', 'PenggunaController@data')
            ->name('pengguna.data');
        Route::resource('pengguna', PenggunaController::class);

        Route::get('/api/saldo/data', 'SaldoController@data')
            ->name('saldo.data');
        Route::get('/api/saldo/cari', 'SaldoController@cari')
            ->name('saldo.cari');
        Route::resource('saldo', SaldoController::class);

        Route::get('/api/menu/data', 'MenuController@data')
            ->name('menu.data');
        Route::resource('menu', MenuController::class);

        Route::get('/shop', 'KeranjangController@shop')->name('shop.shop');
        Route::get('/cart', 'KeranjangController@cart')->name('shop.index');
        Route::post('/add', 'KeranjangController@add')->name('shop.store');

        Route::get('/data/{id}/edit', 'TransaksiController@edit')->name('transaksi.edit');

        Route::post('/update', 'KeranjangController@update')->name('shop.update');
        Route::get('/remove/{id}/delete', 'KeranjangController@remove')->name('shop.remove');
        
        Route::post('/clear', 'KeranjangController@clear')->name('shop.clear');
        
        Route::post('/transaksi/create', 'TransaksiController@store')->name('transaksi.store');

        Route::get('/api/transaksi/data', 'TransaksiController@data')->name('transaksi.data');
        Route::get('/api/transaksi/cari', 'TransaksiController@cari')
            ->name('transaksi.cari');

        Route::resource('transaksi', TransaksiController::class);

        Route::get('/api/riwayat/data', 'RiwayatController@data')->name('riwayat.data');
        Route::get('/riwayat', 'RiwayatController@index')->name('riwayat.index');
    }
);


//hak akses pengguna e kantin
Route::group(
    ['middleware' => ['auth', 'checkRole:pengguna']],
    function () {

        Route::get('/home', 'HomeController@index')->name('home.index');

   
    }
);