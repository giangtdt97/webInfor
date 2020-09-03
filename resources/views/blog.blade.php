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
                <div class="col-md-4 ftco-animate">
                    @foreach($blogs as $blog)
                    <div class="blog-entry">
                        <a href="{{route('blog.detail',$blog->slug)}}" class="block-20" style="background-image: url({{Voyager::image( $blog->image )}});">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">August 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                            </div>
                            <h3 class="heading"><a href="{{route('blog.detail',$blog->slug)}}">{{$blog->title}}</a></h3>
                            <p>{{$blog->excerpt}}</p>
                        </div>
                    </div>
                    @endforeach
                        {{ $blogs->links()}}
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
