$(document).ready(function(){

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
    }

    $('.summernote').summernote({
        height: 300,
        placeholder: 'Silahkan di-isi apa yang anda ingin posting',
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
                console.log(data);
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
                console.log(data);
            },
            error: function(){
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    })
})