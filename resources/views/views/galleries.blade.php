@extends('layouts.gallery')

@section('content')
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
                        <div id="three-columns" data-columns>
                            <!-- GALLERY 1 -->
                            @yield('content')
                            @foreach($galleries as $gallery)
                             <div id="gallery3" class="grid-container">
                                <div class="grid-img">
                                    <a href="#" class="">
                                        <img src="{{$gallery->images}}" alt="" />
                                    </a>
                                   
                                </div>
                                <a class="arrow-button" href="#">
                                        View Gallery
                                </a>
                            </div>
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

            {{-- $listArray = [5,1,2,3,4,5,1];
            function findNumber($arr, $k) {
                $count = count($arr);
                for($i =0; $i<$count; $i++){
                    if($arr[$i] === $k){
                        return "Yes";
                    }
                    return "No";
                }
            
            }
            findNumber($listArray,5);
             --}}
             {{-- $listArray = [1,3,4,5,6,7];
function findVal($arr,$k){
  for($i=0; $i<count($arr); $i++){
      if($k === $arr[$i]){
            return "Yes";
      }else{
          return "No";
      }
      
    }
} --}}

{{-- $result = findVal($listArray,3); --}}
{{-- echo $result; --}}

        </div>
@endsection