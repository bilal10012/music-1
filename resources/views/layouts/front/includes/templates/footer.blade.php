<div id="Footer"><!-- footer strat  -->
    <footer class="footer-sec" id="footer">
        <div class="container">
            <img src="{{asset('web-assets/images/ftr1.png')}}" alt="" class="img-ftr1">
            <img src="{{ asset('web-assets/images/ftr2.png') }}" alt="" class="img-ftr2">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-text">
                        <h2 class="pl5">All About The Music Richmond</h2>
                        <p class="mt5"><p>{{ getConfig('news_text') }} </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="footer-text border-line">
                        <h2>USEFUL LINKS</h2>
                        <ul class="footer-link">
                            <li><a href="{{ route('webIndexPage') }}">home </a></li>
                            <li><a href="{{ route('about') }}">about us </a></li>
                            <li><a href="{{ route('events') }}">Upcoming Events</a></li>
                            <li><a href="{{ route('special_offer') }}">Special Offers</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="{{ route('testimonials') }}">Testimonials</a></li>
                            <li><a href="{{ route('tips-info') }}">Tips &amp; Info</a></li>
                            <li><a href="{{ route('contactUsPage') }}">Contact</a></li>
                            <li><a href="{{ route('awards') }}">Award Winning DJ Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-text">
                        <h2>Contact US</h2>
                        <ul class="footer-link-list">
                            <li><i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ getConfig('primary_email') }}">{{ getConfig('primary_email') }}</a>

                            </li>
                            <li><i class="fa-solid fa-phone"></i>
                                <a href="tel:{{ getConfig('contact') }}">{{ getConfig('contact') }}</a>

                            </li>
                            <li><i class="fa-solid fa-envelope"></i>
                                <a href="mailto:{{ getConfig('secondary_email') }}">{{ getConfig('secondary_email') }}</a>

                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="bottom-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>{{ getConfig('copy_right') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer strat  --></div>
