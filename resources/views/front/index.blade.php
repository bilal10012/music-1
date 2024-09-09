@extends('layouts.front.app')
@section('title', 'Home')
@section('css')
@endsection
@section('content')


    <!-- banner start -->
    <!-- banner start -->
       <!-- banner start -->
       <section class="main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slider as $index => $sliders)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ $sliders->primary_image }}" class="img-fluid w-100" alt="...">
                        <div class="carousel-caption">
                            <div class="container new-container">
                                <div class="banner-border">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                                            <div class="banner_text wow slideInLeft" data-wow-duration="2s">
                                                {!! $sliders->description !!}
                                                <a href="{{ $sliders->button_link }}">
                                                    <p>{{ $sliders->button_text }}</p>
                                                    <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                                            <div class="banner_img wow bounceIn" data-wow-duration="2s">
                                                <h3>{{ $sliders->heading }}</h3>
                                                <p>{{ $sliders->title }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="socil-icon">
                                    <i class="fa-brands fa-youtube wow slideInRight" data-wow-duration="1s"></i>
                                    <i class="fa-brands fa-x-twitter wow slideInRight" data-wow-duration="2s"></i>
                                    <i class="fa-brands fa-facebook-f wow slideInRight" data-wow-duration="3s"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </section>
    <!-- banner end -->

    <!-- about Section Start -->

    <section class="about-sec">
        <div class="container">
            <div class="row" style="align-items: flex-end;">
                <div class="col-md-7">
                    <div class="about-img">
                        <h2 class="wow slideInDown" data-wow-duration="2s">{{ $about->title }}</h2>
                        <img src="{{ $about->primary_image }}" class="about-bg">
                        <img src="{{ $about->secondary_image }}" class="about-main">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="about-text wow slideInRight" data-wow-duration="2s">
                        <h3>{!! $about->description !!}</p>
                        <a href="{{ $about->link }}">
                            <p>{{ $about->button_text }}</p> <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about Section end -->


    <!-- why Section start -->

    <section class="why-sec">
        <div class="container">
            <div class="row" style="align-items: center;">
                <div class="col-md-5">
                    <div class="why-text  wow slideInLeft" data-wow-duration="2s">
                        <h2>{{$hire->title}}</h2>
                        <p>{{$hire->short_description}} </p>
                        <a href="{{ $hire->link }}">
                            <p>{{ $hire->button_text }}</p> <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="why-img">
                        <img src="{{ $hire->primary_image }}" class="why-bg">
                        <img src="{{ $hire->secondary_image }}" class="why-main">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why Section end -->


    <!-- event Section start -->

    <section class="event-sec">
        <div class="container">
            <div class="row mb-2" style="align-items: center;">
                <div class="col-md-6">
                    <div class="event-heading wow slideInLeft" data-wow-duration="2s">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-heading-txt wow slideInRight" data-wow-duration="2s">
                        <p>2024 dates are filling up fast! So contact me today, to book me for your wedding, or other
                            event! Also, accepting bookings for 2025 as well!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="event-slider">
                        @foreach ($event as $eves )
                        <div class="event-box wow slideInLeft" data-wow-duration="3s">
                            <img src="{{ asset($eves->primary_image) }}">
                            <div class="event-box-detail">
                                <div class="event-box-detail-title">
                                    <div class="event-box-detail-title-date">
                                        <h5>{{ \Carbon\Carbon::parse($eves->date)->format('d M Y') }}</h5>
                                    </div>
                                    <h4>{{ $eves->title }}</h4>
                                </div>
                                <p>{{$eves->description}}</p>
                                <div class="event-box-link">
                                    <a href="{{ $eves->button_link }}">
                                        <p>{{ $eves->button_text }}</p><i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                    </a>
                                    <div class="event-box-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.5K</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- event Section end -->


    <section class="special-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="special-heading wow slideInLeft" data-wow-duration="3s">
                        <h2>{{ $offer->title }}</h2>
                        <p>{{$offer->short_description}}
                        </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-box wow slideInRight" data-wow-duration="3s">
                        {!! $offer->description !!}
                        <div class="contact-box-phone-mail">
                            <div class="phone">
                                <i class="fa-sharp fa-regular fa-phone-volume"></i>
                                <a href="tel:{{ getConfig('contact') }}">{{ getConfig('contact') }}</a>
                            </div>
                            <div class="mail">
                                <i class="fa-regular fa-envelope"></i>
                                <a href="tel:{{ getConfig('primary_email') }}">{{ getConfig('primary_email') }}</a>
                            </div>
                        </div>
                        <a href="{{ $offer->link }}" class="contact-box-a">
                            <p>{{ $offer->button_text }}</p><i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Video Section Start -->

    <section class="video-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-head wow slideInDown" data-wow-duration="2s">
                        <h2>{{ $videos->title }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="video-slider  wow slideInLeft" data-wow-duration="2s">
                        <div>
                            <div class="video-box">
                                <img src="{{asset ('web-assets/images/video-img.png') }}">
                                <div class="play-btn">
                                    <a href="{{ $videos->video}}" data-fancybox="1">
                                        <img src="{{ asset('web-assets/images/play.png') }}" alt="" class="btn-video">
                                        <p>Play Video</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="video-box">
                                <img src="{{asset ('web-assets/images/video-img.png') }}">
                                <div class="play-btn">
                                    <a href="{{ $videos->video_2}}" data-fancybox="1">
                                        <img src="{{ asset('web-assets/images/play.png') }}" alt="" class="btn-video">
                                        <p>Play Video</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- why Section start -->

    <section class="why-sec">
        <div class="why-new-img">
            <img src="{{ asset($award_1->primary_image) }}"
            class="mt-5 wow slideInRight"
            data-wow-duration="1s"
            style="max-width: 103px; max-height: 108px;">
            <img src="{{ asset($award_2->primary_image) }}"
            class="mt-5 wow slideInRight"
            data-wow-duration="2s"
            style="max-width: 103px; max-height: 108px;">
            <img src="{{ asset($award_3->primary_image) }}"
            class="mt-5 wow slideInRight"
            data-wow-duration="3s"
            style="max-width: 103px; max-height: 108px;">
            <img src="{{ asset($award_4->primary_image) }}"
            class="mt-5 wow slideInRight"
            data-wow-duration="2s"
            style="max-width: 103px; max-height: 108px;">

        </div>
        <div class="container">
            <div class="row" style="align-items: end;">
                <div class="col-md-5">
                    <div class="why-text new-why-text wow slideInLeft" data-wow-duration="2s">
                        <h2>{{$award_section->title}}</h2>
                        <p>{!! $award_section->description !!}</P>
                        <a href="{{ $award_section->link }}">
                            <p>{{ $award_section->button_text }}</p> <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="why-img">
                        <img src="{{ $award_section->primary_image }}" class="why-bg">
                        <img src="{{ $award_section->secondary_image }}" class="why-main">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why Section end -->

    <!-- Reviews Start -->
    <section>
        <div class="reviews-sec">
            <div class="container-fulid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="reviews-heading wow slideInDown" data-wow-duration="2s">
                            <h2 class="wow bounceInUp" data-wow-duration="1s">Our Happy Clients</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <div class="col-md-10">
                        <div class="reviews-slider">
                            @foreach ($reviews as $review )

                            <div>
                                <div class="reviews-slider-items">
                                    <div class="reviews-slider-box">
                                        <h6>"</h6>
                                        <h2>{{ $review->name }}</h2>
                                        <p>“{{$review->review}}”

                                        </p>
                                        <ul>
                                            <li>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div>
                                <div class="reviews-slider-items">
                                    <div class="reviews-slider-box">
                                        <h6>"</h6>
                                        <h2>Erin and Tommy</h2>
                                        <p>“Scott was a fabulous dj to use for our wedding. He was super friendly and
                                            very easy to work with, as well as being reasonably priced! I gave him a
                                            list of songs to play and a few not to play, and he took it from there. All
                                            of our correspondences were friendly and cheerful. Scott definitely made the
                                            planning process a lot easier and when the wedding finally came, he did an
                                            awesome job “dj-ing.” He was a great announcer and was the perfect glue to
                                            keep the reception moving smoothly. We had so much fun dancing! Thank you
                                            Scott, we will definitely recommend you to friends that are getting married
                                            in the future!”

                                        </p>
                                        <ul>
                                            <li>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="reviews-slider-items">
                                    <div class="reviews-slider-box">
                                        <h6>"</h6>
                                        <h2>Erin and Tommy</h2>
                                        <p>“Scott was a fabulous dj to use for our wedding. He was super friendly and
                                            very easy to work with, as well as being reasonably priced! I gave him a
                                            list of songs to play and a few not to play, and he took it from there. All
                                            of our correspondences were friendly and cheerful. Scott definitely made the
                                            planning process a lot easier and when the wedding finally came, he did an
                                            awesome job “dj-ing.” He was a great announcer and was the perfect glue to
                                            keep the reception moving smoothly. We had so much fun dancing! Thank you
                                            Scott, we will definitely recommend you to friends that are getting married
                                            in the future!”

                                        </p>
                                        <ul>
                                            <li>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="reviews-slider-items">
                                    <div class="reviews-slider-box">
                                        <h6>"</h6>
                                        <h2>Erin and Tommy</h2>
                                        <p>“Scott was a fabulous dj to use for our wedding. He was super friendly and
                                            very easy to work with, as well as being reasonably priced! I gave him a
                                            list of songs to play and a few not to play, and he took it from there. All
                                            of our correspondences were friendly and cheerful. Scott definitely made the
                                            planning process a lot easier and when the wedding finally came, he did an
                                            awesome job “dj-ing.” He was a great announcer and was the perfect glue to
                                            keep the reception moving smoothly. We had so much fun dancing! Thank you
                                            Scott, we will definitely recommend you to friends that are getting married
                                            in the future!”

                                        </p>
                                        <ul>
                                            <li>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews End -->
    <!-- end -->


    <!-- Section Router end -->

@endsection


@section('js')

@endsection
