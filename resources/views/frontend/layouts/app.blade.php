<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}"  type='image/x-icon'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>OMANSH Health & Fitness - Women's Health, Physiotherapy, Yoga</title>
    @include('frontend.includes.meta')
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
   
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- StyleSheet link CSS -->




    
    <!-- Shortcut Icon -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/gallary.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/mediaqueries.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google tag (gtag.js) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9VT5D5K2V4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-9VT5D5K2V4');
    </script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9VT5D5K2V4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-9VT5D5K2V4');
</script>



</head>

<body>
    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>


    @include('frontend.includes.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/video-popup.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

<!-- Add jQuery (required for Slick Slider) -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/video-section.js') }}"></script>
<script src="{{ asset('js/animation.js')}}"></script>
<script src="https://unpkg.com/ityped@0.0.10"></script>
<script src="{{ asset('js/type.js') }}"></script>
<script>
$(document).on("click", ".btn-block", function() {
    var itemid = $(this).attr('data-item');
    $("#lineitem").attr("src", itemid)
});

 // Pagination on video
 $(document).ready(function() {

$(document).on('click', '.page-link', function(event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
});

});

</script>


<script type="text/javascript">
    $('#newsletter_form').on('submit', function(e) {

        e.preventDefault();
        var email = $("#email").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ url('newsletter') }}",
            data: {
                'email': email
            },
            success: function(response) {

                $('.flash-message').html("Newsletter Submit Successfully");
                alert(response.flash_message);
                $('.flash-message').fadeOut(5000);
              
                setTimeout(() => {
                    var element = document.getElementById("newsletter_form");
                    location.reload();
                    element.reset();
                    $('.flash-message').html("Newsletter Submit Successfully");
                
                }, 500);
            },
            error: function() {

                
                $('.flash-message').html("Newsletter Not Submitted Successfully");

                $('.flash-message').fadeOut(5000);
                setTimeout(() => {
                    var element = document.getElementById("newsletter_form");
                    element.reset();
                }, 500);
            }
        });

    });
</script>


<script>
$(document).ready(function() {
    $(".content").slice(0, 8).show();
    $("#loadMore").on("click", function(e) {
        e.preventDefault();
        $(".content:hidden").slice(0, 8).slideDown();
        if ($(".content:hidden").length == 0) {
            $("#loadMore").text("No Content").addClass("noContent");
        }
    });
})

</script>
<script>
$(document).ready(function() {
    $(".contents").slice(0, 8).show();
    $("#loadMoree").on("click", function(e) {
        e.preventDefault();
        $(".contents:hidden").slice(0, 8).slideDown();
        if ($(".contents:hidden").length == 0) {
            $("#loadMoree").text("No Content").addClass("noContent");
        }
    });
})

</script>
<script>
$(document).ready(function() {
    $(".innertext").slice(0, 6).show();
    $("#loadMor").on("click", function(e) {
        e.preventDefault();
        $(".innertext:hidden").slice(0, 6).slideDown();
        if ($(".innertext:hidden").length == 0) {
            $("#loadMor").text("No Content").addClass("noContent");
        }
    });
})

</script>

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
let modalId = $('#image-gallery');

$(document)
    .ready(function() {

        loadGallery(true, 'a.thumbnail');

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                    .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                    .hide();
            }
        }

        /**
         *
         * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
         * @param setClickAttr  Sets the attribute for the click handler.
         */

        function loadGallery(setIDs, setClickAttr) {
            console.log(setIDs, setClickAttr, 'image gallery');
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function() {
                    if ($(this)
                        .attr('id') === 'show-previous-image') {
                        current_image--;
                    } else {
                        current_image++;
                    }

                    selector = $('[data-image-id="' + current_image + '"]');
                    updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                    .text($sel.data('title'));
                $('#image-gallery-image')
                    .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                    .each(function() {
                        counter++;
                        $(this)
                            .attr('data-image-id', counter);
                    });
            }
            $(setClickAttr)
                .on('click', function() {
                    updateGallery($(this));
                });
        }
    });

// build key actions
$(document)
    .keydown(function(e) {
        e.preventDefault();
        switch (e.which) {
            case 37: // left
                if ((modalId.data('bs.modal') || {})) {
                    $('#show-previous-image')
                        .click();
                }
                break;

            case 39: // right
                if ((modalId.data('bs.modal') || {})) {
                    $('#show-next-image')
                        .click();
                }
                break;

            default:
                return;
        }
        e.preventDefault();
    });
</script>

<script>
     $(document).ready(function(){
    $('.autoplay').owlCarousel({
        loop:true,
        rtl:true,
        margin:10,
        nav:false,
       dots:true,
        items:4, // Remove stagePadding
        loop:true,
        autoplay:true,
        autoplaySpeed:2500,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            700:{
                items:4
            },
            1000:{
                items:4
            }
        },
  
    });
});
    </script>


</html>
