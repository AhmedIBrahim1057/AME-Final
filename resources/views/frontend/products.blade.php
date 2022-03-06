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
        <!-- Products -->
		<section class="bauen-project section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Our <span>Systems</span></h2> 
				    </div>
				</div>
				 <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="bauen-project-filter">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".exterior">Exterior Design</li>
                            <li data-filter=".urban">Urban Design</li>
                            <li data-filter=".interior">Interior Design</li>
                        </ul>
                    </div>
                </div>
                <div class="row bauen-project-items">
                <div class="col-md-6 single-item exterior">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/1.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Exterior</p>
                            <h3><a href="{{ route('product-details') }}">Cotton House</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item urban">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/2.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Exterior</p>
                            <h3><a href="{{ route('product-details') }}">Armada Center</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item urban">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/5.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Urban</p>
                            <h3><a href="{{ route('product-details') }}">Geometric ADDO</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item exterior">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/3.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Urban</p>
                            <h3><a href="{{ route('product-details') }}">Stonya Villa</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item urban">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/4.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Urban</p>
                            <h3><a href="{{ route('product-details') }}">Prime Hotel</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 single-item interior">
                    <div class="bauen-project-wrap">
                        <a href="{{ route('product-details') }}"><img src="{{asset('frontendFiles/img/projects/6.jpg')}}" alt=""></a>
                        <div class="bauen-project-content">
                            <p>Interior</p>
                            <h3><a href="{{ route('product-details') }}">Twins Office</a></h3>
                        </div>
                    </div>
                </div>
                </div>
			</div>
		</section>
        
        @include('frontend.layouts.footer')
    </div>
@endsection