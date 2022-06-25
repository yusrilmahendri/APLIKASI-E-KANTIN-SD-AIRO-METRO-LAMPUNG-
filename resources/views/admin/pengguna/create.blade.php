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
                    <form action="{{ route('pengguna.store') }}" method="POST">

                        @csrf

                      <div class="form-group @error('id') has-error @enderror">
                        <label for="id">Id Pengguna</label>
                        <input type="text" class="form-control"
                          name="id" placeholder="masukan Id Pengguna"
                          value="{{ old('id') }}" required autocomplete="id" autofocus/>

                         @error('id')
                             <span class="help-block">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="form-group @error('name') has-error @enderror">
                        <label for="name">Name</label>
                        <input type="text" class="form-control"
                          name="name" placeholder="masukan nama"value="{{ old('name') }}" required autocomplete="name" autofocus/>

                         @error('name')
                             <span class="help-block">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="form-group @error('email') has-error @enderror">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"
                          name="email" placeholder="masukan email anda"value="{{ old('email') }}" required autocomplete="email" autofocus/>

                         @error('email')
                             <span class="help-block">{{ $message }}</span>
                         @enderror
                    </div>

                    <div class="form-group @error('password') has-error @enderror">
                        <label for="password">Password</label>
                       <input type="password" class="form-control"
                           name="password" placeholder="password" value="{{ old('password') }}"/>

                        @error('password')
                             <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('jumlah_saldo') has-error @enderror">
                        <label for="jumlah_saldo">Jumlah Saldo</label>
                       <input type="jumlah_saldo" class="form-control"
                           name="jumlah_saldo" placeholder="Masukan Jumlah Saldo" 
                           value="{{ old('jumlah_saldo') }}"/>

                        @error('jumlah_saldo')
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

@endsection()
