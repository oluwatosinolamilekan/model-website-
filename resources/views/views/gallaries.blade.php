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
    <link href="{{asset('frontend/css/colors.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('frontend/css/media.css')}}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    <!-- NOSCRIPT -->
    <noscript>
        <link href="{{asset('frontend/css/nojs.css')}}" rel="stylesheet" type="text/css">
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
        <main id="main">
            <!-- PAGE TITLE -->
            <div id="page-title">
                <h1><span>Galleries</span></h1>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <!-- MASONRY GRID -->
                        <div class="masonry-grid">
                            <div id="three-columns" data-columns>
                                <!-- GALLERY 1 -->
                                @foreach($models as $model)
                                 <div id="gallery3" class="grid-container">
                                    <div class="grid-img">
                                        <a href="{{route('profile',$model->slug)}}" class="">
                                            <img src="{{asset('frontend/images/photos/gallery3.jpg')}}" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <h5>
                                       <a href="{{route('profile',$model->slug)}}">
                                            {{$model->first_name." ".$model->last_name}}
                                        </a>
                                    </h5>
                                    </div>
                                    <a class="arrow-button" href="{{route('profile',$model->slug)}}">
                                            View Gallery
                                    </a>
                                </div>
                                <!-- GALLERY 2 -->
                                @endforeach
                            </div>
                        </div>
                        <!-- PAGER -->
                        <div class="blogpager">
                            <div class="previous">
                                <a href="#" class="button"><i class="fa fa-chevron-left"></i> Older Galleries</a>
                            </div>
                            <div class="next">
                                <a href="#" class="button">Newer Galleries <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- FOOTER -->
        @include('partials.footer')
    </div>
    <!-- MAIN JS FILES -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
    <!-- FAKE LOADER -->
    <script type="text/javascript" src="{{asset('frontend/js/fakeloader.js')}}"></script>
    <!-- BACKSTRETCH (BG IMAGE AND FEATURED IMAGE) -->
    <script type="text/javascript" src="{{asset('frontend/js/backstretch.min.js')}}"></script>
    <!-- MASONRY GRID -->
    <script type="text/javascript" src="{{asset('frontend/js/salvattore.min.js')}}"></script>
    <!-- TOOLTIPS -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery.tooltipster.min.js')}}"></script>
    <!-- LIGHTGALLERY -->
    <script type="text/javascript" src="{{asset('frontend/js/lightgallery.min.js')}}"></script>
    <!-- Galleries -->
    <script type="text/javascript" src="{{asset('frontend/js/galleries.js')}}"></script>
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>
</body>
</html>