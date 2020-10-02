/* TICKER */
$('.single-item').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    speed: 1500,
    autoplay: true,
    autoplaySpeed: 0, 
    cssEase: 'linear',
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          arrows: false
        }
      }
    ]
  });


// ANCHOR SMOOTHSCROLL
$(document).ready(function(){
  $('a[href^="#"]').bind  ('click.smoothscroll',function (e) {
  e.preventDefault();
  
  var target = this.hash,
  $target = $(target);
  
  $('html, body').stop().animate({
  'scrollTop': $target.offset().top
  }, 600, 'swing', function () {
  window.location.hash = target;
  });
  });
  });

// WOW.js
new WOW().init();

// PROS SLIDER
function runSlider() {
  if ($(window).width() < 768 ) {
    $('.pros__inner').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false
    });
  } else {
    $('.pros__inner').unslick({
      
    });
  }
}

runSlider();

var r;

$(window).resize(function() {
    clearTimeout(r);
    r = setTimeout(runSlider, 500);
});
  