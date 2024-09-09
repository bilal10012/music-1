@extends('layouts.front.app')
@section('title', 'Contact Us')


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

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

<!-- about Section Start -->

<section class="about-sec">
    <div class="container">
        <div class="row" style="align-items: flex-end;">
            <div class="col-md-7">
                <div class="about-img left-side">
                    <h2>{{ $content->title }}</h2>
                    <img src="{{ asset($content->primary_image) }}" class="about-bg right-side-imf">
                    <img src="{{ asset($content->secondary_image) }}" class="about-main">
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-text">
                    <div class="req-qoute-sec wow slideInRight">
                        <form method="POST" action="{{ route('contactUsPage') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-inpt">
                                        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"required />
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-inpt">
                                        <input type="email" name="inquiry_email" placeholder="Email Address" required />
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-inpt">
                                        <input type="number" name="phone" placeholder="Phone" required />
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-inpt">
                                        <textarea name="message" id="user-msg" placeholder="Message" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <div class="contact-btn">
                                        <button type="submit">
                                            <p>READ MORE</p> <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
