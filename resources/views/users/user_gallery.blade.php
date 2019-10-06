@extends('layouts.master')

@section('content')
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
                            <div id="three-columns" >
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