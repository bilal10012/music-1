@extends('layouts.front.app')
@section('title','Testimonials')

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


<section class="review_sec review_sec1">
    <div class="container">
        <div class="row">
            @foreach ($testimonials as $testimonial)

            <div class="col-lg-4">
                <div class="review-box">
                    <div class="review-text">
                        <h5>"</h5>
                        <h4>{{ $testimonial->name }}</h4>
                        <p class="main-text">
                            “{{$testimonial->review}}”

                        </p>
                        <div class="stars">
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                            <i class="fas fa-star active"></i>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
@endsection
