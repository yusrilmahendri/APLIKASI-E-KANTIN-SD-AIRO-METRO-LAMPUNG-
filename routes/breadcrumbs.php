<?php



//home yakni dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
});

//read pengguna
Breadcrumbs::for('pengguna.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Data Pengguna', route('pengguna.index'));
});

//Buat kartu data pengguna
Breadcrumbs::for('pengguna.create', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Data Pengguna', route('pengguna.index'));
    $trail->push('Buat Kartu Pengguna', route('pengguna.create'));
});

//read saldo
Breadcrumbs::for('saldo.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Isi Saldo', route('saldo.index'));
});

//isi saldo
Breadcrumbs::for('saldo.create', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Isi Saldo', route('saldo.index'));
    $trail->push('Isi Saldo', route('saldo.create'));
});

//edit data pengguna
Breadcrumbs::for('pengguna.edit', function ($trail, $pengguna) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Data Pengguna', route('pengguna.index'));
    $trail->push('Edit Data Pengguna', route('pengguna.edit', $pengguna));
});

//read Barang
Breadcrumbs::for('menu.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Data Barang', route('menu.index'));
});

//tambah barang
Breadcrumbs::for('menu.create', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Data Barang', route('menu.index'));
    $trail->push('Tambah Barang', route('menu.create'));
});

//edit data menu prodak
Breadcrumbs::for('menu.edit', function ($trail, $menu) {
    $trail->push('Beranda', route('dashboard'));
    $trail->push('Data Barang', route('menu.index'));
    $trail->push('Edit Data Barang', route('menu.edit', $menu));
});

//cart keranjang transaksi 
Breadcrumbs::for('keranjang.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Belanja', route('keranjang.index'));
});

Breadcrumbs::for('cart.cart', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Keranjang Saya', route('cart.cart'));
});

// shoping
Breadcrumbs::for('shop.shop', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Belanja', route('shop.shop'));
});

Breadcrumbs::for('shop.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Keranjang saya', route('shop.index'));
});

Breadcrumbs::for('shop.edit', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Ubah Keranjang saya', route('shop.edit'));
});

Breadcrumbs::for('transaksi.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Transaksi', route('transaksi.index'));
});

//read data transaksi
Breadcrumbs::for('transaksi.create', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Transaksi', route('transaksi.index'));
    $trail->push('Pembayaran', route('transaksi.create'));
});

Breadcrumbs::for('transaksi.edit', function ($trail, $transaksi) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Transaksi', route('transaksi.index'));
    $trail->push('Pembayaran', route('transaksi.create'));
    $trail->push('Ubah Data Keranjang', route('transaksi.edit', $transaksi));
});

//read riwayat sebelumnya
Breadcrumbs::for('riwayat.index', function ($trail) {
    $trail->push('Dashboard', route('dashboard'));
    $trail->push('Riwayat Sebelumnya', route('riwayat.index'));
});