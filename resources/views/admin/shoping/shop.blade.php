@extends('admin.templates.default')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                             <!-- SEARCH --> 
                             <div class="container navbar-right" >
                             <form class="navbar-form navbar-right" method="GET" action="{{ route('shop.shop') }}">
                                <div class="input-group">
                                    <input type="search" name="cari" class="form-control" placeholder="Cari Menu">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                             <img class="img-fluid" src="{{ asset('images/src.png') }}" alt="">
                                        </button>
                                </div>
                             </form>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="badge badge-pill badge-dark" 
                                    style="float: right; margin-right:100px;">
                                        <i class="fa  fa-shopping-cart"></i>  {{ \Cart::getTotalQuantity() }} 
                                    </span>
                                    <div class="panel-body">
                                        <table class="table table-striped" id="datatable">
                                            <thead>
                                                <tr>
                                                    <th>Kode Barang</th>
                                                    <th>Nama Barang</th>
                                                    <th>Harga</th>
                                                    <th>Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cart as $menu)
                                                <tr>
                                                    <td>{{ $menu->id }}</td>
                                                    <td>{{ $menu->nama }}</td>
                                                    <td>{{ $menu->harga }}</td>
                                                    <td>
                                                        <form action="{{ route('shop.store') }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" value="{{ $menu->id }}" id="id_menu" name="id_menu">
                                                            <input type="hidden" value="{{ $menu->nama }}" id="nama" name="nama">
                                                            <input type="hidden" value="{{ $menu->harga }}" id="harga" name="harga">
                                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                                            <button class="btn btn-info">
                                                                <i class="fa fa-shopping-cart"></i> Masuk Dalam Keranjang
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            {!! $cart->links() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection



<!-- script js -->
@include('admin.cart.perintah')

@push('scripts')

<!-- boostrap notify -->
<script src="{{ asset('js/bs-notify.min.js') }}"></script>

<!-- alertnya boostrap notify -->
@include('admin.templates.partials.alerts')
@endpush