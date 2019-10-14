  <header id="header">
            <div id="header-top">
                <!-- LOGO -->
                <div id="header-logo">
                    <a href="index-2.html">
                        <img src="{{asset('frontend/images/logo.png')}}" alt="" />
                    </a>
                </div>
                <!-- SOCIAL ICONS -->
                <div id="header-icons">
                    <ul class="social-icons">
                        <li>
                            <a href="#" class="fa fa-facebook-f tooltip-header" title="Facebook">Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-twitter tooltip-header" title="Twitter">Twitter</a>
                        </li>
                       
                        <li>
                            <a href="#" class="fa fa-instagram tooltip-header" title="Instagram">Instagram</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div id="header-menu">
                <!-- MOBILE MENU ICON -->
                <a class="toggleMenu" href="#">MENU</a>
                <!-- MAIN MENU -->
                <nav>
                    <ul class="nav">
                        <li>
                            <a href="{{route('index')}}">Home</a>
                        </li>
                        <li>
                                <a href="#">Galleries</a>
                        </li>
                        @if(!Auth::check())
                        <li>
                            <a href="{{route('login')}}">Login</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}">Sign Up</a>
                        </li>
                        @else
                        <li>
                            <a href="#">Dashboard</a>
                            <ul>
                                    <li>
                                            <a href="{{route('user.dashboard')}}">Account</a>
                                    </li>
                                <li>
                                    <a href="{{route('user.galleries')}}">My Gallery</a>
                                </li>
                                <li>
                                    <a href="{{route('upload_profile_image')}}">Upload Profile(pics)</a>
                                </li>
                                <li>
                                    <a href="{{route('edit_profile')}}">Edit Profile</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="{{route('logout')}}">Logout</a>
                        </li>

                        @endif
                        
                        <li>
                            <a href="{{route('model')}}">Models</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">Contact</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">About</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </header>
        