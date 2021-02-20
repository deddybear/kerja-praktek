$(document).ready( function () {

  let id;
  let method;
  let url;

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('.custom-file-input').on('change',function(){
    $(this).next('.custom-file-label').html($(this).val());
  })

  $('#summernote').summernote({
    height: 300,
    placeholder: 'Silahkan artikel apa yang anda ingin posting',
  });

  function clearModal() {
    $('#summernote').summernote('reset');
    $('#form')[0].reset();
    $('.custom-file-label').html('');
    $('#modal_artikel').modal('hide');
  }

  function notifSwal(typeIcon, title, text) {
    swal({
      icon: typeIcon,
      title: title,
      text: text,
    })
  }

  getData();
  setInterval(getData, 5000);

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
              if (row.id_ketentuan == 'A1') {
                html += '<td> Artikel Sekolah </td>'
              } else if (row.id_ketentuan == 'A2') {
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
        $('#tableArtikel').DataTable().destroy()
        $('#data-artikel').html(html)
        $('#tableArtikel').DataTable();
      },
      error :function(response){
        notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
      }
    })
  }

    $('#tambah-artikel').click(function(){
      clearModal();
      $('#tombol-submit').html('Tambah Artikel')
      $('.modal-title').html('Tambah Artikel')
      method = "tambah";
    })

    $('#data-artikel').on('click', '#tombol-edit', function(){
      clearModal()
      method = "edit";

      id = $(this).attr('data')
      $.ajax({
        url: '/admin/artikel/select-artikel/' + id,
        type: 'GET',
        dataType: 'JSON',
        beforeSend: function() {

        },
        complete: function() {
          
        },
        success: function(data) {
          $('.modal-title').html('Edit ' + data.nama_artikel)
          $('#tombol-submit').html('Edit Data')
          $('#modal-artikel').modal('show')
        },
        error: function (response) {
          notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
        }
      })
    })

    $('#form').on('submit', function(e) {
        e.preventDefault();

        if (method == 'tambah') {

          url = '/admin/artikel/add-artikel';

        } else if (method == 'edit'){

          url = '/admin/artikel/edit-artikel/' + id;

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
            
          },
          success:function(data) {
            if (data.sukses){
              notifSwal('success', 'Yeeeey Berhasil', data.sukses);
              clearModal();
              getData();
            } else if(data.gagal) {
              notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal);
              clearModal();
              getData();
            } else {
              data.validasi.map(
                isiValidasi => notifSwal('warning', 'Whoooppss ada Kesalahan', isiValidasi)
              );

            }
          },
          error: function(response) {
            notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
          }
        })
    })  


    $('#data-artikel').on('click', '#tombol-hapus', function(){
      id = $(this).attr('data')
      swal({
        title: "PERHATIAN !",
        text: "Data yang telah dihapus tidak dapat dikembalikan lagi !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if(willDelete){
          $.ajax({
            type: 'POST',
            url: '/admin/artikel/delete-artikel/' + id,
            dataType: 'JSON',
            beforeSend: function() {
          
              // $('#loader-wrapper').show();
            },
            complete: function() {
                // $('#loader-wrapper').hide();
            },
            success: function(data) {
              if (data.sukses) {
                notifSwal('success', 'Yeeeey Berhasil', data.sukses)
                getData();
              } else if (data.warning) {
                notifSwal('warning', 'PERHATIAN', data.warning)
                getData();
              } else {
                notifSwal('gagal', 'PERHATIAN', data.gagal)
              }
             
            }
           
          })
        } else {
          notifSwal('warning', 'PERHATIAN', 'Penghapusan Atikel dibatalkan')
        }
      })

    })

    

});