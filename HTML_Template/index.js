
$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive: {
            0:{
                items:1
            },
            600: {
                items:3
            },
            1000: {
                items: 5
            }
        }
    });

    var $grid = $(".grid").isotope({
        itemSelector: ".grid-item",
        layoutMode: "fitRows"
    });

    $(".button-group").on("click", "button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    });

    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items:1
            },
            600: {
                items:3
            },
            1000: {
                items: 5
            }
        }
    });
    $("#latest-blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0:{
                items:1
            },
            600: {
                items:3
            },
        }
    });
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    $qty_up.click(function(e){

        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
    });
   
  });
