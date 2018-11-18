$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        speed: 1000,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false,
        cssEase: 'linear'
    });
  });

