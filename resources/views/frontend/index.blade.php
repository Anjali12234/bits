@extends('frontend.layouts.master')
@section('content')
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="980" data-container="1900" data-slidertype="responsive">
            @foreach ($sliders as $slider)
                <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                    <img width="1920" height="980" src="{{ $slider->image }}" class="ls-bg" alt="slider-bg" />
                    <img width="664" height="522" src="{{ asset('assets/frontend/img/hero/hero-shape-2-2.png') }}"
                        class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image"
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none;
                     font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; 
                     background-repeat:no-repeat; top:463px; left:-6px;"
                        data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; 
                    offsetyout:bottom;">
                    <img width="1923" height="90" src="{{ asset('assets/frontend/img/hero/hero-shape-2-1.png') }}"
                        class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="hero shape"
                        style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none;
                     font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:894px; left:-13px;"
                        data-ls="easingin:easeOutQuint; static:forever;">
                    <div style="-webkit-text-stroke: 1px rgba(255,255,255,0.10); font-size:300px; text-align:center; font-style:normal; 
                text-decoration:none; text-transform:uppercase; font-weight:600; letter-spacing:0px; border-style:solid; border-color:#000; 
                background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; width:1700px; left:50%; top:290px;
                 color:rgba(255, 255, 255, 0.05);"
                        class="ls-l ls-text-layer"
                        data-ls="durationin:1500; delayin:1000; parallax:true; parallaxlevel:8; parallaxaxis:x;">Solution
                    </div>
                    <p style="font-size:20px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; 
                letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:315px; left:50%; 
                width:1000px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                        {{ $slider->title1 }}</p>
                    <h1 style="top:370px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:72px; color:#ffffff; font-family:Exo; width:1000px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                        {{ $slider->title2 }}
                    </h1>

                    <div style="top:595px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                        <div class="ls-btn-group justify-content-center">
                            <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                            <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:352px; top:674px; width:120px; height:120px; line-height:120px;"
                        class="ls-l ls-play-btn ls-hide-tablet ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                    <ls-layer
                        style="font-size:24px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; background-color:transparent; cursor:auto; left:502px; top:705px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:100; durationin:1500; delayin:1100; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        Watch Our Story
                    </ls-layer>
                    <div style="font-size:16px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; left:502px; top:740px;"
                        class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:100; durationin:1500; delayin:1300; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint;">
                        Subscribe Now</div>
                    <p style="text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; top:310px; left:50%; width:1000px; font-size:40px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">
                        SUCCESS YOUR BUSINESS</p>
                    <h1 style="top:404px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; color:#ffffff; font-family:Exo; width:1200px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                        Excellent IT services for
                    </h1>
                    <h1 style="top:511px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:110px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1200px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer"
                        data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                        your success
                    </h1>
                    <div style="top:713px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                        class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer"
                        data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                        <div class="ls-btn-group justify-content-center">
                            <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                            <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:50%; top:145px; width:120px; height:120px; line-height:120px;"
                        class="ls-l ls-play-btn ls-hide-desktop ls-hide-phone ls-html-layer"
                        data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                    <h1 style="top:132px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; color:#ffffff; font-family:Exo; width:1800px;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                        data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                        Excellent IT services for
                    </h1>
                    <h1 style="top:305px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:140px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto; width:1800px;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer"
                        data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                        your success
                    </h1>
                    <div style="top:599px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;"
                        class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer"
                        data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                        <div class="ls-btn-group justify-content-center">
                            <a href="about.html" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                            <a href="blog.html" class="vs-btn style2 ls-hero-btn">READ MORE<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    @if (!empty($about))
        <section class=" space">
            <div class="container">
                <div class="row gx-70">
                    <div class="col-lg-6 col-xl-auto mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img style="width: 505px; height: 473px;" src="{{ $about->image }}" alt="About image">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-xl align-self-center wow fadeInUp" data-wow-delay="0.4s">
                        <span class="sec-subtitle2 mb-lg-4 pb-lg-2"><i class="fal fa-arrow-right"></i>Our
                            Solution</span>
                        <h2 class="sec-title3 h1 pb-lg-3">{{ $about->title }}</h2>
                        <div class="fs-md mb-4 pb-2 text-justify">{!! Str::limit(strip_tags($about?->description), 500, '...') !!}</div>
                        <a href="{{route('aboutus')}}" class="vs-btn style7">Learn More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (!empty($services) && $services->count() > 0)
        <section class=" space-top space-extra-bottom" data-bg-src="{{ asset('assets/frontend/img/bg/sr-bg-1-1.png') }}">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="title-area">
                            <span class="sec-subtitle">Our Latest Services</span>
                            <h2 class="sec-title h1">What Kind of Services We are Offering</h2>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="0.2s">
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-4">
                            <div class="service-style1">
                                <div class="service-bg"
                                    data-bg-src="{{ asset('assets/frontend/img/bg/sr-box-bg-1.jpg') }}">
                                </div>
                                <div class="service-icon"><img src="{{ $service->image }}" alt="Features"></div>
                                <h3 class="service-title h5"><a href="service-details.html">{{ $service->title }}</a>
                                </h3>
                                <p class="service-text">{!! Str::limit(strip_tags($service?->description), 100, '...') !!}</p>
                                <a href="service-details.html" class="vs-btn style3">Read More<i
                                        class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @endif

    @if (!empty($teams) && $teams->count() > 0)
        <section class=" space">
            <div class="container  wow fadeInUp" data-wow-delay="0.2s">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-6">
                        <div class="title-area">
                            <span class="sec-subtitle">Great Team Members</span>
                            <h2 class="sec-title3 h1">We Have Expert Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                    @foreach ($teams as $team)
                        <div class="col-xl-4">
                            <div class="team-style2">
                                <div class="team-img">
                                    <div class="team-shape1"></div>
                                    <div class="team-shape2"></div>
                                    <a href="team-details.html"><img src="{{ $team->image }}" style="height: 341px;"
                                            alt="image"></a>
                                    <div class="team-social">
                                        <a href="{{ $team->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ $team->twitter_url }}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{ $team->instagram_url }}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ $team->website_url }}"><i class="fab fa-behance"></i></a>
                                        <a href="{{ $team->youtube_url }}"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="team-title h5"><a class="text-inherit"
                                            href="team-details.html">{{ $team->name }}</a></h3>
                                    <p class="team-degi">{{ $team->post }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @endif
   

    <div class=" space" data-bg-src="{{ asset('assets/frontend/img/bg/brand-bg-2-1.jpg') }}">
        <div class="container">
            <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2"
                data-xs-slide-show="2">
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-1.png') }}" alt="Brand">
                </div>
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-2.png') }}" alt="Brand">
                </div>
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-3.png') }}" alt="Brand">
                </div>
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-4.png') }}" alt="Brand">
                </div>
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-5.png') }}" alt="Brand">
                </div>
                <div class="col-auto"><img src="{{ asset('assets/frontend/img/brand/br-1-6.png') }}" alt="Brand">
                </div>
            </div>
        </div>
    </div>
@endsection
