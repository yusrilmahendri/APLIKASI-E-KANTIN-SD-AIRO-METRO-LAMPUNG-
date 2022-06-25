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
                                <fieldset disabled>   
                                    <input type="text" id="id_menu" name="id_menu"
                                    value="{{ $item->id }}" class="form-control">
                                </fieldset>
                                </td>

                                <td>
                                    <fieldset disabled>
                                    <input type="text" id="name" name="name" 
                                    value="{{ $item->name }}" class="form-control">
                                </fieldset>
                                </td>

                                <td>
                                    <fieldset disabled>
                                    <input type="text" id="price" name="price"
                                    value="{{ $item->price }}" class="form-control">
                                </fieldset>
                                </td>
                            </form>
               
                            <td>
                               <form action="{{ route('shop.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <input type="number" class="form-control" value="{{ $item->quantity }}" 
                                        id="quantity" name="quantity" style="width:70px; margin-left: 15px;">
                                    </div>

                                    <div class="form-group">
                                          <button class="btn btn-secondary">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                    </div>
                               </form>
                            </td>
                            <td>
                                <fieldset disabled> 
                                <input type="text" class="form-control" name="sub_total" id="sub_total"
                                value="{{ \Cart::get($item->id)->getPriceSum() }}">
                            </fieldset>
                            </td>                                      
                            
                            <td>
                                <form action="{{ route('shop.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                  <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                  <button class="btn btn-danger">
                                    <img class="img-fluid" src="{{ asset('images/hapus.png') }}" alt="">
                                    Hapus Menu Dalam Keranjang
                                  </button>
                                </form>
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
                        <fieldset disabled> 
                        <input type="text" value="{{  \Cart::getTotal() }}"
                        name="total_bayar" id="total_bayar" class="form-control">
                    </fieldset>
                    </th>
                </tr>
            @endif                                 
            </tbody>
        </table>
    </div>
  
    <div class="left">
        @if (count($cartCollection) > 0)
        <form action="{{ route('shop.clear') }}" method="POST">
            {{ csrf_field() }}
            <button class="btn btn-danger" style="float:right; margin-right:75px;">
                <img class="img-fluid" src="{{ asset('images/hapus.png') }}" alt="">
                Hapus Semua Menu dikeranjang
           </button>
        </form>
         @endif      
    </div>                     

          
         @if (count($cartCollection) > 0)
             <a type="submit" href="{{ route('transaksi.store') }}" class="btn btn-primary" style="float: right; margin-right:25px;">
                <em class="fa fa-shopping-cart">&nbsp;</em>
                Pembayaran
            </a>
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