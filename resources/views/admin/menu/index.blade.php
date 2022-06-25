@extends('admin.templates.default')

@section('content')

   <!-- tabel -->
    <div class="box-body">
           <table class="table table-bordered table-hover" id="dataTable">
              <thead>
                  <tr>
                      <th>Id Barang</th>
                      <th>Nama Barang</th>
                      <th>Harga</th>
                      <th>Stock</th>
                      <th>Tanggal & Waktu</th>
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
            ajax: "{{ route('menu.data') }}",
            dataSrc: "",
            columns: [
                {data: 'id'},
                {data: 'nama'},
                {data: 'harga'},
                {data: 'stock'},
                {data: 'updated_at'},
                {data: 'action'},
            ]
        });
    });
 </script>
@endpush
