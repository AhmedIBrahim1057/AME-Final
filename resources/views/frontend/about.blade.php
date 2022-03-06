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
        <!-- About -->
        <section class="services section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="item">
                            <a href="#"> <img src="{{asset('frontendFiles/img/icons/icon-4.png')}}" alt="">
                                <h5>Mission</h5>
                                <div class="line"></div>
                                <p>Arab Mechanical Engineers is one of the companies in the steel manufacturing industry in Egypt. Our mission is to make and sell steel related products ranging from scaffolding & formwork, racking systems, caravans along with providing supermarkets and shop fitting solutions. AME operates in a way that ensures profitable growth, increasing value for employees, and guaranteed customer satisfaction.</p>
                                <div class="numb">01</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="item">
                            <a href="#"> <img src="{{asset('frontendFiles/img/icons/icon-6.png')}}" alt="">
                                <h5>Vision</h5>
                                <div class="line"></div>
                                <p>AME aspires to be the market leader in the field of Scaffolding & Formwork, racking systems and shop fitting & supermarket shelving. The company also aims to supply different industries with highly innovative and technologically advanced products. AME intends to establish a wide and loyal customer base in its different business sectors.</p>
                                <div class="numb">02</div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="item">
                            <a href="decor-plan.html"> <img src="{{asset('frontendFiles/img/icons/icon-5.png')}}" alt="">
                                <h5>Decor Plan</h5>
                                <div class="line"></div>
                                <p>Architecture bibendum eros eget lacus the vulputate sit amet vehicuta nibhen ulicera in the vitae miss.</p>
                                <div class="numb">06</div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="parallex">
            <div class="overlay section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="section-title2" style="font-size: 25px !important;">Arab mechanical Engineers for industrial engineering</h4> </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    AME holds a prominent position in the Egyptian market in the field of industrial engineering. The company has three main product categories: Racking Systems, Supermarket Equipment &Shop-Fiitings and Scaffolding & Formworks. Our products range from 100% locally produced products to imported products from leading international partners. AME presence is not limited to Egypt only it includes Libya, Kuwait and Saudi Arabia as well.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Story About US -->
        <section class="clients projects2 section-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12">
						<h2 class="section-title"> Our <span>Story</span></h2> </div>
				</div>
                <div class="row">
                    <div class="col-12 col-md-6 project-masonry-wrapper-padding">
                        <div class="portfolio-item-wrapp">
                            <div class="portfolio-item">
                                <div class="project-masonry-wrapper">
                                    <a href="#" class="project-masonry-item-img-link"> <img src="{{asset('frontendFiles/img/certifications/iso-9001.jpg')}}" alt="" />
                                        <div class="project-masonry-item-img"></div>
                                        <div class="project-masonry-item-content pl-3 pb-3">
                                            <h4 class="project-masonry-item-title">2015 quality management systems</h4>
                                            <div class="project-masonry-item-category">ISO 9001</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 project-masonry-wrapper-padding">
                        <div class="portfolio-item-wrapp">
                            <div class="portfolio-item">
                                <div class="project-masonry-wrapper">
                                    <a href="#" class="project-masonry-item-img-link"> <img src="{{asset('frontendFiles/img/certifications/iso-45001.jpg')}}" alt="" />
                                        <div class="project-masonry-item-img"></div>
                                        <div class="project-masonry-item-content pl-3 pb-3">
                                            <h4 class="project-masonry-item-title">2018 Occupational Health & Safety</h4>
                                            <div class="project-masonry-item-category">ISO 45001</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection