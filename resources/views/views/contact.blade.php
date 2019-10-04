@extends('layouts.master')

@section('content')
<main id="main">
    <!-- PAGE TITLE -->
    <div id="page-title">
        <h1><span>Contact Us</span></h1>
    </div>
    <!-- PAGE CONTAINER -->
    <div id="page-container">
        <!-- GRID -->
        <div class="grid">
            <div class="unit half">
                <p>Do illum ex nulla, tempor varias possumus, te ipsum ex cernantur, eram te si quae.</p>
                <!-- CONTACT FORM -->
                <form class="form-box" action="http://ombre.wp4life.com/processform.php" method="post">
                    <label>Full name :</label>
                    <input type="text" name="senderName" id="senderName" required="required" maxlength="50" />
                    <label>Phone Number :</label>
                    <input type="number" name="phoneNumber" id="phoneNumber" required="required" />
                    <label>Email address :</label>
                    <input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
                    <label>Message :</label>
                    <textarea name="message" id="message" required="required"></textarea>
                    <input type="submit" id="sendMessage" name="sendMessage" value="Send Message" />
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
        <!-- GRID BORDER -->
        <div class="grid-border"></div>
        <!-- GRID -->
        <div class="grid">
            <div class="unit whole">
                <!-- GOOGLE MAP -->
                <div id="google-map" class="flex-iframe widescreen"></div>
            </div>
        </div>
    </div>
</main>
@endsection