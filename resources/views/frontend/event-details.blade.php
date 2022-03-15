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
        <!-- Event details -->
        <section class="bauen-blog3 section-padding2">
			<div class="container">
				{{-- <div class="row">
					<div class="col-md-12">
						<h2 class="section-title">Our <span>Blog</span></h2> </div>
				</div> --}}
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="item">
									<div class="post-img">
										 <img src="{{asset('frontendFiles/img/projects/1.jpg')}}" alt="">
									</div>
									<div class="post-cont"> <a href="#"><span class="tag">Architecture</span></a> <i>|</i> <span class="date">03 Dec 2022</span>
										<h5>
											Modern Architectural Structures
										</h5>
										<p>Architecture potenti fringilla pretium ipsum non blandit. Vivamus eget nisi non mi iaculis iaculis imperie quiseros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis enesta mauris suscipit ex nec est aliquam, a tincidunt eros iaculis. Proin suscipit risus eu ullamcorper fauibu. Mauris tempor eget libero condimentum tinciduntion...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{-- <div class="row">
					<div class="col-md-12 text-center">
						<!-- Pagination -->
						<ul class="bauen-pagination-wrap align-center mb-30 mt-30">
							<li><a href="blog2.html#"><i class="ti-angle-left"></i></a></li>
							<li><a href="blog2.html#">1</a></li>
							<li><a href="blog2.html#" class="active">2</a></li>
							<li><a href="blog2.html#">3</a></li>
							<li><a href="blog2.html#"><i class="ti-angle-right"></i></a></li>
						</ul>
					</div>
				</div> --}}
			</div>
		</section>
        
        @include('frontend.layouts.footer')
    </div>
@endsection