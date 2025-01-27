@extends('frontend.layouts.master')

@section('content')

<x-frontend.breadcumb image="{{asset('assets/frontend/img/breadcumb/breadcumb-bg.jpg')}}" heading="Team" />

  
    <!--==============================
    Team Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row ">
                @foreach ($teams as $team)
                
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="{{route('teamDetail',$team)}}"><img src="{{$team->image}}" alt="{{$team->name}}" style="height: 341px;"></a>
                            <div class="team-social">
                                <a href="{{$team->facebook_url}}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{$team->twitter_url}}"><i class="fab fa-twitter"></i></a>
                                <a href="{{$team->instagram_url}}"><i class="fab fa-instagram"></i></a>
                                <a href="{{$team->website_url}}"><i class="fab fa-behance"></i></a>
                                <a href="{{$team->youtube_url}}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title"><a class="text-inherit" href="{{route('teamDetail',$team)}}">{{$team->name}}</a>
                            </h3>
                            <p class="team-degi">{{$team->post}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
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
    Skill Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="{{asset('assets/frontend/img/bg/skill-bg-2-1.jpg')}}">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-5 col-xxl-auto mb-30 pb-20 pb-lg-0   wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset('assets/frontend/img/skill/skill-1-1.jpg')}}" alt="Skill image">
                </div>
                <div class="col-lg-7 col-xxl-6 me-xl-auto">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>The Great Company Skill</span>
                    <h2 class="sec-title3 h1">Connecting People And Build Technology</h2>
                    <p class="mb-4 pb-1">Energistically evisculate an expanded array of meta-services after cross-media
                        strategic theme areas. Interactively simplify interactive customer service before fully tested
                        relationship parallel task high standards...</p>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Security</h3>
                        <span class="progress-box__number">65%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Career Development</h3>
                        <span class="progress-box__number">88%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 88%" aria-valuenow="88"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Inovation</h3>
                        <span class="progress-box__number">90%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

@endsection