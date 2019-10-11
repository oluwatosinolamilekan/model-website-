@if(count($galleries) > 0)
<div id="slider-container">
        <div id="home-slider">
            <!-- SLIDE -->
            @foreach($galleries as $gallery)
            <div>
                <img src="{{$gallery->images}}" data-animation="image-zoom scale-right" alt="">
                <!-- SLIDE TITLE -->
                <div class="ns_slideContent">
                    <div class="top-left">
                        <h1 class="animatedmedium slideInLeft">Welcome to Ombre</h1>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
@endif