<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<footer class="pt-4 pb-4 text-muted text-center d-print-none">
  <div class="container">
     <div class="my-3"> 
        <div class="h3">RIWAYAT BELANJA & ISI SALDO</div>
        <div class="h5">  {{ $data->name  }} </div>
          <div class="footer-nav">
</footer>



<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Riwayat Belanja 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="box-body">
      <div class="table-responsive">
         <table class="table table-bordered table-hover text-center"  id="dataTable">
              <thead>
                  <tr>
                      <th >Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Harga Barang</th>
                      <th>Jumlah Barang</th>
                      <th>Total Belanja</th>
                      <th>Tanggal Belanja</th>
                  </tr>
              </thead>

              @foreach ($transaksi as $x)
              <tr>
                <td>{{ $x->id }}</td>
                <td>{{ $x->menu->nama }}</td>
                <td>Rp. {{ $x->price }}</td>
                <td>{{ $x->quantity }}</td>
                <td>Rp. {{ $x->total_bayar }}</td>
                <td>{{ $x->created_at }}</td>
            </tr>
              @endforeach
        
          </table>
        </div>
   </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Riwayat Isi Saldo
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <div class="table-responsive">
         <table class="table table-bordered table-hover text-center"  id="dataTable">
              <thead>
                  <tr>
                      <th >Tanggal Isi Saldo</th>
                      <th>Jumlah Isi Saldo</th>
                  </tr>
              </thead>
              
            @foreach ($saldo as $item)
            <tr>
              <td> {{ $item->created_at }}</td>
              <td>Rp. {{ $item->saldo }}</td>
             </tr>
            @endforeach
            
          
              
          </table>
        </div>
    </div>
  </div>

</div>
<br>
<p><p><p><p><p><p><p><p><p><p><p><p>
    <br>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{ asset('backend/scripts/mdb.min.js?ver=1.2.1')}}"></script>
    <script src="{{ asset('backend/scripts/aos.js?ver=1.2.1')}}"></script>
    <script src="{{ asset('backend/scripts/main.js?ver=1.2.1')}}"></script>

    <!-- Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>