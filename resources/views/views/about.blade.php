@extends('layouts.master')

@section('content')

<main id="main">
            <!-- FEATURED IMAGE -->
            <div id="featured-image-container">
                <!-- LOADER -->
                <div class="img-loading"></div>
                <div id="featured-image">
                    <div id="featured-image-title">
                        <h1>About Us</h1>
                        <p><span>Quid o quibusdam te enim ita sea qui</span></p>
                    </div>
                </div>
            </div>
            <!-- PAGE CONTAINER -->
            <div id="page-container">
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                        <h3 class="border">Who We Are</h3>
                        <p>De offendit si officia ne duis eu ut aliqua doctrina se a legam legam aut quibusdam, eiusmod sunt iis aliquip praesentibus. Quamquam firmissimum e singulis e eu probant voluptatibus.</p>
                        <p>Enim incididunt imitarentur, dolor e eu aute fabulas id aut aliqua nescius excepteur, quis expetendis despicationes, an quae philosophari id cillum. Quorum si voluptate et quem, fugiat cupidatat ex tempor.</p>
                    </div>
                    <div class="unit half">
                        <!-- FLEX VIDEO -->
                        <div class="flex-video" data-pe-videoid="feOScd2HdiU" data-thumb="{{asset('frontend/images/photos/about-video.jpg')}}"></div>
                    </div>
                </div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                        <a href="{{asset('frontend/images/photos/about2.jpg')}}" class="gallery photo enable-colorbox">
                            <img class="flex-img" src="{{asset('frontend/images/photos/about2.jpg')}}" alt="" />
                        </a>
                    </div>
                    <div class="unit half">
                        <h3 class="border">What We Do</h3>
                        <p>E enim occaecat nescius, fabulas veniam enim vidisse elit ubi se multos proident exquisitaque, si enim cupidatat. Possumus fore culpa laboris nulla si offendit tamen elit te esse. Quem a non quis cernantur. Legam voluptatibus arbitror sunt.</p>
                        <p>Litteris efflorescere ab aliquip qui do do ipsum possumus. Hic nulla distinguantur, o in despicationes, an appellat id incididunt, fabulas. Ubi summis cernantur.</p>
                    </div>
                </div>
                <!-- GRID HERO -->
                <div class="grid hero">
                    <div class="unit whole">
                        <h3>What makes us stand out from the crowd?</h3>
                        <p>Litteris efflorescere ab aliquip qui do do ipsum possumus</p>
                    </div>
                </div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                        <div class="icon-left">
                            <!-- ICON -->
                            <div class="icon-container">
                                <a href="#" class="fa fa-map-marker"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="icon-text">
                                <h5>Central Location</h5>
                                <p>Te summis mentitum ullamco, aliqua nam officia do nescius dolor quem an ipsum,eu quorum laborum philosophari. Sint est ubi aliqua cernantur nam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit half">
                        <div class="icon-left">
                            <!-- ICON -->
                            <div class="icon-container">
                                <a href="#" class="fa fa-flag"></a>
                            </div>
                            <!-- ICON TEXT -->
                            <div class="icon-text">
                                <h5>Industry Experience</h5>
                                <p>Officia exercitation do nescius. Est nam legam sint duis. Cernantur quis iudicem ingeniis, sint hic mandaremus. Hic summis dolore e quibusdam, commodo.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit half">
                        <div class="icon-left">
                            <!-- ICON -->
                            <div class="icon-container">
                                <a href="#" class="fa fa-users"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="icon-text">
                                <h5>Model Bootcamp</h5>
                                <p>Voluptate illum dolor ita ipsum, quid deserunt singulis, labore admodum itamultos malis ea nam nam tamen foreamet. Vidisse quid incurreret ut ut labore possumus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit half">
                        <div class="icon-left">
                            <!-- ICON -->
                            <div class="icon-container">
                                <a href="#" class="fa fa-rocket"></a>
                            </div>
                            <!-- ICON TEXT -->
                            <div class="icon-text">
                                <h5>Professional Advice</h5>
                                <p>Legam e officia ita nae nam varias, admodum ea illum officia, nisi pariatur id doloreirure, est proident se probant, et lorem appellat possumus appellat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- GRID BORDER -->
                <div class="grid-border"></div>
                <!-- GRID -->
                <div class="grid">
                    <div class="unit whole">
                        <h3 class="border">Meet Our Team</h3>
                        <!-- MEMBERS CAROUSEL -->
                        <div id="ourteam" class="owl-carousel">
                            <!-- MEMBER -->
                            <figure class="ombre-carousel">
                                <!-- MEMBER IMAGE -->
                                <img src="{{asset('frontend/images/photos/team1.jpg')}}" alt="" />
                                <!-- MEMBER INFO -->
                                <figcaption>
                                    <h5>John Doe</h5>
                                    <p>Nescius quae sint ubi quid, de sint quamquam</p>
                                    <div class="social-icons-box">
                                        <ul class="social-icons team-social">
                                            <li>
                                                <a href="#" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-twitter tooltip-pink" title="Twitter">Twitter</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- MEMBER -->
                            <figure class="ombre-carousel">
                                <!-- MEMBER IMAGE -->
                                <img src="{{asset('frontend/images/photos/team2.jpg')}}" alt="" />
                                <!-- MEMBER INFO -->
                                <figcaption>
                                    <h5>Jane Black</h5>
                                    <p>Vidisse anim admodum commo ea ne veniam</p>
                                    <div class="social-icons-box">
                                        <ul class="social-icons team-social">
                                            <li>
                                                <a href="#" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-twitter tooltip-pink" title="Twitter">Twitter</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-behance tooltip-pink" title="Behance">Behance</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-vimeo tooltip-pink" title="Vimeo">Vimeo</a>
                                            </li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- MEMBER -->
                            <figure class="ombre-carousel">
                                <!-- MEMBER IMAGE -->
                                <img src="{{asset('frontend/images/photos/team3.jpg')}}" alt="" />
                                <!-- MEMBER INFO -->
                                <figcaption>
                                    <h5>Michael Burn</h5>
                                    <p>Eiusmod domesticarum nam ullamco, non hic quid</p>
                                    <div class="social-icons-box">
                                        <ul class="social-icons team-social">
                                            <li>
                                                <a href="#" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-flickr tooltip-pink" title="Flickr">Flickr</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                                            </li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                            <!-- MEMBER -->
                            <figure class="ombre-carousel">
                                <!-- MEMBER IMAGE -->
                                <img src="{{asset('frontend/images/photos/team4.jpg')}}" alt="" />
                                <!-- MEMBER INFO -->
                                <figcaption>
                                    <h5>Jason Curly</h5>
                                    <p>Te ne tractavissent sed malis litteris sed arbitror</p>
                                    <div class="social-icons-box">
                                        <ul class="social-icons team-social">
                                            <li>
                                                <a href="#" class="fa fa-facebook-f">Facebook</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-flickr">Flickr</a>
                                            </li>
                                            <li>
                                                <a href="#" class="fa fa-instagram">Instagram</a>
                                            </li>
                                        </ul>
                                    </div>
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