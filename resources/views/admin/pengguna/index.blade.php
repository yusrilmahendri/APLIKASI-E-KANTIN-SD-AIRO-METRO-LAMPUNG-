@extends('admin.templates.default')

@section('content')
     <!-- tabel -->
   <div class="box-body">
         <table class="table table-bordered table-hover" 
         id="dataTable">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Jumlah Saldo</th>
                      <th>Tindakan</th>
                  </tr>
              </thead>
          </table>
        </div>
   </div>

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
                ajax: "{{ route('pengguna.data') }}",
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'jumlah_saldo'},
                    {data: 'action'}
                ]
            });
        });
     </script>
@endpush
