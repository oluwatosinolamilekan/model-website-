@extends('layouts.master')

@section('content')

<style>
    .select-control{
    width: 75% !important;
    float: left;
    margin: 0px;
    border-right: none !important;
    height: 50px;
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.select-control:focus {
    animation: none !important;
}
</style>
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
            <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                            <label for="">Gender</label>
                            <input type="text" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmation_password" placeholder="Enter Same Password">
                    </div>

                    <div class="form-group">
                            <label for="">Sex</label>
                            <select class="form-control" name="sex" required>
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>



                    <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                    </div>

                    <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city" placeholder="Enter City">
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