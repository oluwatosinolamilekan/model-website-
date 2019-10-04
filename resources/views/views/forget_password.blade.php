@extends('layouts.master')

@section('content')

<main id="main">
    <!-- FEATURED IMAGE -->
    <div id="featured-image-container">
        <!-- LOADER -->
        <div class="img-loading"></div>
        <div id="featured-image">
            <div id="featured-image-title">
                <h1>Login</h1>
            </div>
        </div>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit half">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
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