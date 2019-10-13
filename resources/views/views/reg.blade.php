@extends('layouts.master')

@section('content')

<main id="main">
    <!-- FEATURED IMAGE -->
    <div id="featured-image-container">
        <!-- LOADER -->
        <div class="img-loading"></div>
        <div id="featured-image">
            <div id="featured-image-title">
                <h1>Sign Up</h1>
            </div>
        </div>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit half">
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                    </div>


                    <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div>

                    <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                    </div>

                    <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmation_password" placeholder="Enter Same Password" required>
                    </div>

                    <div class="form-group">
                            <label for="">Sex</label>
                            <select class="form-control" name="gender" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="profile_image" required>
                    </div>


                    <div class="form-group">
                        <input type="submit" id="sendMessage" name="sendMessage" value="Submit" />
                    </div>
                </form>
            </div>
        </div>
        <!-- GRID BORDER -->
        
    </div>
</main>


@endsection