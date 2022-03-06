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
        <!-- Factory -->
        <!-- Projects 4 -->
		<section class="bauen-project section-padding2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-30 text-center animate-box" data-animate-effect="fadeInUp">
						<h2 class="section-title">Our <span>Projects</span></h2> 
				    </div>
				</div>
				<div class="row">
                    <div class="col-md-12">
                        <div class="projects4 animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="{{asset('frontendFiles/img/slider/1.jpg')}}" alt="" class="img-fluid"></figure>
                            <div class="caption">
                                <h6>Interior</h6>
                                <h4>Cotton House</h4>
                                <p>Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana setlie suscipe the fermen.</p>
                                <div class="butn-dark mt-15"> <a href="cotton-house.html"><span>Discover</span></a> </div>
                            </div>
                        </div>
                        <div class="projects4 left animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="{{asset('frontendFiles/img/slider/2.jpg')}}" alt="" class="img-fluid"></figure>
                            <div class="caption">
                                <h6>Exterior</h6>
                                <h4>Armada Center</h4>
                                <p>Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana setlie suscipe the fermen.</p>
                                <div class="butn-dark mt-15"> <a href="armada-center.html"><span>Discover</span></a> </div>
                            </div>
                        </div>
                        <div class="projects4 animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="{{asset('frontendFiles/img/slider/3.jpg')}}" alt="" class="img-fluid"></figure>
                            <div class="caption">
                                <h6>Urban</h6>
                                <h4>Stonya Villa</h4>
                                <p>Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana setlie suscipe the fermen.</p>
                                <div class="butn-dark mt-15"> <a href="stonya-villa.html"><span>Discover</span></a> </div>
                            </div>
                        </div>
                        <div class="projects4 left animate-box" data-animate-effect="fadeInUp">
                            <figure><img src="{{asset('frontendFiles/img/slider/4.jpg')}}" alt="" class="img-fluid"></figure>
                            <div class="caption">
                                <h6>Exterior</h6>
                                <h4>Prime Hotel</h4>
                                <p>Architecture viverra tristique duis vitae diam neque nivamus aestan ateuene artines finibus. Nedana setlie suscipe the fermen.</p>
                                <div class="butn-dark mt-15"> <a href="prime-hotel.html"><span>Discover</span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
        @include('frontend.layouts.footer')
    </div>
@endsection