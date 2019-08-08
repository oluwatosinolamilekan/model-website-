<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ombre</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- FAVICON -->
    <link href="{{asset('frontend/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />
    <!-- CSS FILES -->
    <link href="{{asset('frontend/css/normalize.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/fakeloader.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/animations.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/tooltipster.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/nerveslider.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/media.css')}}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <!-- NOSCRIPT -->
<noscript>
    <link href="css/nojs.css" rel="stylesheet" type="text/css">
</noscript>
</head>

<body>
    <!-- FAKE LOADER -->
    <div id="fakeloader"></div>
    <!-- SEMI TRANSPARENT DARK BG COLOR -->
    <div id="bg-transparent"></div>
    <!-- MAIN CONTAINER -->
    <div id="main-container">
        <!-- HEADER -->
        @include('partials.header')
        <!-- MAIN -->
        @yield('content')
        <!-- FOOTER -->
       @include('partials.footer')
    </div>
    <!-- MAIN JS FILES -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
    <!-- FAKE LOADER -->
    <script type="text/javascript" src="{{asset('frontend/js/fakeloader.js')}}"></script>
    <!-- NERVESLIDER -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery-ui-custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/nerveslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/homeslider.js')}}"></script>
    <!-- CAROUSELS -->
    <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <!-- MODELS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#models").owlCarousel({
                items: 1,
                margin: 30,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    481: {
                        items: 1
                    },
                    641: {
                        items: 2
                    },
                    1025: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <!-- TESTIMONIALS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("#testimonials").show();
            var owl = jQuery("#testimonials").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                dots: false,
                autoHeight: false,
                margin: 100,
                mouseDrag: false,
                touchDrag: false,
                smartSpeed: 800,
                nav: false,
                loop: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut'
            });
            jQuery('#testimonials').find('.testimonial-nav-left .fa').click(function() {
                owl.trigger('prev.owl.carousel');
            });
            jQuery('#testimonials').find('.testimonial-nav-right .fa').click(function() {
                owl.trigger('next.owl.carousel');
            });
        });
    </script>
    <!-- OUR PARTNERS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("#partners").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                items: 1,
                margin: 20,
                dots: false,
                smartSpeed: 800,
                navText: ['', ''],
                nav: false,
                loop: true,
                lazyLoad: true,
                responsive: {
                    341: {
                        items: 2
                    },
                    641: {
                        items: 3
                    },
                    1025: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <!-- BACKSTRETCH (BG IMAGES) -->
    <script type="text/javascript" src="{{asset('frontend/js/backstretch.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery('.grid.hero').backstretch("frontend/images/photos/testimonials.jpg");
        });
    </script>
    <!-- TOOLTIPS -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.tooltipster.min.js')}}"></script>
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
</body>
</html>