@extends('layouts.master')

@section('content')
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
                <!-- CATEGORY MENU -->
                <ul class="horizontal-menu">
                    <li id="horizontal-menu-title">CATEGORIES</li>
                    <li><a href="gallery-2-columns.html">2 Columns</a></li>
                    <li class="active">3 Columns</li>
                    <li><a href="gallery-4-columns.html">4 Columns</a></li>
                </ul>
                <!-- MASONRY GRID -->
                <div class="masonry-grid">
                    <div id="three-columns" data-columns>
                        <!-- GALLERY 1 -->
                        <div id="gallery1" class="grid-container">
                            <div class="grid-img">
                                <a href="#" class="gallery photo">
                                    <img src="{{asset('frontend/images/photos/gallery1.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="grid-content">
                                <h5>
                               <a href="#">Photo Gallery</a>
                            </h5>
                                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet</p>
                            </div>
                            <a class="arrow-button" href="#">View Gallery</a>
                        </div>
                        <!-- GALLERY 2 -->
                        <div id="gallery3" class="grid-container">
                            <div class="grid-img">
                                <a href="#" class="gallery photo">
                                    <img src="{{asset('frontend/images/photos/gallery3.jpg')}}" alt="" />
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
                        <!-- GALLERY 3 -->
                        <div id="gallery2" class="grid-container">
                            <div class="grid-img">
                                <a href="#" class="gallery video">
                                    <img src="{{asset('frontend/images/photos/gallery2.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="grid-content">
                                <h5>
                               <a href="#">Video Gallery</a>
                            </h5>
                                <p>Expetendis veniam tempor et ubi amet doctrina id consequat aut malis, velit nam litteris, mandaremus veniam noster et aliqua</p>
                            </div>
                            <a class="arrow-button" href="#">View Gallery</a>
                        </div>
                        <!-- GALLERY 4 -->
                        <div id="gallery4" class="grid-container">
                            <div class="grid-img">
                                <a href="#" class="gallery photo">
                                    <img src="{{asset('frontend/images/photos/gallery4.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="grid-content">
                                <h5>
                               <a href="#">Without Thumbnails</a>
                            </h5>
                                <p>Mentitum malis o incididunt domesticarum, eram te nostrud, in quorum magna o laborum, quibusdam do quem laborum, velit expetendis possumus, non illum arbitrantur, se ex reprehenderit ubi id quorum ullamco offendit</p>
                            </div>
                            <a class="arrow-button" href="#">View Gallery</a>
                        </div>
                        <!-- GALLERY 5 -->
                        <div id="gallery5" class="grid-container">
                            <div class="grid-img">
                                <a href="#" class="gallery photo">
                                    <img src="{{asset('frontend/images/photos/gallery5.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="grid-content">
                                <h5>
                               <a href="#">Minimal</a>
                            </h5>
                                <p>De veniam velit ab occaecat. Aute cernantur ea sint nulla, quorum expetendis id adipisicing. In velit summis aut pariatur, non litteris ab officia</p>
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
@endsection