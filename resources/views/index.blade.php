@extends('layout.master')
@section('content')
    <html>
    <body>
    <div class="hero-wrap">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

                <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4">
                        <strong class="typewrite" data-period="4000" data-type='[ "Digitize Your Business", "Mobile app (IOS &Android) outsourcing", "Offshore Software R&D", "Web & Graphic Design" ]'>

                            <span class="wrap"></span>
                        </strong>
                    </h1>
                    <p class="" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Technology Partner for Software Innovation and Market-leading Solutions! We provide end-to-end software, Web and mobile application development services.</p>
                    <!--            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get a Quote</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Our Portfolio</a></p>-->
                    <img src="images/logo-white.png" style="width: 250px">

                </div>
                <div class="one-half align-self-md-end align-self-sm-center" style="margin-top:auto;">
                    <div class="slider-carousel owl-carousel">
                        <div class="item">
                            <img src="images/dashboard_full_1.png" class="img-fluid img"alt="">
                        </div>
                        <div class="item">
                            <img src="images/dashboard_full_2.png" class="img-fluid img"alt="">
                        </div>
                        <div class="item">
                            <img src="images/dashboard_full_3.png" class="img-fluid img"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection
