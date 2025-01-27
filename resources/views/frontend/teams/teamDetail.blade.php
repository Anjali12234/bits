@extends('frontend.layouts.master')

@section('content')

<x-frontend.breadcumb image="{{asset('assets/frontend/img/breadcumb/breadcumb-bg.jpg')}}" heading="{{$team->name}}" />


  
    <!--==============================
    Team Details Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60 gy-2">
                <div class="col-lg-5 mb-30   wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{$team->image}}" alt="{{$team->name}}">
                </div>
                <div class="col-lg-7 col-xl-7 align-self-center mb-30">
                    <div class="team-about">
                        <h3 class="team-name h4">{{$team->name}}</h3>
                        <span class="team-degi">{{$team->post}}</span>
                        <div class="team-text">{!!$team->description!!}
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="team-media">
                                    <div class="team-media__icon"><i class="fas fa-user"></i></div>
                                    <div class="media-body">
                                        <span class="team-media__label">Experience</span>
                                        <h4 class="team-media__info">{{$team->experience}}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="team-media">
                                    <div class="team-media__icon"><i class="fas fa-phone-alt"></i></div>
                                    <div class="media-body">
                                        <span class="team-media__label">Phone</span>
                                        <h4 class="team-media__info"><a href="tel:+2562145821456">+(977) {{$team->phone}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="team-media">
                                    <div class="team-media__icon"><i class="fas fa-envelope"></i></div>
                                    <div class="media-body">
                                        <span class="team-media__label">Email</span>
                                        <h4 class="team-media__info"><a
                                                href="mailto:{{$team->email}}">{{$team->email}}</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="team-media">
                                    <div class="team-media__icon"><i class="fas fa-fax"></i></div>
                                    <div class="media-body">
                                        <span class="team-media__label">Fax</span>
                                        <h4 class="team-media__info"><a href="fax:{{$team->fax}}">{{$team->fax}}</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="onepage-nav">
                            <a href="{{route('contact')}}" class="vs-btn">Get In Touch<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
       
    </section>
 

@endsection