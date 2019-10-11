<div class="grid">
    <div class="unit whole">
        <h3 class="border">Our Models</h3>
        <!-- MODELS CAROUSEL -->
        <div id="models" class="owl-carousel">
            <!-- MODEL -->
            @foreach($random_model as $model)
            <figure class="ombre-carousel">
                <!-- MODEL IMAGE -->
                <a href="{{route('profile',$model->slug)}}" class="gallery link">
                    @if(is_null($model->profile_image) && $model->sex == 'male')
                        <img src="{{asset('frontend/images/maleunknown.jpg')}}" alt="" />

                    @elseif(is_null($model->profile_image) && $model->sex == 'female')
                        <img src="{{asset('frontend/images/ladyunknown.jpg')}}" alt="" />
                    @else
                    <img src="{{$model->profile_image}}" alt="" />
                    @endif
                </a>
                <!-- MODEL INFO -->
                <figcaption>
                    <h5><a href="{{route('profile',$model->slug)}}">
                        {{$model->first_name}}
                    </a></h5>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p> --}}
                    <a class="arrow-button" href="{{route('profile',$model->slug)}}">View Profile</a>
                </figcaption>
            </figure>
            <!-- MODEL -->
           @endforeach
        </div>
    </div>
</div>