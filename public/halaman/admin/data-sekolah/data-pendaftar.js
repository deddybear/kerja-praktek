$(document).ready( function () {

    let id;
    var method;
    let url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $('#data-pendaftar').on('click', '#tombol-verifikasi', function(){
        swal({
          title: "Apakah kamu yakin ingin melakukan verifikasi ?",
          text: "Data yang telah diverifikasi hanya dapat di ubah oleh Admin",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if(willDelete){
            swal("Data telah diverifikasi", {
              icon: "success",
            });
          }else{
            swal("Batal melakukan Verifikasi")
          }
        })
  
      })


    $('#data-pendaftar').on('click', '#tombol-hapus', function(){
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