

// Owlcarousel
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    center: true,
    navText: [
        "<i class='fa fa-angle-left'></i>",
        "<i class='fa fa-angle-right'></i>"
    ],
    responsive:{
        320: {
            items: 1
        },
        360: {
            items: 1
        },
        375: {
            items: 1
        },
        480: {
            items: 2
        },
        768: {
            items: 4
        },
        991: {
            items: 4
        },
        1024: {
            items: 4
        },
        1200: {
            items: 5
        }
    }
  });
});