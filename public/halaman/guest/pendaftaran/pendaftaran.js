$(document).ready(function(){
    $('#form')[0].reset()
    $('#hobi').change(function(){
        $('#hobi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#form_tambahan_hobi').removeAttr('disabled')
                 $('#tambahan_hobi').show()
            } else {
                 $('#form_tambahan_hobi').attr('disabled', 'disabeld')
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
                $('#form_tambahan_cita_cita').attr('disabled', 'disabeld')
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
                $('#form_tambahan_tempat_tinggal').attr('disabled', 'disabeld')
                $('#tambahan_tempat_tinggal').hide()
            }
        })
    })

    $('#moda_transportasi').change(function(){
        $('#moda_transportasi option:selected').each(function(){
            if ($(this).text() === 'Lainnya') {
                 $('#tambahan_moda_transportasi').show()
                 $('#form_moda_transportasi').removeAttr('disabled')
            } else {
                $('#form_moda_transportasi').attr('disabled', 'disabeld')
                $('#tambahan_moda_transportasi').hide()
            }
        })
    })
})