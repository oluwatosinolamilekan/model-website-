@extends('layouts.master')

@section('css')
<link href="{{asset('frontend/css/nerveslider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<main id="main">
    <div id="page-title">
        <h1><span>{{$models_profile->first_name." ".$models_profile->last_name}}</span></h1>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit golden-large">
                <!-- MODEL CAROUSEL -->
                <div id="model-gallery" class="owl-carousel">
                    <!-- IMAGE -->
                    @if($models_profile->gallaries)
                    
                        @foreach($models_profile->gallaries->take(4) as $gallery)

                        <div class="ombre-carousel">
                            <a href="{{ $gallery->images }}" class="gallery photo" data-title="{{$models_profile->first_name}}">
                                <img src="{{ $gallery->images }}"  alt="" />
                            </a>
                        </div>

                        @endforeach
                        
                        @else

                    @endif
                    
                   
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