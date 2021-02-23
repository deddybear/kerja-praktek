$(document).ready( function () {
    var open = {
        panelNama     : false,
        panelUsername : false,
        panelPassword : false,
        panelEmail    : false
    }

    $('#panelNama').click(function () {
        let name = "<span class='txt-prepend strong'>bla bla bla : </span>";
        
        if (!open.panelNama) {
            $('#setting-nama').show('slow', function () {
                $('.text_panelNama').prepend(name)
                open.panelNama = true;
            })
        } 
    })
    
    $('.list-group-item').on('click', '#cancelPanelNama', function(){
        if (open.panelNama) {
            $('#setting-nama').hide('slow', function(){
                $('span.text_panelNama').find('span.txt-prepend').remove()
                open.panelNama = false;
            })
        }
        
    })

    $('#panelUsername').click(function () {
        let name = "<span class='txt-prepend strong'>bla bla bla : </span>";

        if (!open.panelUsername) {
            $('#setting-username').show('slow', function() {
                $('.text_panelUsername').prepend(name)
                open.panelUsername = true;
            })
        }
    });
    
    $('.list-group-item').on('click', '#cancelUsername', function () {
        if (open.panelUsername) {
            $('#setting-username').hide('slow', function() {
                $('span.text_panelUsername').find('span.txt-prepend').remove()
                open.panelUsername = false;
            })
        }
    })

    $('#panelPassword').click(function () {

        if (!open.panelPassword) {
            $('#setting-password').show('slow', function() {
                $('.text_panelUsername').prepend(name)
                open.panelPassword = true;
            })
        }

    });

    $('.list-group-item').on('click', '#cancelPanelPassword', function () {
        if (open.panelPassword) {
            $('#setting-password').hide('slow', function() {
                $('span.text_panelUsername').find('span.txt-prepend').remove()
                open.panelPassword = false;
            })
        }
    })

    $('#panelEmail').click(function () {
        let name = "<span class='txt-prepend strong'>bla bla bla : </span>";

        if (!open.panelEmail) {
            $('#setting-email').show('slow', function() {
                $('.text_panelEmail').prepend(name)
                open.panelEmail = true;
            })
        }

    });

    $('.list-group-item').on('click', '#cancelPanelEmail', function () {
        if (open.panelEmail) {
            $('#setting-email').hide('slow', function() {
                $('span.text_panelEmail').find('span.txt-prepend').remove()
                open.panelEmail = false;
            })
        }
    })
})


// if($(this).is(":visible")){
//     $('.text_username').addClass('ml-4 strong')
//     $('.text_username').prepend($name)
// } else {
//     $('.text_username').removeClass('ml-4 strong')
//     $('span.text_username').find('span.txt-prepend').remove()
// }