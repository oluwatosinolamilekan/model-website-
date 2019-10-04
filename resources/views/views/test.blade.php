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
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
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
        <header id="header">
            <div id="header-top">
                <!-- LOGO -->
                <div id="header-logo">
                    <a href="index-2.html">
                        <img src="frontend/images/logo.png" alt="" />
                    </a>
                </div>
                <!-- SOCIAL ICONS -->
                <div id="header-icons">
                    <ul class="social-icons">
                        <li>
                            <a href="#" class="fa fa-facebook-f tooltip-header" title="Facebook">Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter tooltip-header" title="Twitter">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus tooltip-header" title="Google Plus">Google</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram tooltip-header" title="Instagram">Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-vimeo tooltip-header" title="Vimeo">Vimeo</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="header-menu">
                <!-- MOBILE MENU ICON -->
                <a class="toggleMenu" href="#">MENU</a>
                <!-- MAIN MENU -->
                <nav>
                    <ul class="nav">
                        <li>
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li>
                                    <a href="about.html">About Us</a>
                                </li>
                                <li>
                                    <a href="features.html">Other Features</a>
                                </li>
                                <li>
                                    <a href="layout.html">Layout</a>
                                </li>
                                <li>
                                    <a href="#">Dropdown</a>
                                    <ul>
                                        <li>
                                            <a href="#">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#">Item 2</a>
                                        </li>
                                        <li>
                                            <a href="#">Item 3</a>
                                        </li>
                                        <li>
                                            <a href="#">Item 4</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Models</a>
                            <ul>
                                <li>
                                    <a href="models-2-columns.html">Models - 2 Columns</a>
                                </li>
                                <li>
                                    <a href="models-3-columns.html">Models - 3 Columns</a>
                                </li>
                                <li>
                                    <a href="single-model.html">Single Model 1</a>
                                </li>
                                <li>
                                    <a href="single-model2.html">Single Model 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Galleries</a>
                            <ul>
                                <li>
                                    <a href="gallery-2-columns.html">Galleries - 2 Columns</a>
                                </li>
                                <li>
                                    <a href="gallery-3-columns.html">Galleries - 3 Columns</a>
                                </li>
                                <li>
                                    <a href="gallery-4-columns.html">Galleries - 4 Columns</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li>
                                    <a href="blog.html">Blog - Sidebar</a>
                                </li>
                                <li>
                                    <a href="blog-masonry.html">Blog - Masonry</a>
                                </li>
                                <li>
                                    <a href="single-post.html">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- MAIN -->
        <main id="main">
            <!-- PAGE TITLE -->
            <div id="page-title">
                <h1><span>Galleries - 3 Columns</span></h1>
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
                                 <div id="gallery3" class="grid-container">
                                    <div class="grid-img">
                                        <a href="#" class="gallery photo">
                                            <img src="frontend/images/photos/gallery3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <h5>
                                       <a href="#">Autoplay On</a>
                                    </h5>
                                        <p>Sint admodum graviterque, occaecat lorem se singulis eruditionem sed malis aut nam quorum doctrina, possumus illum fore litteris</p>
                                    </div>
                                    <a class="arrow-button" href="#">View Gallery</a>
                                </div>
                                <!-- GALLERY 2 -->
                                <div id="gallery3" class="grid-container">
                                    <div class="grid-img">
                                        <a href="#" class="gallery photo">
                                            <img src="frontend/images/photos/gallery3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <h5>
                                       <a href="#">Autoplay On</a>
                                    </h5>
                                        <p>Sint admodum graviterque, occaecat lorem se singulis eruditionem sed malis aut nam quorum doctrina, possumus illum fore litteris</p>
                                    </div>
                                    <a class="arrow-button" href="#">View Gallery</a>
                                </div>
                                
                                <div id="gallery3" class="grid-container">
                                    <div class="grid-img">
                                        <a href="#" class="gallery photo">
                                            <img src="frontend/images/photos/gallery3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="grid-content">
                                        <h5>
                                       <a href="#">Autoplay On</a>
                                    </h5>
                                        <p>Sint admodum graviterque, occaecat lorem se singulis eruditionem sed malis aut nam quorum doctrina, possumus illum fore litteris</p>
                                    </div>
                                    <a class="arrow-button" href="#">View Gallery</a>
                                </div>
                                
                                
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