<script type="text/javascript">

// var i = 1;

    function auto(el) {
        let id_menu = $(el).val();
        let id = el.name; //id_menu[0]
        let tempI = id.split("["); // tempI[0] id_menu[ , tempI[1] 0]
        let i = tempI[1].split("]"); // i[0] = 0. i[1] = ]
        let identifier = i[0]; // 0
        console.log(identifier);
        let name = $('#nama_' + identifier);
        let price = $('#harga_' + identifier);

        $.ajax({
            url: "{{ route('transaksi.cari') }}",
            data: 'id_menu=' + id_menu,
        }).success(function(data) {
            $(name).val(data.nama);
            $(price).val(data.harga);
        });
    }

    function additem() {
        var itemlist = document.getElementById('itemlist');

        //membuat element
        var row = document.createElement('tr');
        var kode_barang = document.createElement('td');
        var menu = document.createElement('td');
        var harga_barang = document.createElement('td');
        var jumlah = document.createElement('td');
        var aksi = document.createElement('td');

        //  meng append element
        itemlist.appendChild(row);
        row.appendChild(kode_barang);
        row.appendChild(menu);
        row.appendChild(harga_barang);
        row.appendChild(jumlah);
        row.appendChild(aksi);

        // membuat element input
        var id_menu = document.createElement('input');
        id_menu.setAttribute('name', 'id_menu[' + i + ']');
        id_menu.setAttribute('class', 'form-control');
        id_menu.setAttribute('onKeyup', 'auto(this)')
        id_menu.setAttribute('id', 'id_menu_' + i);

        var nama = document.createElement('input');
        nama.setAttribute('name', 'nama[' + i + ']');
        nama.setAttribute('class', 'form-control');
        nama.setAttribute('id', 'nama_' + i);

        var harga = document.createElement('input');
        harga.setAttribute('name', 'harga[' + i + ']');
        harga.setAttribute('class', 'form-control');
        harga.setAttribute('id', 'harga_' + i);

        var jumlah_barang = document.createElement('input');
        jumlah_barang.setAttribute('name', 'jumlah_barang[' + i + ']');
        jumlah_barang.setAttribute('class', 'form-control');
        jumlah_barang.setAttribute('id', 'jumlah_barang_' + i);

        var hapus = document.createElement('span');

        kode_barang.appendChild(id_menu);
        menu.appendChild(nama);
        harga_barang.appendChild(harga);
        jumlah.appendChild(jumlah_barang);
        aksi.appendChild(hapus);

        hapus.innerHTML =
            '<button class="btn btn-small btn-default"><i class="glyphicon glyphicon-trash"></i></button>';
        // Aksi Delete
        hapus.onclick = function() {
            row.parentNode.removeChild(row);
        };
        i++;
    }

    function autofill() {
        var siswa_id = $("#siswa_id").val();
        $.ajax({
            url: "{{ route('saldo.cari') }}",
            data: 'siswa_id=' + siswa_id,
        }).success(function(data) {
            $("#name").val(data.name);
        });
    }

</script>
