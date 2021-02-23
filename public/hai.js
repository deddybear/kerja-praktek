// fungsi callback
$(document).ready(function () {
    alert('Selamat Datang')
    
    $('#tombol').click(function () {
       $('#div1').fadeIn(1000);
       $('#div2').fadeIn(2000);
       $('#div3').fadeIn(3000);
    });

    // $('#div1').mouseenter(function (){
    //     $('#div1').css("background-color", "lightgray");
    // });
    // $('#div1').mouseleave(function (){
    //     $('#div1').css("background-color", "white");
    // });
    // $('#div2').mouseenter(function (){
    //     $('#div2').css("background-color", "lightgray");
    // });
    // $('#div2').mouseleave(function (){
    //     $('#div2').css("background-color", "white");
    // });
    // $('#div3').mouseenter(function (){
    //     $('#div3').css("background-color", "lightgray");
    // });
    // $('#div3').mouseleave(function (){
    //     $('#div3').css("background-color", "white");
    // });

    $('#div1, #div2, #div3').mouseenter(function (){
        $(this).addClass('bg-secondary');
    });

    $('#div1, #div2, #div3').mouseleave(function (){
        $(this).removeClass('bg-secondary');
    });


    $('#div1').click(function (){
        $(this).fadeOut();
    });
    $('#div2').click(function (){
        $(this).fadeOut();
    });
    $('#div3').click(function (){
        $(this).fadeOut();
    });
});

/* 
 TODO: HEMAT SYNTAX
$(document).ready(function(){
      alert('Selamat Datang');

     $('#tombol').click( function () {
         $('#kotak-1').fadeIn('slow');
         $('#kotak-2').fadeIn('slow');
         $('#kotak-3').fadeIn('slow');
     })

     $('#kotak-1, #kotak-2, #kotak-3').mouseenter( function(){
         $(this).addClass('bg-secondary');
     });

     $('#kotak-1, #kotak-2, #kotak-3 ').mouseleave( function(){
         $(this).removeClass('bg-secondary');
     });

     $('#kotak-1, #kotak-2, #kotak-3').click(function(){
        $(this).fadeOut('slow');
    });
}); */