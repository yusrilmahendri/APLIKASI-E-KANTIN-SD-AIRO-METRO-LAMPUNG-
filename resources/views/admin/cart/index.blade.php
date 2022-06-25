@extends('admin.templates.default')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

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
                                                @foreach ($menu as $menus)
                                                <tr>
                                                    <td>{{ $menus->id }}</td>
                                                    <td>{{ $menus->nama }}</td>
                                                    <td>{{ $menus->harga }}</td>
                                                    <td>
                                                        <a href="{{ url('/cart/tambah/'. $menus->id) }}" class="btn btn-info">
                                                            <em class="fa fa-shopping-cart">&nbsp;</em>
                                                            Masukan Dalam Keranjang
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-center">
                                            {!! $menu->links() !!}
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