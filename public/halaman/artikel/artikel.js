$(document).ready( function () {

 
    $('#summernote').summernote({
      height: 300,
    });

    var id;
    var method;
    var url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $('#tambah-artikel').click(function(){
      $('#tombol-submit').html('Tambah Artikel')
      $('.modal-title').html('Tambah Artikel')
    })

    $('#data-artikel').on('click', '#tombol-edit', function(){
      $('.modal-title').html('Edit Artikel')
      $('#tombol-submit').html('Edit Data')
      $('#modal-artikel').modal('show')
    })

    $('#data-artikel').on('click', '#tombol-hapus', function(){
      swal({
        title: "Apakah kamu yakin ingin menghapus Data ?",
        text: "Data yang telah dihapus tidak dapat dikembalikan",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if(willDelete){
          swal("Data telah terhapus", {
            icon: "success",
          });
        }else{
          swal("Gagal menghapus Data")
        }
      })

    })

});