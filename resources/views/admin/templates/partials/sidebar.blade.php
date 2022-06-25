<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
		<div class="profile-userpic">
			<img src="{{ asset('../images/default.jpg') }}" class="img-responsive" alt="#">
		</div>
		<div class="profile-usertitle">
			<div class="profile-usertitle-name" style="margin-top:10px;">
				Admin</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="divider"></div>
	<ul class="nav menu">

		<li class="active">
			<a href="{{ url('/dashboard') }}">
				<em class="fa fa-dashboard">&nbsp;</em>
				Dashboard</a>
		</li>

		<li class="parent ">
			<a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-users">&nbsp;</em>
				Pengguna
				<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right">
					<em class="fa fa-plus"></em></span>
			</a>

			<ul class="children collapse" id="sub-item-1">
				<li>
					<a class="#" href="{{ url('/pengguna') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Data Pengguna
					</a>
				</li>

				<li>
					<a class="" href="{{ url('/pengguna/create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Buat Kartu Pengguna
					</a>
				</li>
			</ul>
		</li>

		<li class="parent ">
			<a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-money">&nbsp;</em>
				Saldo
				<span data-toggle="collapse" href="#sub-item-2" class="icon pull-right">
					<em class="fa fa-plus"></em></span>
			</a>

			<ul class="children collapse" id="sub-item-2">
				<li>
					<a class="#" href="{{ url('/saldo') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Riwayat Isi Saldo
					</a>
				</li>

				<li>
					<a class="#" href="{{ url('/saldo/create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Isi Saldo
					</a>
				</li>
			</ul>
		</li>

		<li class="parent ">
			<a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em>
				Menu &amp; Barang
				<span data-toggle="collapse" href="#sub-item-3" class="icon pull-right">
					<em class="fa fa-plus"></em></span>
			</a>

			<ul class="children collapse" id="sub-item-3">
				<li>
					<a class="#" href="{{ url('/menu') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Data Barang
					</a>
				</li>

				<li>
					<a class="#" href="{{ url('/menu/create') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Tambah Barang
					</a>
				</li>
			</ul>
		</li>

		<li class="parent ">
			<a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-shopping-cart">&nbsp;</em>
				Transaksi
				<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right">
					<em class="fa fa-plus"></em></span>
			</a>

			<ul class="children collapse" id="sub-item-4">
				
				<li>
					<a class="" href="{{ url('/riwayat') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Riwayat Sebelumnya
					</a>
				</li>

				<li>
					<a class="" href="{{ url('/transaksi') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Riwayat Transaksi
					</a>
				</li>

				<li>
					<a class="" href="{{ url('/cart') }}">
						<span class="fa fa-arrow-right">&nbsp;</span>
						Belanja
					</a>
				</li>
			</ul>
		</li>

		<li>
			<a href="{{ url('/logout') }}">
				<em class="fa fa-power-off">&nbsp;</em>
				Logout
			</a>
		</li>
	</ul>
</div>