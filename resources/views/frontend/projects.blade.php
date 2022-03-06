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
        <!-- Projects -->
        <section class="projects section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Our <span>Projects</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('frontendFiles/img/projects/1.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h6><a href="{{route('project-details')}}">Interior</a></h6>
                                <h5><a href="{{route('project-details')}}">Cotton House</a></h5>
                                <div class="line"></div> <a href="{{route('project-details')}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('frontendFiles/img/projects/2.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h6><a href="{{route('project-details')}}">Exterior</a></h6>
                                <h5><a href="{{route('project-details')}}">Armada Center</a></h5>
                                <div class="line"></div> <a href="{{route('project-details')}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('frontendFiles/img/projects/3.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h6><a href="{{route('project-details')}}">Urban</a></h6>
                                <h5><a href="{{route('project-details')}}">Stonya Villa</a></h5>
                                <div class="line"></div> <a href="{{route('project-details')}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="item">
                            <div class="position-re o-hidden"> <img src="{{ asset('frontendFiles/img/projects/4.jpg')}}" alt=""> </div>
                            <div class="con">
                                <h6><a href="{{route('project-details')}}">Interior</a></h6>
                                <h5><a href="{{route('project-details')}}">Prime Hotel</a></h5>
                                <div class="line"></div> <a href="{{route('project-details')}}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection