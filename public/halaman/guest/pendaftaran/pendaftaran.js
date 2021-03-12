function crossCheck(e) {
 
    if (!$("#setuju").prop("checked")){
        swal("PERHATIAN !", "Mohon untuk bla bla bla bla", "error")
        return false;
    } 

    $("form").validate({
        submitHandler: function(form) {
            return true;
        }
    });
}


$(document).ready(function(){
    let countFieldPrestasi = 1;
    let countFieldBeasiswa = 1;

    dateFormat()
    tahunOnly()

    function dateFormat() {
     $('.format-date').datepicker({
         format: "dd-mm-yyyy",
     });
    }

    function tahunOnly() {
        $('.tahun-only').datepicker({
            format: "yyyy",
            viewMode: "years", 
            minViewMode: "years"
        });
       }

    $('#hobi').change(function(){
        $('#hobi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#form_tambahan_hobi').prop('disabled', false)
                 $('#tambahan_hobi').show()
            } else {
                 $('#form_tambahan_hobi').prop('disabled', true)
                 $('#tambahan_hobi').hide()
            }
        })
    })

    $('#cita_cita').change(function(){
        $('#cita_cita option:selected').each(function(){
            if($(this).text() === 'Lainnya') {
                $('#form_tambahan_cita_cita').prop('disabled', false)
                $('#tambahan_cita_cita').show()
            } else {
                $('#form_tambahan_cita_cita').prop('disabled', true)
                $('#tambahan_cita_cita').hide()
            }
        })
    })

    $('#tempat_tinggal').change(function(){
        $('#tempat_tinggal option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#form_tambahan_tempat_tinggal').prop('disabled', false)
                 $('#tambahan_tempat_tinggal').show()
            } else {
                 $('#form_tambahan_tempat_tinggal').prop('disabled', true)
                 $('#tambahan_tempat_tinggal').hide()
            }
        })
    })

    $('#moda_transportasi').change(function(){
        $('#moda_transportasi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                  $('#form_moda_transportasi').prop('disabled', false)
                  $('#tambahan_moda_transportasi').show()
            } else {
                  $('#form_moda_transportasi').prop('disabled', true)
                  $('#tambahan_moda_transportasi').hide()
            }
        })
    })

    $('#status_kps').change(function(){
        $('#status_kps option:selected').each(function(){
            if ($(this).text() === 'Ya') {
                $('#jenis_bantuan').prop('disabled', false)
                $('#tambahan_jenis_bantuan').show()
                $('#no_bantuan').prop('disabled', false)
                $('#tambahan_nomor_bantuan').show()
            } else {
                $('#jenis_bantuan').prop('disabled', true)
                $('#tambahan_jenis_bantuan').hide()
                $('#no_bantuan').prop('disabled', true)
                $('#tambahan_nomor_bantuan').hide()
            }
        })
    })

    $('#status_warga').change(function(){
        $('#status_warga option:selected').each(function(){
            if ($(this).text() === 'WNA') {
                 $('#wna').prop('disabled', false)
                 $('#tambahan_status_warga').show()
            } else {
                 $('#wna').prop('disabled', true)
                 $('#tambahan_status_warga').hide()
            }
        })
    })

    $('#status_pip').change(function(){
        $('#status_pip option:selected').each(function(){
            if ($(this).text() === 'Ya') {
                  $('#jenis_alasan_pip').prop('disabled', false)
                  $('#tambahan_status_pip').show()
            } else {
                  $('#jenis_alasan_pip').prop('disabled', true)
                  $('#tambahan_status_pip').hide()
            }
        })
    })

    $('#tambah_prestasi').click(function(){

        var formRow                 = $(`<div class="form-row my-1" />`);
        var hidden                  = $(`<input type="hidden" name="banyakPrestasi[]">`)
        var formGroupLG1            = $('<div class="form-group col-lg-1" />')
        var formGroupLG2            = $('<div class="form-group col-lg-2" />')
        let jenisPrestasi           = $(`<label for="jenis_prestasi">Jenis</label>
                                         <select required name="jenis_prestasi[]" id="jenis_prestasi_${countFieldPrestasi}" class="form-control">
                                            <option value="" selected>--Silakan Pilih--</option>
                                            <option value="Sains">Sains</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>`)
        let tingkatPrestasi         = $(`<label for="tingkat_prestasi">Tingkat</label> 
                                        <select required name="tingkat_prestasi[]" id="tingkat_prestasi_${countFieldPrestasi}" class="form-control">
                                            <option value="" selected>--Silakan Pilih--</option>
                                            <option value="Sekolah">Sekolah</option>
                                            <option value="Kecamatan">Kecamatan</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                            <option value="Provinsi">Provinsi</option>
                                            <option value="Nasional">Nasional</option>
                                            <option value="Internasional">Internasional</option>
                                        </select>`)
        var formGroupLG3            = $('<div class="form-group col-lg-3" />')
        var formGroupLG3            = $('<div class="form-group col-lg-3" />')
        let namaPrestasi            = $(`<label for="nama_prestasi">Nama Prestasi</label> <input required type="text" class="form-control" name="nama_prestasi[]" id="nama_prestasi_${countFieldPrestasi}" placeholder="Nama Prestasi">`)
        let tahunPrestasi           = $(`<label for="tahun_prestasi">Tahun</label> <input required type="text" class="form-control tahun-only" name="tahun_prestasi[]" id="tahun_prestasi_${countFieldPrestasi}" placeholder="Tahun">`)
        let penyelenggara           = $(`<label for="nama_penyelenggara">Nama Penyelenggara</label> <input required type="text" class="form-control" name="penyelenggara[]" id="penyelenggara_${countFieldPrestasi}" placeholder="Nama Penyelenggara">`)
        let buttonHapusPrestasi     = $('<a class="btn btn-danger h-25 my-4"> hapus </a>')
        
        if (countFieldPrestasi <= 3) {

            buttonHapusPrestasi.click(function() {
                $(this).parent().remove();
                countFieldPrestasi--;
            });

            $("#field_prestasi").append(formRow.append(formGroupLG2.clone().append(jenisPrestasi), formGroupLG2.clone().append(tingkatPrestasi), formGroupLG3.clone().append(namaPrestasi), formGroupLG1.clone().append(tahunPrestasi), formGroupLG3.clone().append(penyelenggara), hidden, buttonHapusPrestasi))
            tahunOnly()
            countFieldPrestasi ++;
        }
        
    })

    $('#tambah_beasiswa').click(function(){
     
        var formRow             = $(`<div class="form-row my-1" />`);
        var hidden              = $(`<input type="hidden" name="banyakBeasiswa[]">`)
        var formGroupLG2        = $('<div class="form-group col-lg-2" />')
        var formGroupLG5        = $('<div class="form-group col-lg-5" />')
        let jenisBeasiswa       = $(`<label for="jenis_beasiswa">Jenis</label> 
                                     <select required id="jenis_beasiswa_${countFieldBeasiswa}" name="jenis_beasiswa[]" class="form-control">
                                        <option value=""  selected>--Silakan Pilih--</option>
                                        <option value="Anak Berprestasi">Anak Berprestasi</option>
                                        <option value="Anak Miskin">Anak Miskin</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Unggulan">Unggulan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>`)
        let keterangan          = $(`<label for="keterangan_beasiswa">Keterangan</label> <input type="text" class="form-control" name="keterangan_beasiswa[]" id="keterangan_beasiswa_${countFieldBeasiswa}" placeholder="Keterangan">`)
        let tahunMulai          = $(`<label for="tahun_mulai_beasiswa">Tahun Mulai</label> <input required type="text" class="form-control tahun-only" name="tahun_mulai_beasiswa[]" id="tahun_mulai_beasiswa_${countFieldBeasiswa}" placeholder="Tahun Mulai">`)
        let tahunSelesai        = $(`<label for="tahun_akhir_beasiswa">Tahun Selesai</label> <input required type="text" class="form-control tahun-only" name="tahun_selesai_beasiswa[]" id="tahun_selesai_beasiswa_${countFieldBeasiswa}" placeholder="Tahun Selesai">`)
        let buttonHapusBeasiswa = $('<a class="btn btn-danger h-25 my-auto"> hapus </a>')

        if (countFieldBeasiswa <= 3) {
            
            buttonHapusBeasiswa.click(function(){
                $(this).parent().remove();
                countFieldBeasiswa--;
            });

            $('#field_beasiswa').append(formRow.append(formGroupLG2.clone().append(jenisBeasiswa), formGroupLG5.append(keterangan), formGroupLG2.clone().append(tahunMulai), formGroupLG2.clone().append(tahunSelesai), hidden, buttonHapusBeasiswa ))
            tahunOnly()
            countFieldBeasiswa++;
        }
    });

    
})