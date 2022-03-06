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
        <!-- Contact -->
        <section class="section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                        <h2 class="section-title">Contact <span>Us</span></h2>
                    </div>
                </div>
                <div class="row mb-90">
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Arab mechanical Engineers</b></p>
                        <p>Feel free to contact us any time, we are here for help you.</p>
                        <!-- <p><b>VAT :</b> USA002323065B06</p> -->
                        <br>
                        <p><b>Social Media</b></p>
                        <div class="col-12 abot">
                            <div class="social-icon"> 
                                <a class="mx-2" href="https://www.facebook.com/ArabMechanicalEngineers/" target="_blank">
                                    <i class="ti-facebook"></i>
                                </a> 
                                <a class="mx-2" href="https://arab-mech.com/#" target="_blank">
                                    <i class="ti-linkedin"></i>
                                </a> 
                                <a class="mx-2" href="https://www.youtube.com/channel/UCtH3Ok1WEF8PvKPOIs0p7Qg/" target="_blank">
                                    <i class="ti-youtube"></i>
                                </a> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact Details</b></p>
                        <p><b>Phone :</b> (+20)  24034787 / 22629283 </p>
                        <p><b>Mobile :</b> (+20)  01029986777 </p>
                        <p><b>Email :</b> info@arab-mech.com</p>
                        <p><b>Head office address :</b> 38 Tayran St, Nasr city, Cairo, Egypt</p>
                        <p><b>Showroom Address :</b> 314 El-tesaeen St. inside Hala Mall, 2nd floor Shop No. 211 and 212, New Cairo</p>
                    </div>
                    <div class="col-md-4 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact Form</b></p>
                        <form method="post" class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" placeholder="Full Name">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" placeholder="Your Email" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="butn-dark mt-15"><a href="#0"><span>Send</span></a></button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Map Section -->
                <div class="row">
                    <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.4348388991098!2d31.46431925091436!3d30.024380398586455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145823f73850b8c3%3A0x9d2e54f763519d09!2sArab%20Mechanical%20Showroom!5e0!3m2!1sen!2seg!4v1642886337303!5m2!1sen!2seg" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Clients -->
        <section class="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 owl-carousel owl-theme">
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/1.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/2.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/3.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/4.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/5.png')}}" alt=""></a>
                        </div>
                        <div class="clients-logo">
                            <a href="#0"><img src="{{asset('frontendFiles/img/clients/6.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layouts.footer')
    </div>
@endsection