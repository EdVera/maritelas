$('#slider').slick({
  dots: true,
  infinite: true,
  accessibility:true,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow:"<button type='button' class='slick-prev' >Prev</button>",
  nextArrow:"<button type='button' class='slick-next' >Next</button>"
});

$('#courses').slick({
  lazyLoad: 'progresive',
  infinite: true,
  accessibility:true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow:"<button type='button' class='slick-prev' style='left:-50px'>Prev</button>",
  nextArrow:"<button type='button' class='slick-next' style='right:-50px'>Next</button>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('#products').slick({
  lazyLoad: 'progresive',
  infinite: true,
  accessibility:true,
  prevArrow:"<button type='button' class='slick-prev' style='left:-50px'>Prev</button>",
  nextArrow:"<button type='button' class='slick-next' style='right:-50px'>Next</button>"
});


$('.marcas').slick({
  infinite: true,
  accessibility:true
});
