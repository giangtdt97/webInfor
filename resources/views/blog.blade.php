@extends('layout.master')
@section('title', 'Our Blog')
@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_2.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('home')}}">Home</a></span> <span>Blog</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Blog</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($blogs ?? '' as $blog)
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="{{route('blog.detail',$blog->slug)}}" class="block-20 " ><img src="{{Voyager::image($blog->image,'cropped')}}"class="img img-responsive"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="javascript:void(0)"><span>{{$blog->created_at->format('d')}}/</span>{{$blog->created_at->format('m')}}/<span>{{$blog->created_at->format('y')}}</span></a></div>
                                <div><a href="javascript:void(0)">Admin</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a></h3>
                            <p>{{$blog->excerpt}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{ $blogs->links()}}
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
