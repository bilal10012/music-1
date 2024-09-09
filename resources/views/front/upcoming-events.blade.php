@extends('layouts.front.app')
@section('title','Upcoming events')

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
                                        <h4>{{ $banner->text  }}</h4>
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
                    <h2>{{ $content->title }}s</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="event-heading-txt">
                    <p>{{$content->short_description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($events as $event)


            <div class="col-lg-4 col-md-6">
                <div class="event-box p-0">
                    <img src="{{ $event->primary_image }}">
                    <div class="event-box-detail">
                        <div class="event-box-detail-title">
                            <div class="event-box-detail-title-date">

                                <h5>{{ \Carbon\Carbon::parse($event->date)->format('d M, Y') }}</h5>
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
