@extends('frontend.layouts.master')

@section('content')


    <div class="breadcumb-wrapper " data-bg-src="{{asset('assets/frontend/img/breadcumb/breadcumb-bg.jpg')}}">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
    <!--==============================
    About Us
    ==============================-->
    <section data-bg-src="{{asset('assets/frontend/img/bg/about-bg-5-1.jpg')}}">
        <div class="container container-style1">
            <div class="row flex-row-reverse align-items-center gx-70">

                <div class="col-lg-6 col-xl">
                    <img src="{{$about->image}}" alt="about image" style="height: 500px; width: auto; max-width: 100%; object-fit: cover;">

                </div>
                <div class="col-lg-6 col-xl-auto mt-10  wow fadeInUp" data-wow-delay="0.2s">
                    <div class="about-box2">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution</span>
                        <h2 class="sec-title3 h1">{{$about->title}}</h2>
                      <div style="text-align: justify">
                        {!! $about->description !!}
                      </div>
                        <div
                            class="row gx-0 align-items-center flex-row-reverse justify-content-end mt-sm-3 pt-sm-3 mb-30 pb-10">
                            <div class="col-sm-auto">
                                <p class="author-degi">Founder & CEO</p>
                                <h3 class="h5 author-name">{{ $team->name }}</h3>
                            </div>
                            <div class="col-sm-auto">
                                <div class="about-call">
                                    <div class="about-call__icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="about-call__label">Call To Ask Any Queary</span>
                                        <p class="about-call__number"><a href="tel:+25821562154">+(977) {{systemSetting()->phone_number}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space" data-bg-src="{{asset('assets/frontend/img/bg/cta-bg-1-2.jpg')}}">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between">
                <div class="col-lg-auto">
                    <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                    <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
                </div>
                <div class="col-lg-auto">
                    <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="{{asset('assets/frontend/img/bg/testi-bg-4-1.jpg')}}">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <div class="title-area">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Best Review’s</span>
                        <h2 class="sec-title3 h1">Inspiring Tech Needs for Business</h2>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="sec-btns2">
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="vs-btn popup-video">Watch Video<i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row testi-style2-slide vs-carousel" data-slide-show="2" data-md-slide-show="2">
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{asset('assets/frontend/img/testimonial/auth-4-1.jpg')}}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Quickly formulate high yield web services before functional
                                    process improvements enable premier with e-business customer service.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">William Benjamin</h3>
                        <div class="testi-degi">IT Customer</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{asset('assets/frontend/img/testimonial/auth-4-2.jpg')}}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“Lorem ipsum, or lipsum as it is sometimes known, is dummy text
                                    used in laying out print, graphic or web designs the passage is attributed.”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Jerzzy Lamot</h3>
                        <div class="testi-degi">UI Customer</div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="testi-style2">
                        <div class="testi-body">
                            <div class="author-img"><img src="{{asset('assets/frontend/img/testimonial/auth-4-3.jpg')}}" alt="Testimonial">
                            </div>
                            <div class="media-body">
                                <p class="testi-text">“The passage experienced a surge in popularity during the 1960s
                                    when Letraset used it on their dry-transfer sheets, and again during”</p>
                            </div>
                        </div>
                        <h3 class="testi-name">Vivi Marian</h3>
                        <div class="testi-degi">SEO Customer</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
   
   

@endsection