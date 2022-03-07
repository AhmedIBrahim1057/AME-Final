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
        <!-- Product details -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title2">Armada Center</h2> </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>Architecture non lorem ac erat suscipit bibendum. Nulla facilisi. Sedeuter nunc volutpat, mollis sapien vel, conseyer turpeutionyer masin libero sempe. Fusceler mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                        <p>Villa gravida eros ut turpis interdum ornare. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus. Curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero.</p>
                    </div>
                    <div class="col-md-4">
                        <p><b>Year : </b> 2022</p>
                        <p><b>Company : </b> Art International</p>
                        <p><b>Project Name : </b> Armada Center</p>
                        <p><b>Location : </b> New York, USA</p>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/2.jpg')}}" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/2.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/1.jpg')}}" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/1.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/3.jpg')}}" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/3.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 gallery-item">
                        <a href="{{asset('frontendFiles/img/slider/4.jpg')}}" title="Architecture" class="img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{asset('frontendFiles/img/slider/4.jpg')}}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Prev-Next Projects -->
        <section class="projects-prev-next">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <div class="projects-prev-next-left">
                                <a href="#"> <i class="ti-arrow-left"></i> Previous Project</a>
                            </div> <a href="{{ route('products') }}"><i class="ti-layout-grid3-alt"></i></a>
                            <div class="projects-prev-next-right"> <a href="#">Next Project <i class="ti-arrow-right"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection