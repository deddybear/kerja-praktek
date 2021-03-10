const validasi = {};
const pesan    = {};

    for (let i = 1; i <= 3; i++) {
        validasi[`jenis_prestasi_${i}`]        = {required: true, maxlength: 8};      
        pesan[`jenis_prestasi_${i}`]           = {required: "bla bla ed", maxlength: "bla bla bla pesan max" };
    
        validasi[`tingkat_prestasi_${i}`]      = {required: true, maxlength: 13};
        pesan[`tingkat_prestasi_${i}`]         = {required: 'bla bla bla pesan reqyured', maxlength: 'bla bla bla pesan max'};
    
        validasi[`nama_prestasi_${i}`]         = {required: true, maxlength: 50};
        pesan[`nama_prestasi_${i}`]            = {required: 'bla bla bla pesan reqyured', maxlength: 'bla bla bla pesan max'};
    
        validasi[`tahun_prestasi_${i}`]        = {required: true, date: true};
        pesan[`tahun_prestasi_${i}`]           = {required: 'bla bla bla pesan reqyured', date: 'bla bla bla pesan date'};
    
        validasi[`penyelenggara_${i}`]         = {required: true, maxlength: 50};
        pesan[`penyelenggara_${i}`]            = {required: 'bla bla bla pesan reqyured', maxlength: 'bla bla bla pesan max'};
        
        validasi[`jenis_beasiswa_${i}`]        = {required: true, maxlength: 16};
        pesan[`jenis_beasiswa_${i}`]           = {required: 'bla bla bla pesan reqyured', maxlength: 'bla bla bla pesan max'}
        
        validasi[`keterangan_beasiswa_${i}`]   = {required: true, maxlength: 16};
        pesan[`keterangan_beasiswa_${i}`]      = {required: 'bla bla as', maxlength: 'bla bla bla asasdas'}
        
        validasi[`tahun_mulai_beasiswa_${i}`]  = {required: true, date: true};
        pesan[`tahun_mulai_beasiswa_${i}`]     = {required: 'pesan tahun beasiswa', date: 'pesan beasiswa'}
        
        validasi[`tahun_selesai_beasiswa_${i}`] = {required: true, date: true};
        pesan[`tahun_selesai_beasiswa_${i}`]    = {required: 'asjdhasdhaks', date: 'asdasdk'};
    
    }

function crossCheck(e) {
 
    if (!$("#setuju").prop("checked")){
        swal("PERHATIAN !", "Mohon untuk bla bla bla bla", "error")
        return false;
    } 

    $("form").validate({
        rules:validasi,
        messages: pesan,
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

  

    $('#statusPendaftaran').change(function(){
        $('#statusPendaftaran option:selected').each(function () {
            if ($(this).val() === 'Pindahan') {
                $('#form-tambahan-pindahan').removeAttr('disabled')
                $('#form-nisn').show()
            } else {
                $('#form-tambahan-pindahan').attr('disabled')
                $('#form-nisn').hide()
            }
        })
    })

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
                $('#jenis_bantuan').removeAttr('disabled')
                $('#tambahan_jenis_bantuan').show()
                $('#no_bantuan').removeAttr('disabled')
                $('#tambahan_nomor_bantuan').show()
            } else {
                $('#jenis_bantuan').attr('disabled')
                $('#tambahan_jenis_bantuan').hide()
                $('#no_bantuan').attr('disabled')
                $('#tambahan_nomor_bantuan').hide()
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

    $('#tambah_prestasi').click(function(){

        var formRow                 = $(`<div class="form-row my-1" />`);
        var formGroupLG1            = $('<div class="form-group col-lg-1" />')
        var formGroupLG2            = $('<div class="form-group col-lg-2" />')
        let jenisPrestasi           = $(`<label for="jenis_prestasi">Jenis</label>
                                         <select required name="jenis_prestasi_${countFieldPrestasi}" id="jenis_prestasi_${countFieldPrestasi}" class="form-control">
                                            <option value="" selected>--Silakan Pilih--</option>
                                            <option value="Sains">Sains</option>
                                            <option value="Seni">Seni</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>`)
        let tingkatPrestasi         = $(`<label for="tingkat_prestasi">Tingkat</label> 
                                        <select required name="tingkat_prestasi_${countFieldPrestasi}" id="tingkat_prestasi_${countFieldPrestasi}" class="form-control">
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
        let namaPrestasi            = $(`<label for="nama_prestasi">Nama Prestasi</label> <input required type="text" class="form-control" name="nama_prestasi_${countFieldPrestasi}" id="nama_prestasi_${countFieldPrestasi}" placeholder="Nama Prestasi">`)
        let tahunPrestasi           = $(`<label for="tahun_prestasi">Tahun</label> <input required type="text" class="form-control tahun-only" name="tahun_prestasi_${countFieldPrestasi}" id="tahun_prestasi_${countFieldPrestasi}" placeholder="Tahun">`)
        let penyelenggara           = $(`<label for="nama_penyelenggara">Nama Penyelenggara</label> <input required type="text" class="form-control" name="penyelenggara_${countFieldPrestasi}" id="penyelenggara_${countFieldPrestasi}" placeholder="Nama Penyelenggara">`)
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
     
        var formRow             = $(`<div class="form-row my-1" />`);
        var formGroupLG2        = $('<div class="form-group col-lg-2" />')
        var formGroupLG5        = $('<div class="form-group col-lg-5" />')
        let jenisBeasiswa       = $(`<label for="jenis_beasiswa">Jenis</label> 
                                     <select required id="jenis_beasiswa_${countFieldBeasiswa}" name="jenis_beasiswa_${countFieldBeasiswa}" class="form-control">
                                        <option value=""  selected>--Silakan Pilih--</option>
                                        <option value="Anak Berprestasi">Anak Berprestasi</option>
                                        <option value="Anak Miskin">Anak Miskin</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Unggulan">Unggulan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>`)
        let keterangan          = $(`<label for="keterangan_beasiswa">Keterangan</label> <input type="text" class="form-control" name="keterangan_beasiswa_${countFieldBeasiswa}" id="keterangan_beasiswa_${countFieldBeasiswa}" placeholder="Keterangan">`)
        let tahunMulai          = $(`<label for="tahun_mulai_beasiswa">Tahun Mulai</label> <input required type="text" class="form-control tahun-only" name="tahun_mulai_beasiswa_${countFieldBeasiswa}" id="tahun_mulai_beasiswa_${countFieldBeasiswa}" placeholder="Tahun Mulai">`)
        let tahunSelesai        = $(`<label for="tahun_akhir_beasiswa">Tahun Selesai</label> <input required type="text" class="form-control tahun-only" name="tahun_selesai_beasiswa_${countFieldBeasiswa}" id="tahun_selesai_beasiswa_${countFieldBeasiswa}" placeholder="Tahun Selesai">`)
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