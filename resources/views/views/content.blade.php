@extends('layouts.master')

@section('content')

@section('css')
<link href="{{asset('frontend/css/nerveslider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
@endsection
<main id="main">
            <!-- SLIDER -->
            @include('views.carousel')
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit one-third">
                        <!-- ICON -->
                        <div class="icon-container">
                            <a href="models-2-columns.html" class="fa fa-diamond"></a>
                        </div>
                        <!-- ICON TEXT-->
                        <div class="icon-text">
                            <h3>Top Models</h3>
                            <p>Ane nulla eram lorem. Summis quo sed legam probant, ab cillum dolor nulla doctrina. Iis dolore officia. Ita ita varias quibusdam, hic offendit.</p>
                        </div>
                    </div>
                    <div class="unit one-third">
                        <!-- ICON -->
                        <div class="icon-container">
                            <a href="{{route('male_models')}}" class="fa fa-bolt"></a>
                        </div>
                        <!-- ICON TEXT-->
                        <div class="icon-text">
                            <h3>Men</h3>
                            <p>Voluptate illum dolor ita ipsum, quid deserunt singulis, labore admodu itamultos malis ea nam nam tamen foreame. Vidisse quid.</p>
                        </div>
                    </div>
                    <div class="unit one-third">
                        <!-- ICON -->
                        <div class="icon-container">
                            <a href="{{route('female_models')}}" class="fa fa-fire"></a>
                        </div>
                        <!-- ICON TEXT -->
                        <div class="icon-text">
                            <h3>Women</h3>
                            <p>Legam e officia ita nae nam varias, admodum ea illum officia, nisi pariatur id doloreirure, est proident se probant, et lorem appellat possumus.</p>
                        </div>
                    </div>
                </div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit one-third">
                        <h3 class="border">About Us</h3>
                        <div class="responsive-img">
                            <img src="images/photos/about-thumb.jpg" alt="" />
                        </div>
                        <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus transferrem.</p>
                        <a href="{{route('about')}}" class="button">READ MORE</a>
                    </div>
                    <div class="unit two-thirds">
                        <h3 class="border">Why Choose Us</h3>
                        <p>Commodo dolor esse in magna, a a multos senserit nam si aliqua iis multos, appellat elit senserit litteris ubi ne eram voluptate commodo si aliqua occaecat ad quem enim, eram domesticarum fabula.</p>
                        <!-- ROUNDED LIST -->
                        <ol class="rounded-list">
                            <li><span>Over 20 years experience</span>
                            </li>
                            <li><span>The best model agency in the world</span>
                            </li>
                            <li><span>Professional advice</span>
                            </li>
                        </ol>
                        <p>Laborum multos occaecat. Quae doctrina hic concursionibus non minim possumus ita labore lorem. Fugiat mentitum eu efflorescere ubi ad velit appellat.</p>
                    </div>
                </div>
                <!-- GRID -->
                
                <!-- GRID -->
                @include('views.our_model')
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                {{-- <div class="grid">
                    <div class="unit whole no-padding">
                        <!-- OUR PARTNERS CAROUSEL -->
                        <div id="partners" class="owl-carousel">
                            <!-- LOGO -->
                            <div>
                                <a href="#">
                                    <img src="{{asset('frontend/images/photos/logo1.png')}}" alt="" />
                                </a>
                            </div>
                            <!-- LOGO -->
                            <div>
                                <a href="#">
                                    <img src="{{asset('frontend/images/photos/logo2.png')}}" alt="" />
                                </a>
                            </div>
                            <!-- LOGO -->
                            <div>
                                <a href="#">
                                    <img src="{{asset('frontend/images/photos/logo3.png')}}" alt="" />
                                </a>
                            </div>
                            <!-- LOGO -->
                            <div>
                                <a href="#">
                                    <img src="{{asset('frontend/images/photos/logo4.png')}}" alt="" />
                                </a>
                            </div>
                            <!-- LOGO -->
                            <div>
                                <a href="#">
                                    <img src="{{asset('frontend/images/photos/logo5.png')}}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </main>
@endsection

@section('script')


 <!-- BACKSTRETCH (BG IMAGES) -->
 <script type="text/javascript">
     jQuery(window).load(function () {
         "use strict";
         jQuery('.grid.hero').backstretch("frontend/images/photos/testimonials.jpg");
     });
 </script>
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
@endsection