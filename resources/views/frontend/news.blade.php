@extends('frontend.layouts.app')

@section('content')
    @include('frontend.layouts.menu')
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- Header Banner -->
        <section class="banner-header banner-img valign bg-img bg-fixed" data-overlay-darkgray="5" data-background="{{asset('frontendFiles/img/banner.jpg')}}">
            <!-- Left Panel -->
            <div class="left-panel"></div>
        </section>
        <!-- News -->
        <section class="bauen-blog section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>News</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/slider/1.jpg')}}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('news-details') }}">Architecture </a> - 20.12.2022
                                </span>
                                <h5><a href="{{ route('news-details') }}">Modern Architectural Structures</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/slider/2.jpg')}}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('news-details') }}">Interior</a> - 18.12.2022
                                </span>
                                <h5><a href="{{ route('news-details') }}">Modernism in Architecture</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/slider/3.jpg')}}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('news-details') }}">Urban</a> - 16.12.2022
                                </span>
                                <h5><a href="{{ route('news-details') }}">Postmodern Architecture</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/slider/4.jpg')}}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('news-details') }}">Planing</a> - 14.12.2022
                                </span>
                                <h5><a href="{{ route('news-details') }}">Modern Architecture Buildings</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- Pagination -->
                        <ul class="bauen-pagination-wrap align-center mb-30 mt-30">
                            <li><a href="blog.html#"><i class="ti-angle-left"></i></a></li>
                            <li><a href="blog.html#">1</a></li>
                            <li><a href="blog.html#" class="active">2</a></li>
                            <li><a href="blog.html#">3</a></li>
                            <li><a href="blog.html#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </section>
        
        @include('frontend.layouts.footer')
    </div>
@endsection