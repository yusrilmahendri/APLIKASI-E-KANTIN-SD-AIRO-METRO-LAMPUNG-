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
                    <form action="{{ route('saldo.store') }}" method="POST">

                        @csrf

                    <div class="form-group @error('siswa_id') has-error @enderror">
                      <label for="siswa_id">Id Pengguna</label>
                        <input type="text" class="form-control" id="siswa_id" onKeyup="autofill()"
                            name="siswa_id" placeholder="masukan id pengguna"
                            value="{{ old('siswa_id') }}" required autocomplete="siswa_id" autofocus/>

                            @error('siswa_id')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group @error('name') has-error @enderror">
                      <label for="name">Nama Pengguna</label>
                        <input type="text" class="form-control"
                            name="name" placeholder="masukan nama pengguna" id="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus/>

                            @error('name')
                                <span class="help-block">{{ $message }}</span>
                            @enderror
                    </div>

                    <div class="form-group @error('saldo') has-error @enderror">
                        <label for="saldo">Jumlah Isi Saldo</label>
                       <input type="text" class="form-control" name="saldo" 
                           placeholder="jumlah saldo" value="{{ old('saldo') }}" 
                           required autocomplete="saldo" autofocus/>

                        @error('saldo')
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

          </div>
        </div>
    </div>
</div>

<script type="text/javascript">    
  function autofill(){
        var siswa_id = $("#siswa_id").val();
           $.ajax({
              url:  "{{ route('saldo.cari') }}",
              data: 'siswa_id='+siswa_id,
        }).success(function(data){
              $("#name").val(data.name);
        });
    }
</script>
