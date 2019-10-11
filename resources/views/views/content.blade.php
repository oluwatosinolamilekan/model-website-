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
                            <a href="models-2-columns.html" class="fa fa-bolt"></a>
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
                            <a href="models-2-columns.html" class="fa fa-fire"></a>
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
                <div class="grid hero">
                    <div class="unit whole">
                        <!-- TESTIMONIALS CAROUSEL -->
                        <div id="testimonials">
                            <!-- TESTIMONIAL 1 -->
                            <div class="testimonial">
                                <div class="testimonial-right">
                                    <div class="testimonial-text">
                                        <p>Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Eu nostrud cohaere eu tempor legam ita nostrud exercitation.</p>
                                        <p class="testimonial-cite"><span>―</span> Riley Lynch</p>
                                    </div>
                                </div>
                                <div class="testimonial-left">
                                    <img src="{{asset('frontend/images/photos/test1.jpg')}}" alt="" />
                                    <!-- NAVIGATION ARROWS -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-left"><i class="fa fa-chevron-left"></i></div>
                                        <div class="testimonial-nav-right"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- TESTIMONIAL 2 -->
                            <div class="testimonial">
                                <div class="testimonial-left">
                                    <img src="{{asset('frontend/images/photos/test2.jpg')}}" alt="" />
                                    <!-- NAVIGATION ARROWS -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-left"><i class="fa fa-chevron-left"></i></div>
                                        <div class="testimonial-nav-right"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="testimonial-right">
                                    <div class="testimonial-text">
                                        <p>Aut noster multos ad commodo, admodum nulla nostrud eiusmod. Malis et aliquip si fore, sed anim sed lor. Summis mentitum eu fabulas, e sunt et fore.</p>
                                        <p class="testimonial-cite"><span>―</span> Zoe Alexander</p>
                                    </div>
                                </div>
                            </div>
                            <!-- TESTIMONIAL 3 -->
                            <div class="testimonial">
                                <div class="testimonial-left">
                                    <img src="{{asset('frontend/images/photos/test3.jpg')}}" alt="" />
                                    <!-- NAVIGATION ARROWS -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-left"><i class="fa fa-chevron-left"></i></div>
                                        <div class="testimonial-nav-right"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="testimonial-right">
                                    <div class="testimonial-text">
                                        <p>Hic varias ut irure. Iis elit summis hic iudicem, quo despic. Malis ea incurreret ingeniis. Quorum nam cernantur, sed quae voluptate cupidatat.</p>
                                        <p class="testimonial-cite"><span>―</span> Shawn Garrett</p>
                                    </div>
                                </div>
                            </div>
                            <!-- TESTIMONIAL 4 -->
                            <div class="testimonial">
                                <div class="testimonial-left">
                                    <img src="{{asset('frontend/images/photos/test4.jpg')}}" alt="" />
                                    <!-- NAVIGATION ARROWS -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-left"><i class="fa fa-chevron-left"></i></div>
                                        <div class="testimonial-nav-right"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="testimonial-right">
                                    <div class="testimonial-text">
                                        <p>Ingeniis enim sed consequat graviterque, ex cillum efflores ea litteris tamen noster non dolor, an ubi. Iis nisi duis sed commodo, non quorum.</p>
                                        <p class="testimonial-cite"><span>―</span> Hailey Fisher</p>
                                    </div>
                                </div>
                            </div>
                            <!-- TESTIMONIAL 5 -->
                            <div class="testimonial">
                                <div class="testimonial-left">
                                    <img src="{{asset('frontend/images/photos/test5.jpg')}}" alt="" />
                                    <!-- NAVIGATION ARROWS -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-left"><i class="fa fa-chevron-left"></i></div>
                                        <div class="testimonial-nav-right"><i class="fa fa-chevron-right"></i></div>
                                    </div>
                                </div>
                                <div class="testimonial-right">
                                    <div class="testimonial-text">
                                        <p>Quamquam enim malis ex nisi, a enim quibusdam commodo, singulis nisi tempor laborum, ab multos ingeniis et non. Enim incurreret ut cupidatat.</p>
                                        <p class="testimonial-cite"><span>―</span> Nevaeh Patterson</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <h3 class="border">Our Models</h3>
                        <!-- MODELS CAROUSEL -->
                        <div id="models" class="owl-carousel">
                            <!-- MODEL -->
                            <figure class="ombre-carousel">
                                <!-- MODEL IMAGE -->
                                <a href="single-model.html" class="gallery link">
                                    <img src="{{asset('frontend/images/photos/models1-square.jpg')}}" alt="" />
                                </a>
                                <!-- MODEL INFO -->
                                <figcaption>
                                    <h5><a href="single-model.html">Penny Moore</a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                    <a class="arrow-button" href="single-model.html">View Profile</a>
                                </figcaption>
                            </figure>
                            <!-- MODEL -->
                            <figure class="ombre-carousel">
                                <!-- MODEL IMAGE -->
                                <a href="single-model.html" class="gallery link">
                                    <img src="{{asset('frontend/images/photos/models2-square.jpg')}}" alt="" />
                                </a>
                                <!-- MODEL INFO -->
                                <figcaption>
                                    <h5><a href="single-model.html">Jamie Banks</a></h5>
                                    <p>Quis instituendarum cupidatat culpa aliquip si ex minim incurreret. E laborum.</p>
                                    <a class="arrow-button" href="single-model.html">View Profile</a>
                                </figcaption>
                            </figure>
                            <!-- MODEL -->
                            <figure class="ombre-carousel">
                                <!-- MODEL IMAGE -->
                                <a href="single-model.html" class="gallery link">
                                    <img src="{{asset('frontend/images/photos/models3-square.jpg')}}" alt="" />
                                </a>
                                <!-- MODEL INFO -->
                                <figcaption>
                                    <h5><a href="single-model.html">Bertha Holmes</a></h5>
                                    <p>Arbitror domesticarum ad probant, cernantur varias sint an fore ut velit 
                                        offendit.</p>
                                    <a class="arrow-button" href="single-model.html">View Profile</a>
                                </figcaption>
                            </figure>
                            <!-- MODEL -->
                            <figure class="ombre-carousel">
                                <!-- MODEL IMAGE -->
                                <a href="single-model.html" class="gallery link">
                                    <img src="{{asset('frontend/images/photos/models4-square.jpg')}}" alt="" />
                                </a>
                                <!-- MODEL INFO -->
                                <figcaption>
                                    <h5><a href="single-model.html">Patsy Medina</a></h5>
                                    <p>Sed se anim lorem dolore sed sed lorem commodo arbitrantur hic quis offendit.</p>
                                    <a class="arrow-button" href="single-model.html">View Profile</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                <div class="grid">
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
                </div>
            </div>
        </main>
@endsection

@section('script')

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