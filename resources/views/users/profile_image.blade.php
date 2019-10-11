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
                <form class="form-box" action="{{route('upload_profile_image')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Profile Images:</label>
                    <input type="file" name="profile_image" required="required" />
                    
                    <input type="submit" id="sendMessage" name="sendMessage" value="Upload" />
                </form>
            </div>
            <div class="unit half">
                @if($user_details->gender == 'male' && $user_details->profile_image === null )
                    <img src="{{asset('frontend/images/maleunknow.jpg')}}" class="flex-img" alt="" />
                @elseif($user_details->gender == 'female' && $user_details->profile_image === null)
                    <img src="{{asset('frontend/images/ladyunknow.jpg')}}" class="flex-img" alt="" />
                @elseif($user_details->profile_image !== null)
                <img src="{{$user_details->profile_image}}" class="flex-img" alt="" />
                @endif
            </div>
        </div>
    </div>
</main>
@endsection