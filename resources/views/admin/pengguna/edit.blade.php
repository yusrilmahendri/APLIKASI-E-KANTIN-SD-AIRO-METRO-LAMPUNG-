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
                    <form action="{{ route('pengguna.update', $pengguna) }}" method="POST">                  
                                                                         
                        @csrf
                        @method("PUT")

                    <div class="form-group @error('name') has-error @enderror">
                        <label for="name">Password</label>
                       <input type="name" class="form-control" 
                           name="name" placeholder="masukan nama" value="{{ old('name') ?? $pengguna->name }}"/>
                        
                        @error('name')
                             <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('password') has-error @enderror">
                        <label for="password">Password</label>
                       <input type="password" class="form-control" 
                           name="password" placeholder="password" value="{{ old('password') ?? $pengguna->password }}"/>
                        
                        @error('password')
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

@stop

