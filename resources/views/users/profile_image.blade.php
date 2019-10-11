@extends('layouts.master')

@section('content')
<main id="main">
    <!-- PAGE TITLE -->
    <div id="page-title">
        <h1><span>Profile Image</span></h1>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit half">
                <!-- CONTACT FORM -->
                <form class="form-box" action="{{route('user.dashboard')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Profile Images:</label>
                    <input type="file" name="profile_image" required="required" />
                    
                    <input type="submit" id="sendMessage" name="sendMessage" value="Upload" />
                </form>
            </div>
            {{-- <div class="unit half">
                <img src="images/photos/about-small.jpg" class="flex-img" alt="" />
                <div class="ombre-box">
                    <!-- TABLE -->
                    <ul class="ombre-table">
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-phone-square"></i>Total Photo</div>
                            <div class="ombre-table-right">
                            	{{$total_pictures}}
                        	</div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-envelope"></i>Photos</div>
                            <div class="ombre-table-right">
                            	<a href="#">
                            		View Photos
                            	</a>
                            </div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-map"></i>Approve Pictures</div>
                            <div class="ombre-table-right">
                            	{{$active_pictures_count}}
                        	</div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-fax">
                            	
                            </i>Pending Pictures</div>
                            <div class="ombre-table-right">
                            	{{$deactive_pictures_count}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</main>
@endsection