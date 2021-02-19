$(document).ready( function () {

 
    $('#summernote').summernote({
      height: 300,
    });

    let id;
    var method;
    let url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });
  
    $('#tambah-video').click(function(){
      $('#tombol-submit').html('Tambah Video')
      $('.modal-title').html('Tambah Video')
      $('#form')[0].reset()
      method = "tambah";
    })

    $('#data-galeri-video').on('click', '#tombol-edit', function(){
      $('.modal-title').html('Edit Video')
      $('#tombol-submit').html('Edit Video')
      $('#form')[0].reset()
      $('#modal-galeri-video').modal('show')
      method = "edit";
    })

    $('#form').on('submit', function(e) {
        e.preventDefault();

        if (method == 'tambah') {

          url = '/admin/galeri-video/add-galeri-video';

        } else if (method == 'edit'){

          url = '/admin/galeri-video/edit-galeri-video';

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


    $('#data-galeri-video').on('click', '#tombol-hapus', function(){
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