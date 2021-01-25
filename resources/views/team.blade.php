@extends('layout.master')
@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Team</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Team</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-sTection ftco-animate">
                    <h2 class="mb-3">The Founders</h2>
                    <!--            <span class="subheading">Our Expert &amp; Well Experience Staff</span>-->
                </div>
            </div>
            <div class="row">
                @foreach($humanResources as $humanResource)
                    <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4" style="background-image: url({{Voyager::image( $humanResource->avatar )}});"></div>
                            <div class="info text-center">
                                <h3><a href="#">{{$humanResource->name}}</a></h3>
                                <span class="position">{{$humanResource->position}}</span>
                                <div class="text">
                                    <p>{{$humanResource->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('images/persons/vuong-phan.jpg')}});"></div>--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a href="teacher-single.html">Vuong Phan</a></h3>--}}
{{--                            <span class="position">Senior Advisor</span>--}}
{{--                            <div class="text">--}}
{{--                                <p>Engineering Manager of BOSCH Vietnam (2018 – Present).</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('images/persons/hai-van.jpg')}});"></div>--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a href="teacher-single.html">Hai Van</a></h3>--}}
{{--                            <span class="position">Senior Software Developer</span>--}}
{{--                            <div class="text">--}}
{{--                                <p>With over 8 years of experience on many international projects. He is an expert in back-end and database structure.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('images/persons/tin-tran.jpg')}});"></div>--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a href="teacher-single.html">Tin Tran</a></h3>--}}
{{--                            <span class="position">Senior Software Developer</span>--}}
{{--                            <div class="text">--}}
{{--                                <p>Directing software development projects. Producing, testing and debugging code and Leading developers</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('images/persons/duyen-nguyen.jpg')}});"></div>--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a href="teacher-single.html">Duyen Nguyen</a></h3>--}}
{{--                            <span class="position">Business Analyst Manager</span>--}}
{{--                            <div class="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">--}}
{{--                    <div class="staff">--}}
{{--                        <div class="img mb-4" style="background-image: url({{asset('images/persons/trung-tran.jpg')}});"></div>--}}
{{--                        <div class="info text-center">--}}
{{--                            <h3><a href="teacher-single.html">Trung Tran</a></h3>--}}
{{--                            <span class="position">Human Resource Manager</span>--}}
{{--                            <div class="text">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="row  mt-5 justify-conten-center">
                <div class="col-md-8 ftco-animate">
                    <p>Banaba Tech is a new company but we have an experienced founding team. Our mission is to deliver Agile software development offshoring and outsourcing solutions to customers in areas such as e-finance, e-business, logistic, transportation, healthcare, media and other industries.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

