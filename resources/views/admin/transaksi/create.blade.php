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

          @if(session('alert'))
            <div class="alert alert-danger" role="alert">
              <button type="button" class="close"
                data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            {{ session('alert') }}
            </div>
          @endif

    <form action="{{ route('transaksi.store') }}" method="POST">

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

    <div class="card">
      <div class="card-header">
        <i class="icon-3deffects">Transaksi Kantin</i>
    </div>

    <div class="panel-body">
       <table class="table table-striped" id="tabel-update-part">
        <tbody>
          <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah Barang</th>
          </tr>

    <tr>
        <div class="after-add-more"> 
            <td>
               <div class="form-group @error('id_menu') has-error @enderror">
                    <input name="id_menu" id="id_menu" onKeyup="auto()"
                      type="text" required autocomplete="id_menu" autofocus/>
                        @error('id_menu')
                            <span class="help-block">{{ $message }}</span>
                        @enderror
                </div>
            </td>

            <td>
                <div class="form-group @error('nama') has-error @enderror">
                <input name="nama" id="nama" type="text"
                    required autocomplete="nama" autofocus/>
                      @error('nama')
                          <span class="help-block">{{ $message }}</span>
                      @enderror
                </div>
            </td>

            <td>
              <div class="form-group @error('harga') has-error @enderror">
                 <input name="harga" id="harga" type="text"
                 required autocomplete="harga" autofocus onkeyup="hitung2()"/>
                    @error('harga')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>
            </td>

            <td>
              <div class="form-group @error('jumlah_barang') has-error @enderror">
                <input name="jumlah_barang"  type="text"
                  id="jumlah_barang" required autocomplete="jumlah_barang" autofocus onkeyup="hitung2()"/>
                       @error('jumlah_barang')
                           <span class="help-block">{{ $message }}</span>
                       @enderror
               </div>
            </td>
          </tr>
      </tbody>

    </table>
      <div class="d-flex justify-content-center">
            </div>
          </div>
      </div>
  </div
</div>

    <div class="col-sm-3">
     <button type="submit" class="btn btn-primary btn-lg">
        Bayar
      </button>
  </form>
              </div>
          </div>
        </div>
    </div>
  </div
</div>

@endsection

    <!-- boostrap notify -->
     <script src="{{ asset('backend/js/bs-notify.min.js') }}">
     </script>

    <!-- alertnya boostrap notify -->
    @include('admin.templates.partials.alerts')

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

    function auto(){
        var id_menu = $("#id_menu").val();
        $.ajax({
              url:  "{{ route('transaksi.cari') }}",
              data: 'id_menu='+id_menu,
        }).success(function(data){
            $("#nama").val(data.nama);
            $("#harga").val(data.harga);
        });
    }

    function hitung2(){
        var a = $("#harga").val();
        var b = $("#jumlah_barang").val();
        c = a * b;
        $("#total_bayar").val(c);
    }
</script>
