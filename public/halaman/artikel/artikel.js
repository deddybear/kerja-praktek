$(document).ready( function () {

    // var id;
    // var method;
    // var url;

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
    //     }
    // });
  
    // getData();
    // setInterval(getData, 1000);
    

    // function getData() {
     
    //     $.ajax({
    //         type: 'GET',
    //         url: '/get-data',
    //         async: true,
    //         dataType: 'JSON',
    //         success: function(data){
    //            //console.log(data);
    //            var html = ''; 

    //             $.each(data, function(index, row) {
    //                 var nomer = index + 1;
    //                 html += '<tr>'
    //                     html += '<td>'+ nomer +'</td>'
    //                     html += '<td>'+ row.nama +'</td>'
    //                     html += '<td>'+ row.alamat +'</td>'
    //                     html += '<td>'+ row.umur +'</td>'
    //                     if(row.status == 0){
    //                         html += '<td> Aktif </td>'
    //                     } else {
    //                         html += '<td> Tidak Aktif </td>'
    //                     }
    //                     html += '<td>'+ row.created_at +'</td>'
    //                     row.updated_at != null ? html += '<td>'+ row.created_at +'</td>' : html += '<td> Data Kosong </td>' ;
    //                     html += '<td>'
    //                         html += '<a href="javascript:;" id="tombol-edit" class="btn btn-info" data="'+ row.id_users+'" > Edit Data</a>'
    //                         html += '<a href="javascript:;" id="tombol-hapus" class="btn btn-warning" data="'+ row.id_users+'" > Hapus Data</a>'
    //                     html +='</td>'
    //                 html += '</tr>'
    //             });
               
    //             $('#gege').html(html);
    //             $('#tabel').DataTable();
    //         },
    //         error: function(response){
    //             alert('Error : ' + response.responseJSON.message);
    //         }
    //     });

    // }


    // $('#tombol-tambah').click( function (){
    //    $('#ModalLabel').html('Tambah Data')
    //    $('#form')[0].reset()
    //    $('#input-status').hide()
    //    $('#tombol-submit').html('JUN ELEK')
    //    method = 'tambah';
  
    // })

    // //TODO : Select Data 
    // //* parentID   event     id-target (yg ketriger event)
    // $('#gege').on('click', '#tombol-edit', function(){
    //     $('#form')[0].reset()
    //     $('#tombol-submit').html('Update Data')
    //     $('#modal-coba').modal('show')
    //     method = 'edit';
    //     id = $(this).attr('data');
       
    //     $.ajax({
    //         type: 'GET',
    //         url: '/select-data/' + id,
    //         dataType: 'JSON',
    //         success: function (data) {
    //             $('#ModalLabel').html('Edit Data : ' + data.nama)
    //             $('#nama').val(data.nama)
    //             $('#alamat').val(data.alamat)
    //             $('#umur').val(data.umur)
    //             $('#input-status').show()
    //             $('#status').val(data.status)
    //         },
    //         error: function (response) {
    //             alert('Error : ' + response.responseJSON.message);
    //         }
    //     })
    // })

    // //TODO : Tambah Data dan Update
    // $('#form').on('submit', function(e) {
    //     e.preventDefault();

    //     if (method == 'tambah') {

    //         url = '/add-data';

    //     } else if (method == 'edit'){

    //         url = '/update-data/' + id ;

    //     }

    //     $.ajax({
    //         type: 'POST',
    //         url: url,
    //         data: $('#form').serialize(),
    //         dataType: 'JSON',
    //         success: function (data){
    //             swal(data.sukses)
    //             getData();
    //             $(".btn-close").click()
                
    //         },
    //         error: function (response) {
    //             alert('Error : ' + response.responseJSON.message);
    //         }
    //     });
    // })


    // //TODO: DELETE DATA >:( 
    // //* parentID   event     id-target (yg ketriger event)
    // $('#gege').on('click', '#tombol-hapus', function(){
    //     id = $(this).attr('data');

    //     swal({
    //         title: 'Hapus Data',
    //         text: 'Apakah Anda Ingin Menghapus Data ?',
    //         icon: 'warning',
    //         buttons: true,
    //         dangerMode: true,
    //     }).then((willDelete) => {
    //         if (willDelete) {

    //             $.ajax({
    //                 type: 'POST',
    //                 url : '/delete-data/' + id,
    //                 dataType: 'JSON',
    //                 success: function(){
    //                     swal("Data Berhasil dihapus");
    //                 },
    //                 error: function(response) {
    //                     alert('Error : ' + response.responseJSON.message);
    //                 }
    //             })
            

    //         } else {
    //             swal("Yaaa Gak Seru :( ");
    //         }
    //     });
    // })

    

    $('#t1').click(function (){
        swal({
            title: "WILDAN?",
            text: "WILDAN / AFDOL ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("HAAA WILDAN", {
                icon: "success",
              });
            } else {
              swal("HUUU AFDOL");
            }
          });
    });


});