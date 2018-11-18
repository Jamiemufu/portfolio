$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $('.slider').slick({
        arrows: false,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });

    $('.left').click(function(){
        $('.slider').slick('slickPrev');
      })

      $('.right').click(function(){
        $('.slider').slick('slickNext');
      })
  });

