@extends('frontend.layouts.master')

@section('content')

<x-frontend.breadcumb image="{{asset('assets/frontend/img/breadcumb/breadcumb-bg.jpg')}}"
heading="Services" />
    
   
   
    <section class=" space-top space-extra-bottom">
        <div class="container   wow fadeInUp" data-wow-delay="0.2s">
            <div class="row">
                @foreach ($services as $service)
                
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1 layout2">
                        <div class="service-bg" data-bg-src="{{asset('assets/frontend/img/bg/sr-box-bg-1.jpg')}}"></div>
                        <div class="service-icon"><img src="{{$service->image}}" alt="{{$service->title}}"></div>
                        <h3 class="service-title h5"><a href="service-details.html">{{$service->title}}</a></h3>
                        <p class="service-text">{!! Str::limit(strip_tags($service?->description), 100, '...') !!}</p>
                        <a href="{{route('serviceDetail',$service)}}" class="vs-btn style3">Read More<i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!--==============================
    CTA Area
    ==============================-->
    <section class="z-index-common space mb-5" data-bg-src="{{asset('assets/frontend/img/bg/cta-bg-1-2.jpg')}}">
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
    
   

@endsection