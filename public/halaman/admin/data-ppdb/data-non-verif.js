$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

    function notifSwal(typeIcon, title, text) {
        swal({
          icon: typeIcon,
          title: title,
          text: text,
        })
    }

    setInterval(getData, 10000);
    getData();

    function getData() {
        $.ajax({
            url: '/admin/pendaftaran/read-data',
            type: 'GET',
            data: {
                status: 0,
            },
            async: true,
            dataType: 'JSON',
            beforeSend :function () {
          
            },
            complete: function() {
    
            },
            success: function (data) {

                var html = '';
                $.each(data, function (index, row) {
                    html += '<tr>'
                        html += `<td>${row.id_pendaftaran}</td>`
                        html += `<td>${row.peserta[0].nik}</td>`
                        html += `<td>${row.peserta[0].nama}</td>`
                        html += `<td>${row.peserta[0].jenis_kelamin}</td>` 
                        html += `<td>${row.peserta[0].agama}</td>`
                        html += `<td>${row.peserta[0].alamat_lengkap}</td>`
                        html += `<td>${row.ayah[0].nama_ayah}</td>`
                        html += `<td>${row.ibu[0].nama_ibu}</td>`
                        html += `<td>${moment(row.created_at).format("D MMMM YYYY, H:mm:ss ")}</td>`
                        html += '<td> <span class="badge bg-warning fs-6" role="alert">Belum diverifikasi</span> </td>'
                        html += '<td>'
                            html += `<a href="javascript:;" id="tombol-verifikasi" class="btn btn-xs btn-info mr-1" data="${row.id_pendaftaran}"> Ubah Status </a>`
                            html += `<a href="/pendaftaran/download-data/${row.id_pendaftaran}" class="btn btn-xs btn-secondary mr-1" >Download Data</a>`
                            html += `<a href="javascript:;" id="tombol-hapus" class="btn btn-xs btn-danger mr-1" data="${row.id_pendaftaran}"> Hapus Data</a>`
                        html += '</td>'
                    html += '</tr>'
                })
                $('#table-pendaftaran').DataTable().clear().destroy()
                $('#data-pendaftaran').html(html)
                $('#table-pendaftaran').DataTable()
            },
            error: function (response) {
                notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
            }
        })
    }

    $('#data-pendaftaran').on('click', '#tombol-verifikasi', function(){
    
        swal({
            title: "Apakah kamu yakin merubah status Data Pendaftaran ini?",
            text: "Ini akan merubah Status Pendaftaran tersebut",
            icon: "warning",
            buttons: {
                reject: {
                    text: "Ditolak",
                    value: 2,
                    visible: true,
                    className: "btn btn-outline-danger",
                    closeModal: true,
                },
                confirm: {
                  text: "Diterima",
                  value: 1,
                  visible: true,
                  className: "btn btn-outline-primary",
                  closeModal: true
                }
            }
        })
        .then((pilihan) => {
            if (pilihan == 1) { // di aprove

                $.ajax({
                    url: '/admin/pendaftaran/verify-data',
                    type: 'POST',
                    data: {
                        id :  $(this).attr('data'),
                        status: 1
                    },
                    beforeSend :function () {
          
                    },
                    complete: function() {
            
                    },
                    success: function (data) {
                   
                        if (data.sukses) {
                            notifSwal('success', 'Yeeey Berhasil', data.sukses)
                            getData()
                        } else if (data.gagal){
                            notifSwal('error', 'Whoooppss ada Kesalahan', data.sukses)
                            getData()
                        } else {
                            notifSwal('error', 'Whoooppss ada Kesalahan', data.validasi)
                        }
                    },
                    error: function (response) {
                        notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
                    }
                })
                
            } else if (pilihan == 2){ // di tolak
                
                swal({
                    title: 'Alasan ditolak',
                    content: {
                      element: "input",
                      attributes: {
                        placeholder: "Type your password",
                        type: "text",
                      },
                    },
                })
                .then((input) => {
                    //console.log(input);

                    $.ajax({
                        url: '/admin/pendaftaran/verify-data',
                        type: 'POST',
                        data: {
                            id :  $(this).attr('data'),
                            status: 2,
                            reason: input
                        },
                        beforeSend :function () {
              
                        },
                        complete: function() {
                
                        },
                        success: function (data) {
                            console.log(data)
                            if (data.sukses) {
                                notifSwal('success', 'Yeeey Berhasil', data.sukses)
                                getData()
                            } else if (data.gagal){
                                notifSwal('error', 'Whoooppss ada Kesalahan', data.sukses)
                                getData()
                            } else {
                                notifSwal('error', 'Whoooppss ada Kesalahan', data.validasi)
                            }
                        },
                        error: function (response) {
                            notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
                        }
                    })

                })

            } else {
                notifSwal('warning', 'PERHATIAN', 'Aksi dibatalkan')
            }
        })

    });

    $('#data-pendaftaran').on('click', '#tombol-hapus', function(){

        swal({
            title: "Apakah kamu yakin ingin menghapus Data ?",
            text: "Data yang telah dihapus tidak dapat dikembalikan",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: '/admin/pendaftaran/hapus-data',
                    type: 'POST',
                    data: {id : $(this).attr('data')},
                    beforeSend :function () {
          
                    },
                    complete: function() {
            
                    },
                    success: function (data) {
                        if (data.sukses) {
                            notifSwal('success', 'Yeeey Berhasil', data.sukses)
                            getData()
                        } else if (data.gagal){
                            notifSwal('error', 'Whoooppss ada Kesalahan', data.gagal)
                            getData()
                        } else {
                            notifSwal('error', 'Whoooppss ada Kesalahan', data.validasi)
                        }
                    },
                    error: function (response) {
                        notifSwal('error', 'Whoopss ada kesalahan', 'Error : ' + response.responseJSON.message)
                    }
                })
            } else {
                notifSwal('warning', 'PERHATIAN', 'Aksi dibatalkan')
            }
        })
        
    });


})