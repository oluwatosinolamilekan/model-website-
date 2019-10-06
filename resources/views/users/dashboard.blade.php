@extends('layouts.master')

@section('content')
<main id="main">
    <!-- PAGE TITLE -->
    <div id="page-title">
        <h1><span>Dashboard</span></h1>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit half">
                <!-- CONTACT FORM -->
                <form class="form-box" action="{{route('user.dashboard')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Images:</label>
                    <input type="file" name="images[]" required="required" multiple/>
                    
                    <input type="submit" id="sendMessage" name="sendMessage" value="Upload" />
                </form>
            </div>
            <div class="unit half">
                <img src="images/photos/about-small.jpg" class="flex-img" alt="" />
                <div class="ombre-box">
                    <!-- TABLE -->
                    <ul class="ombre-table">
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-phone-square"></i>Total Photo</div>
                            <div class="ombre-table-right">22</div>
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
                            	23
                        	</div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-fax">
                            	
                            </i>Pending Pictures</div>
                            <div class="ombre-table-right">22</div>
                        </li>
                    </ul>
                    <!-- SOCIAL ICONS -->
                    <ul class="social-icons model-social">
                        <li>
                            <a href="#" class="fa fa-facebook-f tooltip-pink" title="Facebook">Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter tooltip-pink" title="Twitter">Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-google-plus tooltip-pink" title="Google Plus">Google</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram tooltip-pink" title="Instagram">Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-vimeo tooltip-pink" title="Vimeo">Vimeo</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection