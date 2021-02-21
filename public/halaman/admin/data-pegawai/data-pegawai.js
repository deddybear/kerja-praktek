$(document).ready( function () {

    let id;
    let method;
    let url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    function clearModal() {
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

    function getData() {
      $.ajax({
        url: '/admin/data-pegawai/read-data',
        method: 'GET',
        async: true,
        dataType: 'JSON',
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function (data) {

          let html ; 
          let nomer = 1;
          $.each(data, function(index, row){
            html += '<tr>' 
              html += '<td>'+ nomer++ +'</td>'
              html += '<td>'+ row.akun[0].nama +'</td>'
              html += '<td>'+ row.nip +'</td>'
              html += '<td>'+ row.nama_pegawai +'</td>'
              html += '<td>'+ row.alamat_pegawai +'</td>'
              html += '<td>'+ row.pendidikan_terakhir +'</td>'
              html += '<td>'+ row.jabatan +'</td>'
              html += '<td>'+ moment(row.created_at).format("D MMMM YYYY, H:mm:ss ") +'</td>'
              html += '<td>'+ moment(row.updated_at).format("D MMMM YYYY, H:mm:ss ") +'</td>'
              html += '<td>'
                  html += '<a href="javascript:;" id="tombol-edit" class="btn btn-xs btn-info mr-1" data="'+ row.id_pegawai+'"> Edit Data</a>'
                  html += '<a href="javascript:;" id="tombol-hapus" class="btn btn-xs btn-warning ml-1" data="'+ row.id_pegawai+'"> Hapus Data</a>'
              html +='</td>'
            html +='</tr>'
            
          })
          $('#tablePegawai').DataTable().clear().destroy()
          $('#data-pegawai').html(html)
          $('#tablePegawai').DataTable()
        },
        error: function (response) {
          notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
        }
      });
    }
  
    $('#tambah-pegawai').click(function(){
      method = "tambah";
      clearModal()
      $('#tombol-submit').html('Tambah Pegawai')
      $('.modal-title').html('Tambah Pegawai')
    })

    $('#data-pegawai').on('click', '#tombol-edit', function(){
      method = "edit";
      clearModal()
      id = $(this).attr('data')

      $.ajax({
        url: '/admin/data-pegawai/select-data/' + id,
        type: 'GET',
        dataType: 'JSON',
        beforeSend: function() {

        },
        complete: function() {

        },
        success: function(data) {

          $('.modal-title').html('Edit Data : '+ data.nama_pegawai)
          $('#nip').val(data.nip)
          $('#nama_lengkap').val(data.nama_pegawai)
          $('#alamat').val(data.alamat_pegawai)
          $('#tombol-submit').html('Edit Data')
          $('#modal-pegawai').modal('show')
        },
        error: function (response) {
          notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
        }
      })
    })

    $('#form').on('submit', function(e) {
        e.preventDefault();

        if (method == 'tambah') {

          url = '/admin/data-pegawai/add-data';

        } else if (method == 'edit'){

          url = '/admin/data-pegawai/edit-data/' + id;

        }

        $.ajax({
          url: url,
          type: 'POST',
          dataType: 'JSON',
          data:$('#form').serialize(),
          beforeSend: function() {
           
          },
          complete: function() {
            
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


    $('#data-pegawai').on('click', '#tombol-hapus', function(){
      id = $(this).attr('data')
      swal({
        title: "Apakah kamu yakin ingin menghapus Data ?",
        text: "Data yang telah dihapus tidak dapat dikembalikan",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if(willDelete){
          $.ajax({
            type: 'POST',
            url: '/admin/data-pegawai/delete-data/' + id,
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
              } else {
                notifSwal('gagal', 'PERHATIAN', data.gagal)
              }
            }
          })
        }else{
          notifSwal('warning', 'PERHATIAN', 'Penghapusan Data Pegawai dibatalkan')
        }
      })

    })

});