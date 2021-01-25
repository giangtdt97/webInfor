@extends('layout.master')
@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span>
{{--                        <span>Blog</span>--}}
                    </p>
{{--                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{trans('services.Our Blog')}}</h1>--}}
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">{{trans('services.Contact Information')}}</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span>Address:</span> 67 Nguyen Huu Canh St. Binh Thanh, HCMC 70000, Vietnam</p>
                </div>
                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel://+84933652114">+84 93 365 2114</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@banabatech.com</a></p>
                </div>
                <div class="col-md-3">
                    <p><span>Website:</span> <a href="https://banabatech.com">https://banabatech.com</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 pr-md-5">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=67%20nguyen%20huu%20canh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/elementor/">elementor discount</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:600px;}</style></div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-section-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="heading-white">{{trans('services.advertise03')}}</h3>
                </div>
            </div>
        </div>
    </section>
@endsection

