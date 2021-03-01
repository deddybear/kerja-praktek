$(document).ready(function(){

    let methodPrestasi;
    let methodFasilitas;
    let idFasilitas;
    let idPrestasi;


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    getData()

    function notifSwal(typeIcon, title, text) {
        swal({
          icon: typeIcon,
          title: title,
          text: text,
        })
    }
  

    function clearField() {
        $('.summernote').summernote('reset');
        $('form')[0].reset();
        $('#form-fasilitas')[0].reset();
        $('#form-prestasi')[0].reset();
    }

    $('.summernote').summernote({
        height: 200,
        placeholder: 'Silahkan di-isi apa yang anda ingin posting',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['view', ['help']]
        ]
    })

    // TODO: read data profile, fasilitas, prestasi
    function getData() {
        $.ajax({
            url: '/admin/profile/read-profile',
            type: 'GET',
            async: true,
            dataType: 'JSON',
            beforeSend :function(){

            },
            complete :function(){
                
            },
            success :function (data) {
                var textProfile, textVM, htmlFasilitas, htmlPrestasi, nomer;
         
                $.each(data, function (index, row) {
                    textProfile = row.isi_profile;
                    textVM      = row.visi_misi;
                    nomer = 1;

                    for (const key in row.fasilitas) {
                        htmlFasilitas += '<tr>'
                            htmlFasilitas += '<td>'+ nomer++ +'</td>'
                            htmlFasilitas += '<td>'+ row.fasilitas[key].jenis+'</td>'
                            htmlFasilitas += '<td>'+ row.fasilitas[key].nama+'</td>'
                            htmlFasilitas += '<td>'+ row.fasilitas[key].jumlah+'</td>'
                            htmlFasilitas += '<td>'
                                htmlFasilitas += '<a  href="javascript:;" id="tombol-edit" class="btn btn-xs mr-1 btn-info" data="'+ row.fasilitas[key].id_fasilitas+'">Edit Data</a>'
                                htmlFasilitas += '<a  href="javascript:;" id="tombol-hapus" class="btn btn-xs ml-1 btn-warning" data="'+ row.fasilitas[key].id_fasilitas+'">Hapus Data</a>'
                            htmlFasilitas += '</td>'
                        htmlFasilitas += '</tr>'
                    }

                    nomer = 1;
                    for (const key in row.prestasi) {
                        htmlPrestasi += '<tr>' 
                          htmlPrestasi += '<td>'+ nomer++ +'</td>'
                          htmlPrestasi += '<td>'+ row.prestasi[key].peringkat +'</td>'
                          htmlPrestasi += '<td>'+ row.prestasi[key].nama_lomba +'</td>'
                          htmlPrestasi += '<td>'+ row.prestasi[key].penyelenggara +'</td>'
                          htmlPrestasi += '<td>'+ row.prestasi[key].waktu+'</td>'
                          htmlPrestasi += '<td>'+ row.prestasi[key].diperoleh+'</td>'
                          htmlPrestasi += '<td>'
                              htmlPrestasi += '<a  href="javascript:;" id="tombol-edit" class="btn btn-xs mr-1 btn-info" data="'+ row.prestasi[key].id_prestasi+'">Edit Data</a>'
                              htmlPrestasi += '<a  href="javascript:;" id="tombol-hapus" class="btn btn-xs ml-1 btn-warning" data="'+ row.prestasi[key].id_prestasi+'">Hapus Data</a>'
                          htmlPrestasi += '</td>'
                        htmlPrestasi += '</tr>'
                    }

                    $('#fasilitas').DataTable().clear().destroy()
                    $('#prestasi').DataTable().clear().destroy()
                    $('#text-profile-sekolah').html(textProfile)
                    $('#text-visi-misi').html(textVM)
                    $('#data-fasalitas').html(htmlFasilitas)
                    $('#data-prestasi').html(htmlPrestasi)
                    $('#fasilitas').DataTable()
                    $('#prestasi').DataTable()
                })
                
            },
            error: function (response) {
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    }

    //TODO : Fungsi Edit Profile Sekolah

    $('#edit-profil').click(function(){
        clearField()
    })

    $('#form-profil').on('submit', function(e){
        e.preventDefault()

        $.ajax({
            url: '/admin/profile/edit',
            type: 'POST',
            dataType: 'JSON',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function(){

            },
            complete: function(){

            },
            success: function(data){
                if (data.sukses) {
                    notifSwal('success', 'Yeeey Berhasil', data.sukses)
                    clearField()
                    getData()
                } else if (data.gagal){
                    notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal);
                    clearField()
                    getData()
                } else {
                    data.validasi.map(
                        isiValidasi => notifSwal('warning', 'Whoooppss ada Kesalahan', isiValidasi)
                    );
                }
            },
            error: function(){
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    })

    //TODO : Fungsi Edit visi misi 

    $('#edit-visi-misi').click(function(){
      
        clearField()
    })

    $('#form-visi-misi').on('submit', function(e){
        e.preventDefault()

        $.ajax({
            url: '/admin/visi-misi/edit',
            type: 'POST',
            dataType: 'JSON',
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function(){

            },
            complete: function(){

            },
            success: function(data){
                if (data.sukses) {
                    notifSwal('success', 'Yeeey Berhasil', data.sukses)
                   
                    getData()
                } else if (data.gagal){
                    notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal);
                    clearField()
                    getData()
                } else {
                    data.validasi.map(
                        isiValidasi => notifSwal('warning', 'Whoooppss ada Kesalahan', isiValidasi)
                    );
                }
            },
            error: function(){
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    })

    //TODO : FUNGSIONAL Fasilitas

    $('#tambah-fasilitas').click(function() {
        clearField()
        methodFasilitas = 'tambah';
        $('#tombol-submit-fasilitas').html('Tambah Data')
        $('#modal-title-fasilitas').html('Tambah Data Fasilitas')
    })

    $('#data-fasalitas').on('click', '#tombol-edit', function(){
        methodFasilitas = 'edit';
        clearField()
        idFasilitas = $(this).attr('data')
        
        $.ajax({
            url : '/admin/fasilitas/select-data/' + idFasilitas,
            type: 'GET',
            dataType: 'JSON',
            beforeSend: function() {

            },
            complete: function() {
    
            },
            success: function(data) {
              $('.modal-title-fasilitas').html('Edit : '+ data.nama)
              $('#nama_fasilitas').val(data.nama)
              $('#jumlah_fasilitas').val(data.jumlah)
              $('#tombol-submit-fasilitas').html('Edit Data')
              $('#modal-fasilitas').modal('show')
            },
            error: function (response) {
              notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    })

    $('#form-fasilitas').on('submit', function(e){
        e.preventDefault()
        let url ;

        if (methodFasilitas == 'tambah') {

            url = '/admin/fasilitas/tambah-data';

        } else if (methodFasilitas == 'edit') {

            url = '/admin/fasilitas/edit-data/' + idFasilitas;

        }

        $.ajax({
            url: url,
            type: 'POST',
            data: $('#form-fasilitas').serialize(),
            dataType: 'JSON',
            beforeSend: function() {
           
            },
            complete: function() {
              
            },
            success: function(data) {
            
                if (data.sukses) {
                    notifSwal('success', 'Yeeey Berhasil', data.sukses)
                    clearField()
                    getData()
                } else if (data.gagal){
                    notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal);
                    clearField()
                    getData()
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

    $('#data-fasalitas').on('click', '#tombol-hapus', function(){
        let id = $(this).attr('data')

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
                url: '/admin/fasilitas/delete-data/' + id,
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

    //TODO : END FUNGSIONAL Fasilitas

    //TODO : FUNGSIONAL PRESTASI

    $('#tambah-prestasi').click(function(){
        clearField()
        methodPrestasi = 'tambah';
        $('#modal-title-prestasi').html('Tambah Data Prestasi')
        $('#tombol-submit-prestasi').html('Tambah Data')
    });

    $('#data-prestasi').on('click', '#tombol-edit', function(){
        methodPrestasi = 'edit';
        clearField()
        idPrestasi = $(this).attr('data')
        $.ajax({
            url: '/admin/prestasi/select-data/' + idPrestasi,
            type: 'GET',
            dataType: 'JSON',
            beforeSend: function() {
            },
            complete: function() {
    
            },
            success: function(data) {
              
                $('#modal-title-prestasi').html('Edit: ' + data.nama_lomba)
                $('#nama_lomba').val(data.nama_lomba)
                $('#penyelenggara_lomba').val(data.penyelenggara)
                $('#peraih_prestasi').val(data.diperoleh)
                $('#tombol-submit-prestasi').html('Edit Data')
                $('#modal-prestasi').modal('show')
            },
            error: function (response) {
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    })

    $('#form-prestasi').on('submit', function(e){
        e.preventDefault()

        let url ;

        if(methodPrestasi == 'tambah'){
            
            url = '/admin/prestasi/tambah-data';

        } else if(methodPrestasi == 'edit'){

            url = '/admin/prestasi/edit-data/' + idPrestasi;

        }

        $.ajax({
            url: url,
            type: 'POST',
            data: $('#form-prestasi').serialize(),
            dataType: 'JSON',
            beforeSend: function(){

            },
            complete: function(){

            },
            success: function(data){
      
                if (data.sukses) {
                    notifSwal('success', 'Yeeey Berhasil', data.sukses)
                    clearField()
                    getData()
                } else if (data.gagal){
                    notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal);
                    clearField()
                    getData()
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

    $('#data-prestasi').on('click', '#tombol-hapus', function(){
        let id = $(this).attr('data')

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
                url: '/admin/prestasi/delete-data/' + id,
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
    //TODO : END FUNGSIONAL PRESTASI
})