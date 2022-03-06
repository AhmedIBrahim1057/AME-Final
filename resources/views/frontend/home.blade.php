@extends('frontend.layouts.app')

@section('content')
    
    @include('frontend.layouts.menu')

    <!-- Slider -->
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-left item bg-img" data-overlay-dark="3" data-background="{{asset('frontendFiles/img/slider/1.jpg')}}">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                    <h1>Innovate Desing in Toronto</h1>
                                    <p>Architecture viverra tellus nec massa dictum the euismoe.
                                        <br>Curabitur viverra the posuere aukue velit.
                                    </p>
                                    <div class="butn-light mt-30 mb-30">
                                        <a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-left item bg-img" data-overlay-dark="4" data-background="{{asset('frontendFiles/img/slider/2.jpg')}}">
                <div class="v-middle caption mt-30">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                    <h1>Innovate Desing in Canada</h1>
                                    <p>Architecture viverra tellus nec massa dictum the euismoe.
                                        <br>Curabitur viverra the posuere aukue velit.
                                    </p>
                                    <div class="butn-light mt-30 mb-30">
                                        <a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Content -->
    <div class="content-wrapper">
        <!-- Lines -->
        <section class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </section>
        <!-- About -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">About <span>AME</span></h2>
                        <p>AME holds a prominent position in the Egyptian market in the field of industrial engineering. The company has three main product categories: Racking Systems, Supermarket Equipment &Shop-Fiitings and Scaffolding & Formworks. </p>
                        <p>Our products range from 100% locally produced products to imported products from leading international partners. AME presence is not limited to Egypt only it includes Libya, Kuwait and Saudi Arabia as well.</p>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                        <div class="about-img">
                            <div class="img"> <img src="{{asset('frontendFiles/img/about.jpg')}}" class="img-fluid" alt=""> </div>
                            <div class="about-img-2 about-buro">Head Office</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects -->
        <section class="projects section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Projects</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/projects/project-1.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">AME</a></h6>
                                    <h5><a href="#">Nile Badrawy</a></h5>
                                    <div class="line"></div> <a href="#"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/projects/project-2.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">AME</a></h6>
                                    <h5><a href="#">Formwork</a></h5>
                                    <div class="line"></div> <a href="#"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/projects/project-3.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">AME</a></h6>
                                    <h5><a href="#">Alfa Market</a></h5>
                                    <div class="line"></div> <a href="#"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/projects/project-4.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <h6><a href="#">AME</a></h6>
                                    <h5><a href="#">Nile tower</a></h5>
                                    <div class="line"></div> <a href="#"><i class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section class="services section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Services</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#"> <img src="{{asset('frontendFiles/img/icons/icon-1.png')}}" alt="">
                                <h5>RACKING</h5>
                                <div class="line"></div>
                                <p>We are not only suppliers of racking and shelving systems, we are experts and can design your storage needs with our optimal solutions. Our storage systems are the right choice.</p>
                                <div class="numb">01</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#"> <img src="{{asset('frontendFiles/img/icons/icon-2.png')}}" alt="">
                                <h5>SHOP FITTING</h5>
                                <div class="line"></div>
                                <p>We are specialized in all supermarkets & shop fitting solutions; our product range propose a wide variety of high quality shop fittings and accessories to serve various functions.</p>
                                <div class="numb">02</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item">
                            <a href="#"> <img src="{{asset('frontendFiles/img/icons/icon-3.png')}}" alt="">
                                <h5>FORMWORK</h5>
                                <div class="line"></div>
                                <p>Arab Mechanical Engineers is one of the market leader suppliers and manufacturers of scaffolding & formwork in Egypt for the construction and civil engineering industries.</p>
                                <div class="numb">03</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Events -->
        <section class="team-details section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Team <span>Details</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-60">
                        <div class="owl-carousel2 owl-theme">
                            <div class="item">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-5"> 
                                        <img src="{{asset('frontendFiles/img/team/1.jpg')}}" class="img-fluid" alt=""> 
                                    </div>
                                        <div class="col-md-7">
                                            <div class="text-content v-middle">
                                                <h3>Event Title</h3>
                                                <p>Subtitle</p>
                                                <p>Arhitecture the sorem ac erat suscipit bibendum nulla facilisi sedeuter nunc voluna missiontion sapien veli, conseyer tureutionyer massa in libero semper sedeuter nunesapien vivenotions eros ut turpis interdum ornare.</p>
                                                <div class="team-details-info">
                                                    <ul class="info-list clearfix">
                                                        <li>
                                                            <div class="list-title">Date :</div>
                                                            <div class="list-description"><a href="#" tabindex="0">01/03/2022</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News -->
        <section class="bauen-blog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Current <span>News</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/news/news-1.jpg')}}" alt=""> </div>
                                <div class="con">
                                    <span class="category">
                                        <a href="#">AME</a> - 20.12.2022
                                    </span>
                                    <h5><a href="#">HACE The international Hotel supplies & Catering Equipment Exhibition</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/news/news-2.jpg')}}" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="#">AME</a> - 04.04.2017
                                    </span>
                                    <h5><a href="#">Arab Mechanical Engineers’ (AME) Automated Racking Systems Seminar</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/news/news-3.jpg')}}" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="#">AME</a> - 16.12.2022
                                    </span>
                                    <h5><a href="#">Egypt Projects</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="{{asset('frontendFiles/img/news/news-4.jpg')}}" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="#">AME</a> - 01.02.2017
                                    </span>
                                    <h5><a href="#">AME Sponsoring Mohamed Essam- The Egyptian fencer</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo video - Testiominals -->
        <section class="testimonials">
            <div class="background bg-img bg-fixed section-padding pb-0" data-background="{{asset('frontendFiles/img/banner.jpg')}}" data-overlay-dark="3">
                <div class="container">
                    <div class="row">
                        <!-- Promo video -->
                        <div class="col-md-5">
                            <div class="vid-area">
                                <div class="vid-icon">
                                    <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                        <svg class="circle-fill">
                                            <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                        </svg>
                                        <svg class="circle-track">
                                            <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                        </svg> <span class="polygon">
                                            <i class="ti-control-play"></i>
                                        </span> </a>
                                </div>
                                <div class="cont mt-15 mb-30">
                                    <h5>View promo video</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Testiominals -->
                        <div class="col-md-6 offset-md-1">
                            <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                <div class="row">
                                    <div class="col-md-12" style="border-bottom: 1px solid #373737;">
                                        <h5 class="section-title custom-section-title">International <span>Partners</span></h5>
                                    </div>
                                </div>
                                <div class="owl-carousel owl-theme mt-25">
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-1.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Araven the Spanish market leader manufacturer of the state-of-the-art plastic trolleys & shopping baskets worldwide.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-2.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">UCGE the Turkish leading global manufacturer of supermarket shelving & shop fitting solutions.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-3.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Eurometall the Turkish leading equipment supplier for businesses, for Retail, Logistics and Industrial markets.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-4.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Kaplanlar Refrigeration one of the leading manufacturers of commercial refrigerators and refrigerated display cabinets in Turkey.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-5.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Fricon Freezers is one of the leading company and main innovator in conception, developing, production and marketing of freezing and chilling equipment founded in Portugal that offers several products of high quality.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-6.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Riga wood – Latvijas Finieris the leading manufacture of Film faced plywood located in Latvia. Riga supplies AME with Birch Plywood for Concrete Formwork.</p>
                                    </div>
                                    <div class="item pl-2"> <span class="quote"><img src="{{asset('frontendFiles/img/quot.png')}}" alt=""></span>
                                        <img src="{{asset('frontendFiles/img/partners/partner-7.jpg')}}" alt="" class="w-50">
                                        <p class="mt-20">Lana is a leader in Timber formwork located in Spain and offers innovative products and solutions for the construction sector (Formwork).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients -->
        <section class="clients">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Our <span>Clients</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-4.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-5.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-6.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-7.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-8.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-9.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-10.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-11.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-12.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-13.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-14.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-15.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-16.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-17.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-18.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-19.jpg')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#"><img src="{{asset('frontendFiles/img/clients/client-20.jpg')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection
