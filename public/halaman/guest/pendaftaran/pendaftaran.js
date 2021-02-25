$(document).ready(function(){
    var count = 1;

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

    $('#tambah_beasiswa').click(function(){
        var formRow         = $('<div class="form-row" />');
        var formGroupSM2    = $('<div class="form-group col-sm-2" />')
        let jenisPrestasi   = $('<select required name="jenis_prestasi'+count+'" id="inputState" class="form-control"><option selected>Sains</option><option>Seni</option><option>Olahraga</option><option>Lainnya</option></select>')
        let tingkatPrestasi = $('<select required name="tingkat_prestasi'+count+'" id="inputState" class="form-control"><option selected>Sekolah</option><option>Kecamatan</option><option>Kabupaten</option><option>Provinsi</option><option>Nasional</option><option>Internasional</option></select>')
        var formGroupSM3    = $('<div class="form-group col-sm-3" />')
        var formGroupMD3    = $('<div class="form-group col-md-3" />')
        let namaPrestasi    = $('<input required type="text" class="form-control" name="nama_prestasi'+count+'" id="nama_prestasi" placeholder="Nama Prestasi">')
        let tahunPrestasi   = $('<input required type="date" class="form-control" name="tahun_prestasi'+count+'" id="tahun_prestasi" placeholder="Tahun">')
        let penyelenggara   = $('<input required type="text" class="form-control" name="penyelenggara'+count+'" id="nama_penyelenggara" placeholder="Nama Penyelenggara">')
        if (count < 3) {
            $("#field_prestasi").append(formRow.append(formGroupSM2.clone().append(jenisPrestasi), formGroupSM2.clone().append(tingkatPrestasi), formGroupMD3.append(namaPrestasi), formGroupSM2.clone().append(tahunPrestasi), formGroupSM3.append(penyelenggara)))
            count ++;
        } else {
            
        }
        
    })
})