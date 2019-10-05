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
                <form class="form-box" action="{{route('contact')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label>Images:</label>
                    <input type="file" name="image[]" id="senderName" required="required" maxlength="50" />
                    
                    <input type="submit" id="sendMessage" name="sendMessage" value="Upload" />
                </form>
            </div>
            <div class="unit half">
                <img src="images/photos/about-small.jpg" class="flex-img" alt="" />
                <div class="ombre-box">
                    <!-- TABLE -->
                    <ul class="ombre-table">
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-phone-square"></i>Phone</div>
                            <div class="ombre-table-right">234-435-4345</div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-envelope"></i>E-mail</div>
                            <div class="ombre-table-right"><a href="mailto:info@company.com">info@company.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-map"></i>Address</div>
                            <div class="ombre-table-right">144 King St Melbourne</div>
                        </li>
                        <li>
                            <div class="ombre-table-left"><i class="ombre-icon fa fa-fax"></i>Fax</div>
                            <div class="ombre-table-right">234-435-4346</div>
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