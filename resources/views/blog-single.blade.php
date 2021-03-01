@extends('layout.master')

@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span class="mr-2"><a href="{{route('blog')}}">Blog</a></span> <span>Blog Single</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Blog Details</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <h1>{{$blog->title}}</h1>
                    </div>
                    {!! $blog->body !!}

                </div> <!-- .col-md-8 -->
                <div class="col-md-4 sidebar ftco-animate">
{{--                    <div class="sidebar-box">--}}
{{--                        <form action="#" class="search-form">--}}
{{--                            <div class="form-group">--}}
{{--                                <span class="icon fa fa-search"></span>--}}
{{--                                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="sidebar-box ftco-animate">--}}
{{--                        <div class="categories">--}}
{{--                            <h3>Categories</h3>--}}
{{--                            <li><a href="#">Food <span>(12)</span></a></li>--}}
{{--                            <li><a href="#">Dish <span>(22)</span></a></li>--}}
{{--                            <li><a href="#">Desserts <span>(37)</span></a></li>--}}
{{--                            <li><a href="#">Drinks <span>(42)</span></a></li>--}}
{{--                            <li><a href="#">Ocassion <span>(14)</span></a></li>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="sidebar-box ftco-animate">
                        <h3>Newest Blog</h3>
                        @foreach($blogs as $blog)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{Voyager::image( $blog->image ,'medium')}});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a></h3>
                                    <div class="meta">
                                        <div><a href="javascript:void(0)"><span class="icon-calendar"></span><span> {{$blog->created_at->format('d')}}/</span>{{$blog->created_at->format('m')}}/<span>{{$blog->created_at->format('y')}}</span></a></div>
                                        <div><a href="javascript:void(0)"><span class="icon-person"></span> Admin</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

{{--                    <div class="sidebar-box ftco-animate">--}}
{{--                        <h3>Tag Cloud</h3>--}}
{{--                        <div class="tagcloud">--}}
{{--                            <a href="#" class="tag-cloud-link">dish</a>--}}
{{--                            <a href="#" class="tag-cloud-link">menu</a>--}}
{{--                            <a href="#" class="tag-cloud-link">food</a>--}}
{{--                            <a href="#" class="tag-cloud-link">sweet</a>--}}
{{--                            <a href="#" class="tag-cloud-link">tasty</a>--}}
{{--                            <a href="#" class="tag-cloud-link">delicious</a>--}}
{{--                            <a href="#" class="tag-cloud-link">desserts</a>--}}
{{--                            <a href="#" class="tag-cloud-link">drinks</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="sidebar-box ftco-animate">--}}
{{--                        <h3>Paragraph</h3>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </section> <!-- .section -->
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
