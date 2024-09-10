@extends('layouts.front.app')
@section('title','About Us')

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

<section class="about-sec">
    <div class="container">
        <div class="row" style="align-items: flex-end;">
            <div class="col-md-5">
                <div class="about-img about-heading-center">
                    <h2>{{ $about->title }}</h2>
                    <img src="{{ asset($about->primary_image) }}" class="about-bg">
                    <img src="{{ asset($about->secondary_image) }}" class="about-main">
                </div>
            </div>
            <div class="col-md-7">
                <div class="about-text about-txt">
                    {!! $about->description !!}
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
            <div class="col-md-6">
                <div class="why-text">
                    <h3>{{$trust_Sec->title}}</h3>
                    {!! $trust_Sec->description !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="why-img">
                    <img src="{{ asset($trust_Sec->primary_image) }}" class="why-bg">
                    <img src="{{ asset($trust_Sec->secondary_image) }}" class="why-main">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
@endsection
