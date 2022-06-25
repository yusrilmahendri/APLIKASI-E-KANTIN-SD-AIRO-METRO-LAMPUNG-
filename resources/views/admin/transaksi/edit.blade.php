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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($editCollection as $item)
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
                           
               
                                <td>
                                    
                                    <form action="{{ route('shop.update') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                           
                                            <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                            <input type="number" class="form-control" value="{{ $item->quantity }}" 
                                            id="quantity" name="quantity" style="width:70px; margin-left: 15px; text-align:center;">
                                          
                                        </div>
                                 
                                 
   
                                  <td>
                                        <button class="btn btn-warning">
                                            <img class="img-fluid" src="{{ asset('images/edit.png') }}" alt="">
                                             Setuju Data keranjang diubah
                                        </button>
                                  
                                  </td>

                                  </form>
                               </td>
                        </tr>
                        @endforeach
            </tbody>
        </table>
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