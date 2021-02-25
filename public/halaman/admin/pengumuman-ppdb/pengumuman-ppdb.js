$(document).ready(function () {

    $('#summernote').summernote({
        height: 300,
    });

    var id;
    var method;
    var url;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#tabel-ppdb').DataTable()

    $('#tambah-pengumuman').click(function () {
        $('#tombol-submit').html('Tambah Pengumuman')
        $('.modal-title').html('Tambah Pengumuman')
    })

    $('#data-pengumuman-ppdb').on('click', '#tombol-edit', function () {
        $('.modal-title').html('Edit Pengumuman')
        $('#tombol-submit').html('Edit Pengumuman')
        $('#modal-pengumuman').modal('show')
    })

    $('#data-pengumuman-ppdb').on('click', '#tombol-hapus', function () {
        swal({
                title: "Apakah kamu yakin ingin menghapus Data ?",
                text: "Data yang telah dihapus tidak dapat dikembalikan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Data telah terhapus", {
                        icon: "success",
                    });
                } else {
                    swal("Gagal menghapus Data")
                }
            })

    })

});