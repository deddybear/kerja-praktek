function crossCheck(e) {
    if (!$("#setuju").prop("checked")){
        swal("PERHATIAN !", "Mohon untuk bla bla bla bla", "error")
        console.log('no check');
        return false
    } 

}


$(document).ready(function(){
    let countFieldPrestasi = 1;
    let countFieldBeasiswa = 1;

    tahunOnly()

    function tahunOnly() {
     $('.tahun-only').datepicker({
         format: "yyyy",
         viewMode: "years", 
         minViewMode: "years"
     });
    }

    $('#form')[0].reset()
    $('#hobi').change(function(){
        $('#hobi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#form_tambahan_hobi').removeAttr('disabled')
                 $('#tambahan_hobi').show()
            } else {
                 $('#form_tambahan_hobi').attr('disabled')
                 $('#tambahan_hobi').hide()
            }
        })
    })

    $('#cita_cita').change(function(){
        $('#cita_cita option:selected').each(function(){
            if($(this).text() === 'Lainnya') {
                $('#form_tambahan_cita_cita').removeAttr('disabled')
                $('#tambahan_cita_cita').show()
            } else {
                $('#form_tambahan_cita_cita').attr('disabled')
                $('#tambahan_cita_cita').hide()
            }
        })
    })

    $('#tempat_tinggal').change(function(){
        $('#tempat_tinggal option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#form_tambahan_tempat_tinggal').removeAttr('disabled')
                 $('#tambahan_tempat_tinggal').show()
            } else {
                 $('#form_tambahan_tempat_tinggal').attr('disabled')
                 $('#tambahan_tempat_tinggal').hide()
            }
        })
    })

    $('#moda_transportasi').change(function(){
        $('#moda_transportasi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                  $('#form_moda_transportasi').removeAttr('disabled')
                  $('#tambahan_moda_transportasi').show()
            } else {
                  $('#form_moda_transportasi').attr('disabled')
                  $('#tambahan_moda_transportasi').hide()
            }
        })
    })

    $('#status_kps').change(function(){
        $('#status_kps option:selected').each(function(){
            if ($(this).text() === 'Ya') {
                 $('#no_bantuan').removeAttr('disabled')
                 $('#tambahan_status_kps').show()
            } else {
                 $('#no_bantuan').attr('disabled')
                 $('#tambahan_status_kps').hide()
            }
        })
    })

    $('#status_warga').change(function(){
        $('#status_warga option:selected').each(function(){
            if ($(this).text() === 'WNA') {
                 $('#wna').removeAttr('disabled')
                 $('#tambahan_status_warga').show()
            } else {
                 $('#wna').attr('disabled')
                 $('#tambahan_status_warga').hide()
            }
        })
    })

    $('#status_pip').change(function(){
        $('#status_pip option:selected').each(function(){
            if ($(this).text() === 'Ya') {
                  $('#jenis_alasan_pip').removeAttr('disabled')
                  $('#tambahan_status_pip').show()
            } else {
                  $('#jenis_alasan_pip').attr('disabled')
                  $('#tambahan_status_pip').hide()
            }
        })
    })

    $('#pekerjaan_ayah').change(function(){
        $('#pekerjaan_ayah option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                  $('#nama_pekerjaan_ayah').removeAttr('disabled')
                  $('#tambahan_pekerjaan_ayah').show()
            } else {
                  $('#nama_pekerjaan_ayah').attr('disabled')
                  $('#tambahan_pekerjaan_ayah').hide()
            }
        })
    })

    $('#pekerjaan_ibu').change(function(){
        $('#pekerjaan_ibu option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                  $('#nama_pekerjaan_ibu').removeAttr('disabled')
                  $('#tambahan_pekerjaan_ibu').show()
            } else {
                  $('#nama_pekerjaan_ibu').attr('disabled')
                  $('#tambahan_pekerjaan_ibu').hide()
            }
        })
    })

    $('#perkejaan_wali').change(function(){
        $('#perkejaan_wali option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                  $('#nama_pekerjaan_wali').removeAttr('disabled')
                  $('#tambahan_pekerjaan_wali').show()
            } else {
                  $('#nama_pekerjaan_wali').attr('disabled')
                  $('#tambahan_pekerjaan_wali').hide()
            }
        })
    })

    $('#tambah_prestasi').click(function(){

        var formRow                 = $('<div class="form-row my-1" />');
        var formGroupLG1            = $('<div class="form-group col-lg-1" />')
        var formGroupLG2            = $('<div class="form-group col-lg-2" />')
        let jenisPrestasi           = $('<label for="jenis_prestasi">Jenis</label> <select required name="jenis_prestasi'+countFieldPrestasi+'" id="inputState" class="form-control"><option selected></option><option>Sains</option><option>Seni</option><option>Olahraga</option><option>Lainnya</option></select>')
        let tingkatPrestasi         = $('<label for="tingkat_prestasi">Tingkat</label> <select required name="tingkat_prestasi'+countFieldPrestasi+'" id="inputState" class="form-control"><option selected></option><option>Sekolah</option><option>Kecamatan</option><option>Kabupaten</option><option>Provinsi</option><option>Nasional</option><option>Internasional</option></select>')
        var formGroupLG3            = $('<div class="form-group col-lg-3" />')
        var formGroupLG3            = $('<div class="form-group col-lg-3" />')
        let namaPrestasi            = $('<label for="nama_prestasi">Nama Prestasi</label> <input required type="text" class="form-control" name="nama_prestasi'+countFieldPrestasi+'" id="nama_prestasi" placeholder="Nama Prestasi">')
        let tahunPrestasi           = $('<label for="tahun_prestasi">Tahun</label> <input required type="text" class="form-control tahun-only" name="tahun_prestasi'+countFieldPrestasi+'" id="tahun_prestasi" placeholder="Tahun">')
        let penyelenggara           = $('<label for="nama_penyelenggara">Nama Penyelenggara</label> <input required type="text" class="form-control" name="penyelenggara'+countFieldPrestasi+'" id="nama_penyelenggara" placeholder="Nama Penyelenggara">')
        let buttonHapusPrestasi     = $('<a class="btn btn-danger btn-sm h-25 my-auto"> hapus </a>')
        
        if (countFieldPrestasi <= 3) {

            buttonHapusPrestasi.click(function() {
                $(this).parent().remove();
                countFieldPrestasi--;
            });

            $("#field_prestasi").append(formRow.append(formGroupLG2.clone().append(jenisPrestasi), formGroupLG2.clone().append(tingkatPrestasi), formGroupLG3.clone().append(namaPrestasi), formGroupLG1.clone().append(tahunPrestasi), formGroupLG3.clone().append(penyelenggara), buttonHapusPrestasi))
            tahunOnly()
            countFieldPrestasi ++;
        }
        
    })

    $('#tambah_beasiswa').click(function(){
     
        var formRow             = $('<div class="form-row my-1" />');
        var formGroupLG2        = $('<div class="form-group col-lg-2" />')
        var formGroupLG5        = $('<div class="form-group col-lg-5" />')
        let jenisBeasiswa       = $('<label for="jenis_beasiswa">Jenis</label> <select required id="jenis_beasiswa" name="jenis_beasiswa'+countFieldBeasiswa+'" class="form-control"><option selected></option><option selected>Anak Berprestasi</option><option>Anak Miskin</option><option>Pendidikan</option><option>Unggulan</option><option>Lainnya</option></select>')
        let keterangan          = $('<label for="keterangan_beasiswa">Keterangan</label> <input type="text" class="form-control" name="keterangan_beasiswa'+countFieldBeasiswa+'" id="keterangan_beasiswa" placeholder="Keterangan">')
        let tahunMulai          = $('<label for="tahun_mulai_beasiswa">Tahun Mulai</label> <input required type="text" class="form-control tahun-only" name="tahun_mulai_beasiswa'+countFieldBeasiswa+'" id="tahun_mulai_beasiswa" placeholder="Tahun Mulai">')
        let tahunSelesai        = $('<label for="tahun_akhir_beasiswa">Tahun Selesai</label> <input required type="text" class="form-control tahun-only" name="tahun_selesai_beasiswa'+countFieldBeasiswa+'" id="tahun_akhir_beasiswa" placeholder="Tahun Selesai">')
        let buttonHapusBeasiswa = $('<a class="btn btn-danger btn-sm h-25 my-auto"> hapus </a>')

        if (countFieldBeasiswa <= 3) {
            
            buttonHapusBeasiswa.click(function(){
                $(this).parent().remove();
                countFieldBeasiswa--;
            });

            $('#field_beasiswa').append(formRow.append(formGroupLG2.clone().append(jenisBeasiswa), formGroupLG5.append(keterangan), formGroupLG2.clone().append(tahunMulai), formGroupLG2.clone().append(tahunSelesai), buttonHapusBeasiswa ))
            tahunOnly()
            countFieldBeasiswa++;
        }
    });

    
})