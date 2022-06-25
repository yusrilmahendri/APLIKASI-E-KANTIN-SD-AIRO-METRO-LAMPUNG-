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

                                    <form action="{{ route('transaksi.store') }}" method="post">
                                      
                                       @csrf
                                       
                                    <div class="form-group @error('siswa_id') has-error @enderror">
                                        <label for="siswa_id">Id Pengguna</label>
                                        <input type="text" class="form-control" id="siswa_id" onKeyup="autofill()" name="siswa_id" placeholder="masukan id pengguna" value="{{ old('siswa_id') }}" required autocomplete="siswa_id" autofocus /> 
                                        @error('siswa_id')
                                        <span class="help-block">{{ $message }}</span> 
                                        @enderror
                                    </div>

                                    <div class="form-group @error('name') has-error @enderror">
                                        <label for="name">Nama Pengguna</label>
                                        <input type="text" class="form-control" name="name" placeholder="masukan nama pengguna" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                                        @error('name')
                                        <span class="help-block">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
 <div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="left">
                                        <a href="{{ url('/shop') }}"  class="btn btn-primary" 
                                        style="float:right; margin-right:80px; margin-top:50px;">
                                        <em class="fa fa-shopping-cart">&nbsp;</em>
                                            Tambah Keranjang
                                        </a>
                                    </div>
        @if(\Cart::getTotalQuantity() > 0)
            <h4>
                {{ \Cart::getTotalQuantity() }} 
                Menu Barang yang ada dikeranjang  
            </h4><br>
        @else
            <h3>Tidak ada menu barang dikeranjang</h3>
        @endif

        <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Sub Total</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cartCollection as $item)
                        <tr>
                             
                                <td>   
                                
                                    <input type="text" id="id_menu" name="id_menu"
                                    value="{{ $item->id }}" class="form-control"  required autocomplete="id_menu" autofocus>
                             
                                </td>

                                <td>
                                  
                                    <input type="text" id="nama" name="nama" 
                                    value="{{ $item->name }}" class="form-control"  required autocomplete="nama" autofocus>
                              
                                </td>

                                <td>
                                   
                                    <input type="text" id="price" name="price"
                                    value="{{ $item->price }}" class="form-control" style="text-align: center;"  required autocomplete="price" autofocus>
                             
                                </td>
                           
               
                            <td>
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="text" class="form-control" value="{{ $item->quantity }}" 
                                        id="quantity" name="quantity" style="width:70px; margin-left: 15px;"  required autocomplete="quantity" autofocus>
                                    </div>

                                    <div class="form-group">
                                     
                                        <div class="form-group">
                                    <a href="/data/{{$item->id}}/edit" class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                      </div>
                                    </div>
                          

                            </td>
                            <td>
                               
                                <input type="text" class="form-control" name="sub_total" id="sub_total"
                                value="{{ \Cart::get($item->id)->getPriceSum() }}" style="text-align: center;"  required autocomplete="sub_total" autofocus>
                          
                            </td>                                      
                            
                            <td> <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                  
                                 <a href="#" type="button" class="btn btn-danger btn-sm delete" card-id ="{{ $item->id }}"> <img class="img-fluid" src="{{ asset('images/hapus.png') }}" alt="">
                                    Hapus Menu Dalam Keranjang</a>
                            </td>
                        </tr>
                    @endforeach
            @if(count($cartCollection) > 0)
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total Pembayaran</th>
                    <th>
                       
                        <input type="text" value="{{  \Cart::getTotal() }}"
                        name="total_bayar" id="total_bayar" class="form-control" style="text-align: center;"  required autocomplete="total_bayar" autofocus>
                   
                    </th>
                </tr>
            @endif                                 
            </tbody>
        </table>
    </div>
  
   

          
         @if (count($cartCollection) > 0)
             <div class="form-group" style="text-align:center;">
                 <button class="btn btn-primary">
                    <em class="fa fa-shopping-cart">&nbsp;</em>Pembayaran
                </button>
            </div>
         @endif

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
                </form>
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
@include('admin.shoping.action')
<!-- alertnya boostrap notify -->
@include('admin.templates.partials.alerts')
@endpush