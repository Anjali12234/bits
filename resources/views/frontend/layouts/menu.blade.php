<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('welcome') }}"><img src="{{ systemSetting()?->logo1 }}" alt="{{ systemSetting()?->name }}"
                    class="logo" style="width: 150px"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('welcome') }}">Home</a>

                </li>
                <li>
                    <a href="{{ route('aboutus') }}">About Us</a>
                </li>
                <li>
                    <a href="blog.html">Services</a>

                </li>
                <li>
                    <a href="#none">Blog</a>

                </li>

                <li>
                    <a href="contact.html">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block  ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="vs-widget-about">
                <div class="footer-logo">
                    <a href="{{ route('welcome') }}"><img src="{{ systemSetting()?->logo1 }}"
                            alt="{{ systemSetting()?->name }}" class="logo" style="width: 150px"></a>
                </div>
                <p class="footer-text">{!! systemSetting()?->footer_description !!}</p>
                <div class="footer-social">
                    <a href="{{ systemSetting()?->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ systemSetting()?->twitter_url }}"><i class="fab fa-twitter"></i></a>
                    <a href="{{ systemSetting()?->instagram_url }}"><i class="fab fa-instagram"></i></a>
                    <a href="{{ systemSetting()?->youtube_url }}"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="widget  ">
            <h4 class="widget_title">Gallery Posts</h4>
            <div class="sidebar-gallery">
                @foreach (galleries() as $gallery)
                                
              
                    <div class="gallery-thumb">
                        <img src="{{ count($gallery->files) > 0 ? $gallery->files?->random()->file_url : '' }}" alt="{{$gallery->title}}" style="height: 148px;"
                            class="w-100">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Office Maps</h3>
            <div class="footer-map">
                <iframe title="office location map" src="{{ systemSetting()?->map_url }}" width="200" height="180"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
