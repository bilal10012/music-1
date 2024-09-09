
@extends('layouts.front.app')
@section('title','Awards')

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
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-x-twitter"></i>
                            <i class="fa-brands fa-facebook-f"></i>
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


<section>
    <div class="award-sec">
        <div class="container">
            <div class="row mt-8">
                <div class="col-md-6">
                    <div class="award-img">
                        <img src="{{ asset($djservices->primary_image) }}" class="why-new-inner-img">
                        <img src="{{ asset($djservices->secondary_image) }}" class="why-new-inner-img-bg">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="award-text">
                        <h2>{{ $djservices->title }}</h2>
                        {!! $djservices->description !!}
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="award-text">
                        <p>{{$djservices->short_description}}</p>
                        <div class="award-text-img">
                            <img src="{{ asset($award_12->primary_image) }}">
                            <img src="{{ asset($award_12->secondary_image) }}">
                            <img src="{{ asset($award_34->primary_image) }}">
                            <img src="{{ asset($award_34->secondary_image) }}">
                            <img src="{{ asset($award_56->primary_image) }}">
                            <img src="{{ asset($award_56->secondary_image) }}">
                            <img src="{{ asset($award_7->primary_image) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
