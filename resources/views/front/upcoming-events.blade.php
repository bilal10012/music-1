@extends('layouts.front.app')
@section('title', 'Upcoming events')

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

    <!-- event Section start -->

    <section class="event-sec">
        <div class="container">
            <div class="row mb-2" style="align-items: center;">
                <div class="col-md-6">
                    <div class="event-heading">
                        <h2>{{ $content->title }}</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="event-heading-txt">
                        <p>{{ $content->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($events as $event)
                    @php
                        // Parse the date using Carbon
                        $date = \Carbon\Carbon::parse($event->date);
                        // Format the day, month, and year
                        $day = $date->format('d');
                        $month = strtoupper($date->format('M'));
                        $year = $date->format('Y');
                    @endphp

                    <div class="col-lg-4 col-md-6">
                        <div class="event-box p-0">
                            <img src="{{ $event->primary_image }}" alt="Event Image">
                            <div class="event-box-detail">
                                <div class="event-box-detail-title">
                                    <div class="event-box-detail-title-date">
                                        <!-- Display the formatted date -->
                                        <h4>{{ $day }}</h4>
                                        <h5>{{ $month }}<br>{{ $year }}</h5>
                                    </div>
                                    <h4>{{ $event->title }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </section>
@endsection
