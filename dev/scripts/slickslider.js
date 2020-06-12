
$(document).ready(function(){
    $('.slick-slider').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear',
        responsive: [
            {
              breakpoint: 690,
              settings: {
                settings: "unslick",  

              }
            },

          ]
    });
  });