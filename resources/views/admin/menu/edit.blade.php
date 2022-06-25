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
                 <form action="{{ route('menu.update', $menu) }}" method="POST"> 
                        @csrf
                        @method("PUT")

                    <div class="form-group @error('id') has-error @enderror">
                      <label for="id">Kode Barang</label>
                        <input type="text" class="form-control"
                            name="id" placeholder="masukan Kode Barang"value="{{ old('id') ?? $menu->id }}" required autocomplete="id" autofocus/>

                            @error('id')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="nama">Nama Barang</label>
                        <input type="text" class="form-control"
                          name="nama" placeholder="masukan nama barang"value="{{ old('nama') ?? $menu->nama }}" required autocomplete="name" autofocus/>

                         @error('nama')
                             <span class="help-block">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                       
                       <input type="text" class="form-control @error('harga') has-error @enderror"
                           name="harga" placeholder="masukan harga barang" value="{{ old('harga') ?? $menu->harga }}"/>

                        @error('harga')
                             <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('stock') has-error @enderror">
                        <label for="stock">Stock Barang</label>
                       <input type="text" class="form-control"
                           name="stock" placeholder="stock barang" value="{{ old('stock') ?? $menu->stock }}"/>

                        @error('stock')
                             <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                <button type="submit" class="btn btn-primary">
                        Submit
                </button>

              </form>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection



            </div>
        </div>
    </div>
</div>
