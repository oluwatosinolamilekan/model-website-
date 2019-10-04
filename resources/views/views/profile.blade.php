@extends('layouts.master')

@section('content')
<main id="main">
    <div id="page-title">
        <h1><span>{{$models_profile->first_name}}</span></h1>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit golden-large">
                <!-- MODEL CAROUSEL -->
                <div id="model-gallery" class="owl-carousel">
                    <!-- IMAGE -->
                    <div class="ombre-carousel">
                        <a href="{{asset('frontend/images/photos/model1.jpg" class="gallery photo')}}" data-title="Lorem Ipsum Dolor">
                            <img src="{{asset('frontend/images/photos/model-slider1.jpg')}}" alt="" />
                        </a>
                    </div>
                    <!-- IMAGE -->
                    <div class="ombre-carousel">
                        <a href="{{asset('frontend/images/photos/model6.jpg" class="gallery photo')}}" data-title="Lorem Ipsum Dolor">
                            <img src="{{asset('frontend/images/photos/model-slider2.jpg')}}" alt="" />
                        </a>
                    </div>
                    <!-- IMAGE -->
                    <div class="ombre-carousel">
                        <a href="{{asset('frontend/images/photos/model3.jpg" class="gallery photo')}}" data-title="Lorem Ipsum Dolor">
                            <img src="{{asset('frontend/images/photos/model-slider3.jpg')}}" alt="" />
                        </a>
                    </div>
                    <!-- IMAGE -->
                    <div class="ombre-carousel">
                        <a href="{{asset('frontend/images/photos/model4.jpg" class="gallery photo')}}" data-title="Lorem Ipsum Dolor">
                            <img src="{{asset('frontend/images/photos/model-slider4.jpg')}}" alt="" />
                        </a>
                    </div>
                </div>
                <!-- EXPERIENCES -->
                <h3 class="border">Education & Qualification</h3>
                <div class="experience-box">
                    <div class="experience-title">
                        <h5>Model Fashion Academy</h5>
                        <p>2006 – 2010</p>
                    </div>
                    <p>Pariatur ex malis hic probant qui nulla. Aut est irure incurreret a appellat si quamquam hic ne ullamco coniunctione, a noster expetendis. Ea iudicem exquisitaque ab nisi commodo sed malis fore. Singulis cohaerescant e mandaremus, o enim adipisicing ad in quem consectetur, se amet commodo ne sed mentitum ad nostrud iis se quis eiusmod, senserit minim a pariatur comprehenderit, ubi proident et senserit.</p>
                </div>
                <div class="experience-box">
                    <div class="experience-title">
                        <h5>Bachelor of Fine Arts</h5>
                        <p>Fashion Design Degree</p>
                    </div>
                    <p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica. Appellat philosophari qui laboris ea o ubi philosophari.</p>
                </div>
            </div>
            <div class="unit golden-small">
                <img class="flex-img" src="{{asset('frontend/images/photos/model5.jpg')}}" />
                <div class="ombre-box">
                    <!-- TABLE -->
                    <ul class="ombre-table">
                        <li>
                            <div class="ombre-table-left">HEIGHT</div>
                            <div class="ombre-table-right">5,9</div>
                        </li>
                        <li>
                            <div class="ombre-table-left">HAIR</div>
                            <div class="ombre-table-right">Brown</div>
                        </li>
                        <li>
                            <div class="ombre-table-left">EYES</div>
                            <div class="ombre-table-right">Green</div>
                        </li>
                        <li>
                            <div class="ombre-table-left">BUST</div>
                            <div class="ombre-table-right">34</div>
                        </li>
                        <li>
                            <div class="ombre-table-left">WAIST</div>
                            <div class="ombre-table-right">24</div>
                        </li>
                        <li>
                            <div class="ombre-table-left">SHOE</div>
                            <div class="ombre-table-right">10</div>
                        </li>
                    </ul>
                    <p>Dancer, Actress, Singer, Musician, Acrobatics and Gymnastics, Sports, Voice Over, Basic French and Italian.</p>
                    <ul class="social-icons model-social">
                        <li>
                            <a href="#" class="fa fa-twitter tooltip-pink" title="Twitter">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<!-- MODEL CAROUSEL -->
<script type="text/javascript">
    jQuery(window).load(function () {
        jQuery("#model-gallery").owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            dots: true,
            autoHeight: true,
            margin: 100,
            mouseDrag: false,
            smartSpeed: 800,
            navText: ['', ''],
            nav: false,
            loop: true,
            animateIn: 'zoomIn',
            animateOut: 'zoomOut'
        });
    });
</script>
    <!-- RESPONSIVE VIDEO -->
 
<script type="text/javascript" src="{{asset('frontend/js/jquery.fitvids.js')}}"></script>
   
    <!-- TOOLTIPS -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.tooltipster.min.js')}}"></script>
    <!-- COLORBOX -->
    <script type="text/javascript" src="{{asset('frontend/js/colorbox.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery("#model-gallery a").colorbox({
                rel: 'photo-gallery',
                title: function () {
                    return jQuery(this).data('title');
                },
                maxWidth: '100%',
                maxHeight: '100%'
            });
        });
    </script>
@endsection