@extends('layouts.gallery')

@section('content')
    <!-- PAGE TITLE -->
    <div id="page-title">
            <h1><span>Models</span></h1>
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
                            @yield('content')
                            @foreach($models as $model)
                             <div id="gallery3" class="grid-container">
                                <div class="grid-img">
                                    <a href="{{route('profile',$model->slug)}}" class="">
                                        @if($model->gender == 'male' && $model->profile_image === null )
                                                <img src="{{asset('frontend/images/maleunknow.jpg')}}" alt="" />
                                            @elseif($model->gender == 'female' && $model->profile_image === null)
                                                    <img src="{{asset('frontend/images/ladyunknow.jpg')}}" alt="" />
                                            @elseif($model->profile_image !== null)
                                                <img src="{{$model->profile_image}}" alt="" />
                                        @endif
                                        {{-- <img src="{{asset('frontend/images/photos/gallery3.jpg')}}" alt="" /> --}}
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
@endsection