<div class="grid">
    <div class="unit whole">
        <h3 class="border">Our Models</h3>
        <!-- MODELS CAROUSEL -->
        <div id="models" class="owl-carousel">
            <!-- MODEL -->
            @foreach($random_model as $model)
            <figure class="ombre-carousel">
                <!-- MODEL IMAGE -->
                @if($model->gender == 'male' && $model->profile_image === null )
                    <img src="{{asset('frontend/images/maleunknow.jpg')}}" alt="" />
                        @elseif($model->gender == 'female' && $model->profile_image === null)
                                <img src="{{asset('frontend/images/ladyunknow.jpg')}}" alt="" />
                        @elseif($model->profile_image !== null)
                            <img src="{{$model->profile_image}}" alt="" />
                @endif
                </a>
                <!-- MODEL INFO -->
                <figcaption>
                    <h5>
                        <a href="{{route('profile',$model->slug)}}">
                        {{$model->first_name}}
                    </a>
                    </h5>
                    <a class="arrow-button" href="{{route('profile',$model->slug)}}">View Profile</a>
                </figcaption>
            </figure>
            <!-- MODEL -->
           @endforeach
        </div>
    </div>
</div>