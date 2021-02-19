$(document).ready( function () {

  $('.custom-file-input').on('change',function(){
    $(this).next('.custom-file-label').html($(this).val());
})

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

    getData();
    setInterval(getData, 1000);

    function getData(){
      $.ajax({
        url: '/admin/artikel/read-artikel',
        type: 'GET',
        async: true,
        dataType: 'JSON',
        beforeSend :function(){

        },
        success :function(data){
          let html ;
          $.each(data, function(index, row) {
            let nomer = index + 1;
            html += '<tr>'
                html += '<td>'+ nomer +'</td>'
                html += '<td>'+ row.nama_artikel +'</td>'
                if (row.id_ketentuan == 'Ar-1') {

                  html += '<td> Artikel Sekolah </td>'

                } else if (row.id_ketentuan == 'Ar-2') {

                  html += '<td> Artikel Guru </td>'
                  
                } else {

                  html += '<td> Artikel Siswa </td>'

                }
                html += '<td>'+ moment(row.created_at).format("D MMMM YYYY, H:mm:ss ") +'</td>'
                html += '<td>'+ moment(row.updated_at).format("D MMMM YYYY, H:mm:ss ") +'</td>'
                html += '<td>'
                    html += '<a href="javascript:;" id="tombol-edit" class="btn btn-xs btn-info mr-1" data="'+ row.id_artikel+'"> Edit Data</a>'
                    html += '<a href="javascript:;" id="tombol-hapus" class="btn btn-xs btn-warning ml-1" data="'+ row.id_artikel+'"> Hapus Data</a>'
                html +='</td>'
            html += '</tr>'
          })
          $('#data-artikel').html(html)
          $('#tableArtikel').DataTable();
        },
        error :function(response){
          swal({
            icon: 'error',
            title: 'Error : ' + response.responseJSON.message,
            text: 'Something went wrong!',
          })
        }
      })
    }
  
    $('#tambah-artikel').click(function(){
      $('#form')[0].reset();
      $('#tombol-submit').html('Tambah Artikel')
      $('.modal-title').html('Tambah Artikel')
     
      $("#teks_artikel").summernote("reset")
      method = "tambah";
    })

    $('#data-artikel').on('click', '#tombol-edit', function(){
      $('#form')[0].reset();
      $('.modal-title').html('Edit Artikel')
      $('#tombol-submit').html('Edit Data')
      $("#teks_artikel").summernote("reset")
      $('#modal-artikel').modal('show')
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
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
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