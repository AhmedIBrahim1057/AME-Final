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
        <!-- Events -->
        <section class="bauen-blog2 section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="section-title">Our <span>Blog</span></h2> </div>
				</div>
				<div class="row mb-60">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="img left">
							<a href="{{ route('event-details') }}"><img src="{{asset('frontendFiles/img/slider/1.jpg')}}" alt=""></a>
						</div>
					</div>
					<div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
						<div class="content">
							<div class="date">
								<h3>03</h3>
								<h6>Dec 2022</h6> </div>
							<div class="cont">
								<div class="info">
									<h6><a href="{{ route('event-details') }}">Bauen</a> / <a href="{{ route('event-details') }}" class="tags">Interior</a></h6> </div>
								<h4>Modern Architectural Structures</h4> <a href="{{ route('event-details') }}" class="more" data-splitting=""><span>Read More</span></a> </div>
						</div>
					</div>
				</div>
				<div class="row mb-60">
					<div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
						<div class="content">
							<div class="date">
								<h3>05</h3>
								<h6>Dec 2022</h6> </div>
							<div class="cont">
								<div class="info">
									<h6><a href="{{ route('event-details') }}">Bauen</a> / <a href="{{ route('event-details') }}" class="tags">Exterior</a></h6> </div>
								<h4>Modernism in Architecture</h4> <a href="post2.html" class="more" data-splitting=""><span>Read More</span></a> </div>
						</div>
					</div>
					<div class="col-md-6 order1 animate-box" data-animate-effect="fadeInRight">
						<div class="img">
							<a href="post2.html"><img src="{{asset('frontendFiles/img/slider/2.jpg')}}" alt=""></a>
						</div>
					</div>
				</div>
				<div class="row mb-60">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="img left">
							<a href="post3.html"><img src="{{asset('frontendFiles/img/slider/3.jpg')}}" alt=""></a>
						</div>
					</div>
					<div class="col-md-6 valign animate-box" data-animate-effect="fadeInRight">
						<div class="content">
							<div class="date">
								<h3>07</h3>
								<h6>Dec 2022</h6> </div>
							<div class="cont">
								<div class="info">
									<h6><a href="{{ route('event-details') }}">Bauen</a> / <a href="{{ route('event-details') }}" class="tags">Architecture</a></h6> </div>
								<h4>Postmodern Architecture</h4> <a href="post3.html" class="more" data-splitting=""><span>Read More</span></a> </div>
						</div>
					</div>
				</div>
				<div class="row mb-60">
					<div class="col-md-6 order2 valign animate-box" data-animate-effect="fadeInLeft">
						<div class="content">
							<div class="date">
								<h3>09</h3>
								<h6>Dec 2022</h6> </div>
							<div class="cont">
								<div class="info">
									<h6><a href="{{ route('event-details') }}">Bauen</a> / <a href="{{ route('event-details') }}" class="tags">Interior</a></h6> </div>
								<h4>Modern Architecture Buildings</h4> <a href="post4.html" class="more" data-splitting=""><span>Read More</span></a> </div>
						</div>
					</div>
					<div class="col-lg-6 order1 animate-box" data-animate-effect="fadeInRight">
						<div class="img">
							<a href="{{ route('event-details') }}"><img src="{{asset('frontendFiles/img/slider/4.jpg')}}" alt=""></a>
						</div>
					</div>
				</div>
				{{-- <div class="row">
					<div class="col-md-12 text-center">
						<!-- Pagination -->
						<ul class="bauen-pagination-wrap align-center mb-30 mt-30">
							<li><a href="{{ route('event-details') }}#"><i class="ti-angle-left"></i></a></li>
							<li><a href="{{ route('event-details') }}#">1</a></li>
							<li><a href="{{ route('event-details') }}#" class="active">2</a></li>
							<li><a href="{{ route('event-details') }}#">3</a></li>
							<li><a href="{{ route('event-details') }}#"><i class="ti-angle-right"></i></a></li>
						</ul>
					</div>
				</div> --}}
			</div>
		</section>
        @include('frontend.layouts.footer')
    </div>
@endsection