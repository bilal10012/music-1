     <!-- <header>
         <div class="menuSec wow fadeInDown" data-wow-duration="2s">
            <div class="container">
               <div class="row" style="align-items: center;">
                  <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
                     <div class="header-logo">
                        <a href="{{ route('webIndexPage') }}"><img src="{{ asset(getConfig('logo')) }}" alt="img" /></a>
                     </div>
                  </div>
                  <div class="col-md-8 d-none d-md-block">
                       <ul id="menu">
                        <li><a href="{{ route('webIndexPage') }}">Home</a></li>
                        <li>
                           <a href="{{ route('about') }}">About Us</a>
                        </li>
                        {{-- <li><a href="{{ route('service') }}"> Our Services </a></li> --}}
                        {{-- s<li><a href="{{ route('gallery') }}">Gallery</a></li> --}}
                        {{-- <li><a href="{{ route('supplier') }}">Supplier</a></li> --}}
                        <li><a href="{{ route('contactUsPage') }}">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12">
                     <div class="menusec-btn">
                        <a href="{{ route('contactUsPage') }}" class="theme-btn-1">Get Estimate <span> <img src="{{ asset('web-assets/images/button-arrow.jpg') }}" alt="img"> </span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header> -->




     {{-- ----------------- MUSIC START -------------------------------- --}}

     <header>
        <div class="topSec wow fadeInDown" data-wow-duration="3s" style="visibility: visible; animation-duration: 3s; animation-name: fadeInDown;">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="top-bar-left">
                            <h3>All About The Music Richmond</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="top-bar-right">
                            <a href="{{ route('bookings') }}">BOOK NOW</a>
                            <!-- <a href="#">LOGIN</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menuSection wow fadeInLeft" data-wow-duration="3s" style="visibility: visible; animation-duration: 3s; animation-name: fadeInLeft;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 d-none d-md-block">
                        <div class="menuSec">
                            <ul id="menu">
                                <li class="active"><a href="{{ route('webIndexPage') }}" class="">Home</a></li>
                                <li><a href="{{ route('about') }}">about</a></li>
                                <li><a href="{{ route('events') }}">Upcoming Events</a></li>
                                <li><a href="{{ route('special_offer') }}">Special Offers</a></li>
                                <li><a href="{{ route('awards') }}">Award Winning DJ Services</a></li>
                                <!-- <li><a href="#">Gallery</a></li> -->
                                <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                                <li><a href="{{ route('tips-info') }}">Tips &amp; Info</a></li>
                                <li><a href="{{ route('contactUsPage') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

