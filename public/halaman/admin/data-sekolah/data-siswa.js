$(document).ready( function () {

    let id;
    var method;
    let url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#data-siswa').on('click', '#tombol-edit', function(){
      $('.modal-title').html('Edit Data')
      $('#tombol-submit').html('Edit Data')
      $('#form')[0].reset()
      $('#modal-data-siswa').modal('show')
      method = "edit";
    })

    $('#form').on('submit', function(e) {
        e.preventDefault();

        if (method == 'tambah') {

          url = '/admin/artikel/add-artikel';

        } else if (method == 'edit'){

          url = '/admin/artikel/edit-artikel';

        }

        $.ajax({
          url: url,
          type: 'POST',
          dataType: 'JSON',
          data:$('#form').serialize(),
          beforeSend: function() {
            alert("Mengirim");
          },
          complete: function() {
            alert("Mengirim Complete");
          },
          success:function(data) {
            console.log(data);
          },
          error: function(response) {
            alert('Error : ' + response.responseJSON.message)
          }
        })
    })  


    $('#data-siswa').on('click', '#tombol-hapus', function(){
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