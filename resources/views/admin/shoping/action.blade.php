<script src="{{ asset('js/bs-notify.min.js') }}"></script>
 <script type="text/javascript">
 $('.delete').click(function() {
               var card_id = $(this).attr('card-id');
                  swal({
                     title: "YAKIN ?",
                      text: "Yakin mau di hapus data menu ini dengan kode Barang"+ " " +card_id +  "??",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true, })
            .then((willDelete) => {
                    if (willDelete) { window.location = "/remove/"+card_id+"/delete";} 
       });
    });         
   </script>