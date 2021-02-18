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
  
    $('#tambah-foto').click(function(){
      $('#tombol-submit').html('Tambah Foto')
      $('.modal-title').html('Tambah Foto')
      $('#form')[0].reset()
      method = "tambah";
    })

    $('#data-galeri-foto').on('click', '#tombol-edit', function(){
      $('.modal-title').html('Edit Foto')
      $('#tombol-submit').html('Edit Foto')
      $('#form')[0].reset()
      $('#modal-galeri-foto').modal('show')
      method = "edit";
    })

    $('#form').on('submit', function(e) {
        e.preventDefault();

        if (method == 'tambah') {

          url = '/admin/galeri-foto/add-galeri-foto';

        } else if (method == 'edit'){

          url = '/admin/galeri-foto/edit-galeri-foto';

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


    $('#data-galeri-foto').on('click', '#tombol-hapus', function(){
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