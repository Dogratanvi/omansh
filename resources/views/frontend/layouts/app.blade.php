<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type='image/x-icon'>
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

    <!-- Google Fonts link for Poppins and Mulish -->
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Shortcut Icon -->

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/special-classes.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/booking.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/gallary.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/webinar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/mediaqueries.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google tag (gtag.js) -->


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9VT5D5K2V4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-9VT5D5K2V4');
    </script>
</head>


<body>

    @if (request()->is('webinar'))
        <!-- No header for the webinar page -->
    @else
        @include('frontend.includes.header')
    @endif
    <main>
        @yield('content')
    </main>

    @if (request()->is('webinar'))
        <!-- No header for the webinar page -->
    @else
        @include('frontend.includes.footer')
    @endif

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>




<!-- Add jQuery (required for Slick Slider) -->
<script src="{{ asset('js/video-popup.js') }}"></script>
<script src="{{ asset('js/close.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/video-section.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>
<script src="https://unpkg.com/ityped@0.0.10"></script>
<script src="{{ asset('js/thumb.js') }}"></script>
<script src="{{ asset('js/top.js') }}"></script>
<script src="{{ asset('js/pages.js') }}"></script>
<script src="{{ asset('js/webinar.js') }}"></script>
<script src="{{ asset('js/type.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('contactPage');
        form.addEventListener('submit', function() {
            // Save the current scroll position
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        // Check if there's a stored scroll position and scroll to it
        var scrollPosition = sessionStorage.getItem('scrollPosition');
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            sessionStorage.removeItem('scrollPosition'); // Clear the stored position
        }
    });
</script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('newsletter_form');
        form.addEventListener('submit', function() {
            // Save the current scroll position
            sessionStorage.setItem('scrollPosition', window.scrollY);
        });

        // Check if there's a stored scroll position and scroll to it
        var scrollPosition = sessionStorage.getItem('scrollPosition');
        if (scrollPosition) {
            window.scrollTo(0, scrollPosition);
            sessionStorage.removeItem('scrollPosition'); // Clear the stored position
        }
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
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            items: 4,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                700: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            },

        });
    });
</script>

</html>
