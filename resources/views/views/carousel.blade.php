@if(count($galleries) > 0)
<div id="slider-container">
        <div id="home-slider">
            <!-- SLIDE -->
            @foreach($galleries as $gallery)
            <div>
                <img src="{{asset('frontend/images/photos/slide2.jpg')}}" data-animation="image-zoom scale-right" alt="">
                <!-- SLIDE TITLE -->
                <div class="ns_slideContent">
                    <div class="top-left">
                        <h1 class="animatedmedium slideInLeft">Welcome to Ombre</h1>
                        <p class="animated slideInLeft"><span>Legam e officia ita nae</span></p>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
@endif