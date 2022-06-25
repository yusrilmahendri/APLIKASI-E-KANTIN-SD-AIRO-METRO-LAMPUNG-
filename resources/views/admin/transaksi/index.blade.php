@extends('admin.templates.default')

@section('content')

   <!-- tabel -->
   <div class="box-body">
           <table class="table table-bordered table-hover" 
           id="dataTable">
              <thead>
                  <tr>
                      <th>Id Pengguna</th>
                      <th>Nama Pengguna</th>
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Total Transaksi</th>
                      <th>Tanggal & Waktu </th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
          </table>
        </div>
   </div>

    <!-- trigger pada menghapus data pengguna -->
    <form action="" method="post" id="deleteForm">
             @csrf
             @method("DELETE")
             <input type="submit" value="Hapus" 
             style="display: none ">
    </form>
    
@endsection()

@push('scripts')
     
     <!-- boostrap notify -->
     <script src="{{ asset('js/bs-notify.min.js') }}">
     </script>
    
    <!-- alertnya boostrap notify -->
    @include('admin.templates.partials.alerts')


 <script>
    $(function(){
        $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('transaksi.data') }}",
            dataSrc: "",
            columns: [
                {data: 'siswa_id'},
                {data: 'name'},
                {data: 'id_menu'},
                {data: 'nama'},
                {data: 'quantity'},
                {data: 'total_bayar'},
                {data: 'created_at'},
                {data: 'action'}
            ]
        });
    });
 </script>
@endpush
