// testimonial
$(document).ready(function(){
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        nav: false,
        responsive: {
            0: { // For mobile devices
                items: 1
            },
            768: { // For tablets
                items: 1
            },
            1024: { // For desktops
                items: 2
            }
        }
    });
});


