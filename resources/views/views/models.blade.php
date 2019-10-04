@extends('layouts.master')

@section('content')
<main id="main">
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
                        <!-- MODEL 1 -->
                        @foreach($models as $model)
                        <div class="grid-container">
                            <div class="grid-img">
                                <a href="{{route('profile',$model->slug)}}" class="gallery link">
                                    <img src="{{asset('frontend/images/photos/models2.jpg')}}" alt="" />
                                </a>
                            </div>
                            <div class="grid-content">
                                <h5>
                               <a href="{{route('profile',$model->slug)}}">Penny Moore</a>
                            </h5>
                                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis.</p>
                            </div>
                            <a class="arrow-button" href="{{route('profile',$model->slug)}}">View Profile</a>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                <!-- PAGER -->
                <div class="blogpager">
                    <div class="previous">
                        <a href="#" class="button"><i class="fa fa-chevron-left"></i> Prev</a>
                    </div>
                    <div class="next">
                        <a href="#" class="button">Next <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')

@endsection

