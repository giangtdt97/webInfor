@extends('layout.master')
@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Services</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Services</h1>
                </div>
            </div>
        </div>
    </div>
<section></section>
    <section class="ftco-section ftco-services">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">{{trans('services.Our')}}</h2>
                    <span class="subheading">{{trans('services.We')}} <br>{{trans('services.Engineer')}}</span>
                </div>
            </div>

                <div class="row">
                    @foreach($services as $service)
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services d-block text-center">
                                <div class="d-flex justify-content-center"><div class="icon"><span class="{{$service->services_icon}}"></span></div></div>
                                <div class="media-body p-2 mt-3">
                                    <h3 class="heading">@if(App::isLocale('en')){{$service->services_name}}</h3>
                                    <p>{{$service->services_content}}</p>
                                    @else {{$service->services_name_vi}}
                                    <p>{{$service->services_content_vi}}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img ftco-animate" style="background-image: url({{Voyager::image($feature_images[0]->image)}});">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="services-wrap">
                        <div class="heading-section mb-5 ftco-animate">
                            <h2 class="mb-2">{{trans('services.technologies')}}</h2>
                            <span class="subheading">{{trans('services.introduce02')}}</span>
                        </div>
                        @foreach($teches as $tech)
                            <div class="list-services d-flex ftco-animate">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="{{$tech->icon}}"></span>
                                </div>
                                <div class="text">
                                    <h3>{{$tech->title}}</h3>
                                    {!!$tech->content!!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-section-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
{{--                    <h3 class="heading-white">{{trans('services.advertise03')}}</h3>--}}
                    @if(App::isLocale('en'))
                        <h3 class="heading-white">{{setting('site.advertise03_en')}}</h3>
                    @else
                        <h3 class="heading-white">{{setting('site.advertise03_vi')}}</h3>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
