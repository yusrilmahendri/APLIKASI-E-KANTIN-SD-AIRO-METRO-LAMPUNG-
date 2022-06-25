<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main">
                                        <div class="main-content">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="panel">
                                           <!-- SEARCH --> 
                            <form class="navbar-form" method="GET" action="/keranjang">
                                <div class="input-group">
                                    <input type="search" name="cari" class="form-control" placeholder="Cari Menu">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                             <div class="fas fa-search"></div>
                                        </button>
                                </div>

                                                    <div class="panel-heading">
                                             
                                     </div>
                                    
                                    <!-- insert data user -->        
                                    <div class="panel-body">
                                      <table class="table table-striped" id="datatable">
                                          <thead>
                                            <tr>
                                               <th>Kode Barang</th>
                                               <th>Nama Barang</th>
                                               <th>Harga</th>
                                               <th>Jumlah</th>
                                               <th>TINDAKAN</th>
                                            </tr>
                                        </thead>
                                     
                                      <tbody>
                                        @foreach ($menu as $menus)
                                            <tr>
                                               <td>{{ $menus->id }}</td>
                                               <td>{{ $menus->nama }}</td>
                                               <td>{{ $menus->harga }}</td>
                                               <td>
                                                <div class="form-group ">
                                                  
                                                   <input type="text" class="form-control" name="saldo" 
                                                       placeholder="jumlah" value="" 
                                                       required autocomplete="saldo" style="width:100px;" autofocus/>                      
                                                </div>
                                               </td>
                                               <td>
                                               <a href="{{ url('/cart/tambah/'. $menus->id) }}" class="btn btn-info" >
                                                <em class="fa fa-shopping-cart">&nbsp;</em> 
                                                Masukan Dalam Keranjang       
                                            </a></td>
                                            </tr>
                                            @endforeach
                                                         </tbody>
                                                      </table>
                                                      <div class="d-flex justify-content-center">
                                                        {!! $menu->links() !!}
                                                     </div>
                                                    </div>
                                                  </div>
                                               </div>
                                            </div>
                                          </div>    
                                        </div>   
                                      </div>