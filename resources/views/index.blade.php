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
                        <strong class="typewrite" data-period="4000" data-type='[ "{{trans('services.Digitize')}}", "{{trans('services.Mobile')}}", "{{trans('services.Offshore')}}", "{{trans('services.Web')}}" ]'>

                            <span class="wrap"></span>
                        </strong>
                    </h1>
                    <p class="" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{trans('services.advertise')}}</p>
                    <!--            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get a Quote</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Our Portfolio</a></p>-->
                    <img src="{{asset('images/logo-white.png')}}" alt="#" style="width: 250px">

                </div>
                <div class="one-half align-self-md-end align-self-sm-center" style="margin-top:auto;">
                    <div class="slider-carousel owl-carousel">
                       <!-- <div class="item">
                            <img src="public/images/dashboard_full_1.png" class="img-fluid img"alt="">
                        </div>-->
                        <div class="item">
                            <img src="{{asset('images/dashboard_full_2.png')}}" class="img-fluid img"alt="">
                        </div>
                        <div class="item">
                            <img src="{{asset('images/dashboard_full_3.png')}}" class="img-fluid img"alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-section-2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-none d-sm-block">
                    <h3 class="heading-white">{{trans('services.IT')}}!</h3>
                </div>
            </div>
        </div>
    </section>
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
                                    {{$service->services_content}}
                                    @else{{$service->services_name_vi}}</h3>
                                    {{$service->services_content_vi}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>

        <section class="ftco-section ftco-section-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="heading-white">{{trans('services.introduce')}}</h3>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-wrap mt-5">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 img ftco-animate" style="background-image: url({{asset('images/programer.jpg')}});">
                </div>
                <div class="col-md-6 d-flex">
                    <div class="services-wrap">
                        <div class="heading-section mb-5 ftco-animate">
                            <h2 class="mb-2">Our technologies</h2>
                            <span class="subheading">We have experienced software engineers in Vietnam</span>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-pencil"></span>
                            </div>
                            <div class="text">
                                <h3>Back End Development</h3>
                                <p>PHP, Laravel framework, Symfony framework</p>
                                <p>ASP.NET/C#, Web form</p>
                                <p>RESTful API, Facebook API, Twitter API, Zalo API, AWS</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-web"></span>
                            </div>
                            <div class="text">
                                <h3>Front End Development</h3>
                                <p>React Native, Android Native, Swift(IOS)</p>
                                <p>JavaScript, jQuery, Ajax, Vue.Js, Angular...</p>
                                <p>Bootstrap 3,4; HTML5, CSS3, SCSS, SASS...</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-clipboard"></span>
                            </div>
                            <div class="text">
                                <h3>Database</h3>
                                <p>MySQL, SQL Server, PostreSQL, SQLite</p>
                                <p>MongoDB</p>
                            </div>
                        </div>
                        <div class="list-services d-flex ftco-animate">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-pie-chart"></span>
                            </div>
                            <div class="text">
                                <h3>Other Teach</h3>
                                <p>Amazon Web Services, IIS Windows Server, Nginx, Linux, WAMP, LAMP, MEAN stack, Git/Git-Flow...</p>
                            </div>
                        </div>
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
                    <h3 class="heading-white">{{trans('services.Provide')}}.</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">About Us</h2>
                    <span class="subheading">We value our team as an important asset in the software development business.</span>
                </div>
            </div>
            <div class="row justify-content-center ftco-animate">
                <div class="col-md-8">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('images/persons/vuong-phan.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="">Engineering Manager of BOSCH Vietnam (2018 – Present).</p>
                                    <p class="name">Vuong Phan</p>
                                    <span class="position">Senior Advisor</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('images/persons/hai-van.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p>With over 8 years of experience on many international projects. He is an expert in back-end and database structure.</p>
                                    <p class="name">Hai Van</p>
                                    <span class="position">Senior Software Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('images/persons/tin-tran.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="">Directing software development projects. Producing, testing and debugging code and Leading developers</p>
                                    <p class="name">Tin Tran</p>
                                    <span class="position">Senior Software Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('images/persons/duyen-nguyen.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="name">Duyen Nguyen</p>
                                    <span class="position">Director of Business Analyst (BA)</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-5" style="background-image: url({{asset('images/persons/trung-tran.jpg')}})">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                                </div>
                                <div class="text text-center">
                                    <p class="name">Trung Tran</p>
                                    <span class="position">Director of Business Development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">Offshore Software Development</h2>
                    </div>
                    <div class="ftco-animate">
                        <p>Our offshore software development models consist of the dedicated team of programmers and developers who have been handpicked to complement each customer’s skill set and culture.</p>
                        <ul class="un-styled my-5">
                            <li><span class="icon-check"></span>Offshore full-time dedicated development team model.</li>
                            <li><span class="icon-check"></span>with a wide-ranging set of technology capabilities to build solutions your business needs.</li>
                            <li><span class="icon-check"></span>An offshore software development is a great way for corporations to cut costs and reduce size effectively and dynamically.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Get a Free Quote</h2>
                    </div>
                    <form action="#" class="ftco-animate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </body>
    </html>
@endsection
