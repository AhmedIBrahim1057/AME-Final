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
        <!-- showroom -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>Gallery</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <p>Gallery lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                    </div>
                </div>
                <div class="row">
                    <!-- 2 columns -->
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/services/1.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/services/1.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/services/2.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/services/2.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <!-- 3 columns -->
                    <div class="col-md-4 gallery-item">
                        <a href="{{asset('frontendFiles/img/services/3.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/services/3.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="{{asset('frontendFiles/img/services/4.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/services/4.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 gallery-item">
                        <a href="{{asset('frontendFiles/img/services/5.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/services/5.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>

                    <!-- 2 columns -->
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/1.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/1.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/2.jpg')}}" title="" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/2.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection