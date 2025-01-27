@extends('frontend.layouts.master')


@section('content')

<x-frontend.breadcumb image="{{asset('assets/frontend/img/breadcumb/breadcumb-bg.jpg')}}"
heading="{{$service->title}}" />
    
   
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    {{-- <div class="mb-3 pb-3"><img src="{{$service->image}}" alt="{{$service->title}}"></div> --}}
                    <h2 class="h4">{{$service->title}}</h2>
                    <div>
                        {!! $service->description !!}
                    </div>
                   
                    @if (!empty($generalQuestions) && $generalQuestions->count() > 0)
                    <!-- FAQ Area -->
                    <div class="accordion accordion-style1 layout2 wow fadeInUp" data-wow-delay="0.2s" id="faqVersion1">
                        @foreach ($generalQuestions as $key => $generalQuestion)
                            <div class="accordion-item">
                                <div class="accordion-header" id="heading{{ $key }}">
                                    <button class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}" type="button" 
                                            data-bs-toggle="collapse" 
                                            data-bs-target="#collapse{{ $key }}" 
                                            aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" 
                                            aria-controls="collapse{{ $key }}">
                                        {{ $generalQuestion->title }}?
                                    </button>
                                </div>
                                <div id="collapse{{ $key }}" 
                                     class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" 
                                     aria-labelledby="heading{{ $key }}" 
                                     data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <div>
                                            {!! $generalQuestion->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <aside class="service-sidebar">

                        <div class="widget widget_categories">
                            <h3 class="widget_title">All Services</h3>
                            <ul>
                                @foreach ($services as $service)
                                
                                <li>
                                    <a 
                                    style="{{ request()->is("service/".$service->slug) ? 'color: var(--theme-color);' : '' }}" 
                                    href="{{route('serviceDetail',$service)}}">{{$service->title}}</a>
                                </li>
                                @endforeach
                               
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Working Hours</h3>
                            <div class="widget-workhours">
                                <ul>
                                    <li><i class="fal fa-clock"></i>Mon – Fri 1.00 – 2:00 pm</li>
                                    <li><i class="fal fa-clock"></i>Saturday 8.00 – 12:00 pm</li>
                                    <li><span class="text-theme"><i class="fal fa-clock"></i>Sunday closed</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="quote-box" data-bg-src="{{asset('assets/frontend/img/widget/quote-box.jpg')}}">
                            <h3 class="quote-box__title">Have Any Query?</h3>
                            <a href="contact.html" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
  

@endsection