<footer class="footer-wrapper footer-layout3">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm footer-info_group style2">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Office Address</span>
                            <div class="footer-info_link">{{ systemSetting()?->address }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group style2">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Working Hours</span>
                            <div class="footer-info_link">Weekdays 10am - 5pm Weekend 10am - 12pm</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group style2">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Contact Us</span>
                            <div class="footer-info_link"><a
                                    href="mailto:{{ systemSetting()?->email }}">{{ systemSetting()?->email }}</a><br><a
                                    href="tel:+2597462153">(+977) {{ systemSetting()?->phone_number }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-auto" style="text-align: justify; width: 350px">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Us</h3>
                        <div class="vs-widget-about">
                            {{-- <p class="footer-text">Intrinsicly evisculate emerging cutting edge scenarios redefine
                                    future-proof e-markets demand line</p> --}}
                            <div class="">{!! systemSetting()?->footer_description !!}</div>

                            <div class="footer-social">
                                <a href="{{systemSetting()?->facebook_url}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{systemSetting()?->twitter_url}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{systemSetting()?->instagram_url}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{systemSetting()?->youtube_url}}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Explore</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">What we Offer</a></li>
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Latest Posts</a></li>
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Office Maps</h3>
                        <div class="footer-map">
                            <iframe title="office location map"
                                src="{{systemSetting()?->map_url}}"
                                width="200" height="180" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2022 <a class="text-white"
                    href="index.html">TechBiz</a>. All rights reserved by <a class="text-white"
                    href="https://themeforest.net/user/vecuro_themes">Vecuro</a>.</p>
        </div>
    </div>
</footer>


<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
