
    <header class="vs-header header-layout3">
        <div class="header-box-wrap container position-relative d-none d-xl-block">
            <div class="header-box">
                <div class="header-box__icon"><i class="fas fa-phone-alt"></i></div>
                <div class="header-box__title">Call Us For Free</div>
                <a href="tel:+25821462156" class="header-box__number" style="font-size:20px;">+(977) {{systemSetting()?->phone_number}}</a>
            </div>
        </div>
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between text-center text-lg-start">
                    <div class="col-md-auto text-center text-md-start">
                        <div class="header-links style-white">
                            <ul>
                                <li class="d-none d-xxl-inline-block"><i class="fal fa-map-marker-alt"></i>{{systemSetting()?->address}}</li>
                                <li><i class="far fa-clock"></i>Mon - Fri: 8:00AM - 6:00PM</li>
                                <li><i class="far fa-envelope"></i><a
                                        href="mailto:{{systemSetting()?->email}}">{{systemSetting()?->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="header-social style-white">
                            <span class="social-title">Follow Us On: </span>
                            <a href="{{systemSetting()?->facebook_url}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{systemSetting()?->twitter_url}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{systemSetting()?->instagram_url}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{systemSetting()?->youtube_url}}" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{route('welcome')}}"><img src="{{systemSetting()?->logo1}}" alt="{{systemSetting()?->name}}" class="logo" style="width: 150px"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu menu-style3 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="{{route('welcome')}}">Home</a>
                                        
                                    </li>
                                    <li>
                                        <a href="{{route('aboutus')}}">About Us</a>
                                    </li>
                                    <li >
                                        <a href="">Services</a>
                                        
                                    </li>
                                    <li >
                                        <a href="#">Blog</a>
                                     
                                    </li>
                                 
                                    <li>
                                        <a href="">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-btns">
                                <a href="#" class="vs-btn d-none d-xxl-inline-block">Contact Us<i
                                        class="far fa-arrow-right"></i></a>
                                <button class="icon-btn style3 sideMenuToggler"><i class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>