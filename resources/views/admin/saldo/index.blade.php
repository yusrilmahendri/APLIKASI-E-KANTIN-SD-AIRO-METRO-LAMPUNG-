@extends('admin.templates.default')

@section('content')
     <!-- tabel -->
   <div class="box-body">
         <table class="table table-bordered table-hover" 
         id="dataTable">
              <thead>
                  <tr>
                      <th>Id Siswa</th>
                      <th>Nama</th>
                      <th>Jumlah Isi Saldo</th>
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
                ajax: "{{ route('saldo.data') }}",
                columns: [
                    {data: 'siswa_id'},
                    {data: 'name'},
                    {data: 'saldo'},
                    {data: 'created_at'},
                    {data: 'action'},
                ]
            });
        });
     </script>
@endpush
