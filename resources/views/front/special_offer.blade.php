@extends('layouts.front.app')
@section('title','Special Offer')

@section('content')

<section class="main_slider inner-banner">
    <div id="carouselExampleControls" class="carousel slide inner-banner" data-bs-ride="carousel">
        <div class="carousel-inner inner-banner">
            <div class="carousel-item active inner-banner">
                <img src="{{ $banner->image }}" class="img-fluid w-100" alt="...">
                <div class="carousel-caption inner-banner">
                    <div class="container new-container">
                        <div class="banner-border">
                            <div class="row">
                                <div class=" col-lg-6 col-md-6 col-sm-6 align-self-center">
                                    <div class="banner_text banner_txt wow fadeInLeft" data-wow-duration="2s">
                                        <h6></h6>
                                        <h1>{{ $banner->title }}</h1>
                                        <h4>{{ $banner->text }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="socil-icon">
                            <a href="{{ getConfig('youtube') }}" target="_blank">
                                <i class="fa-brands fa-youtube wow slideInRight" data-wow-duration="1s" style="color: white;"></i>
                            </a>
                            <a href="{{ getConfig('twitter') }}" target="_blank">
                                <i class="fa-brands fa-x-twitter wow slideInRight" data-wow-duration="2s" style="color: white;"></i>
                            </a>
                            <a href="{{ getConfig('facebook') }}" target="_blank">
                                <i class="fa-brands fa-facebook-f wow slideInRight" data-wow-duration="3s" style="color: white;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item inner-banner">
                <img src="{{ $banner->image_2 }}" class="img-fluid w-100" alt="...">
                <div class="carousel-caption inner-banner">
                    <div class="container new-container">
                        <div class="banner-border">
                            <div class="row">
                                <div class=" col-lg-6 col-md-6 col-sm-6 align-self-center">
                                    <div class="banner_text banner_txt wow fadeInLeft" data-wow-duration="2s">
                                        <h1>{{ $banner->title }}</h1>
                                        <h4>{{ $banner->text }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="socil-icon">
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-x-twitter"></i>
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- banner end -->

<!-- event Section start -->

<section class="event-sec after-before">
    <div class="container">
        <div class="row mb-2" style="align-items: center;">
            <div class="col-md-6">
                <div class="event-heading">
                    <h2>{{ $special_offer->title }}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event-heading-txt">
                    <p>{{$special_offer->short_description}}</p>
                </div>
            </div>
        </div>
        <div class="row" style="align-items: center;">
            <div class="col-md-7">
                <div class="special-img">
                    <img src="{{ asset($special_offer->primary_image) }}" class="special-main-img">
                    <img src="{{ asset($special_offer->secondary_image) }}" class="special-bg-bg">
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-box">
                    {!! $special_offer->description !!}
                    <div class="contact-box-phone-mail">
                        <div class="phone">
                            <i class="fa-sharp fa-regular fa-phone-volume"></i>
                            <a href="tel:{{ getConfig('contact') }}">{{ getConfig('contact') }}</a>
                        </div>
                        <div class="mail">
                            <i class="fa-regular fa-envelope"></i>
                            <a href="mailto:{{ getConfig('primary_email') }}">{{ getConfig('primary_email') }}</a>
                        </div>
                    </div>
                    <a href="{{ $special_offer->link }}" class="contact-box-a">
                        <p>{{ $special_offer->button_text }}</p><i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- event Section end -->
@endsection
