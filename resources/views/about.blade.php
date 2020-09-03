@extends('layout.master')
@section('title', 'About')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 ftco-animate img about-image" style="background-image: url({{asset('images/coding/team-work.jpg')}});">
                </div>
                <div class="col-md-6 ftco-animate p-md-5">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap mb-5">
                            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">{{trans('services.What we do')}}</a>

                                <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">{{trans('services.Our mission')}}</a>

                                <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">{{trans('services.Our goal')}}</a>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex align-items-center">

                            <div class="tab-content ftco-animate" id="v-pills-tabContent">

                                <div class="tab-pane show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                                    <div>
                                        <h2 class="mb-4">{{trans('services.Offer')}}</h2>
                                        <p>{{trans('services.content1')}}</p>
                                        <p>{{trans('services.content2')}}</p>
                                        <p>{{trans('services.content3')}}</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                                    <div>
                                        <p>{{trans('services.Mission')}}</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                                    <div>
                                        <p>
                                            {{trans('services.Goal')}}
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


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-2">{{trans('services.about us')}}</h2>
                    <span class="subheading">{{trans('services.aboutusdetail')}}</span>
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
