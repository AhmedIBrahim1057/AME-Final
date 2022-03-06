<!-- Menu -->
<div class="bauen-wrap">
    <div class="bauen-wrap-inner">
        <nav class="bauen-menu"> 
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About Us</a></li>
                <li><a href='{{ route('products') }}'>Our Products</a></li>
                <li><a href='{{route('projects')}}'>OUR PROJECTS</a></li>
                <li><a href="#">OUR SERVICES</a></li>
                <li><a href="{{route('showroom')}}">SHOWROOM</a></li>
                <li><a href="{{route('factory')}}">FACTORY</a></li>
                <li><a href="{{route('events')}}">Events</a></li>
                <li><a href="{{route('news')}}">News</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div class="bauen-menu-footer">
            <div class="separator"></div>
            <p>P : (+20)  24034787 / 22629283</p>
            <p>@ : info@arab-mech.com</p>
        </div>
    </div>
</div>
<!-- Header -->
<header class="bauen-header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-6 col-md-6 bauen-logo-wrap">
                <a href="{{route('home')}}" @if (\Route::current()->getName() == 'home')  class="bauen-logo" @else class="bauen-logo" style="filter: brightness(0) invert(1) !important;" @endif ><img src="{{asset('frontendFiles/img/ame_logo.png')}}" alt=""></a>
            </div>
            <!-- Menu Burger -->
            <div class="col-6 col-md-6 text-right bauen-wrap-burger-wrap"> <a href="#" class="bauen-nav-toggle bauen-js-bauen-nav-toggle"><i></i></a> </div>
        </div>
    </div>
</header>