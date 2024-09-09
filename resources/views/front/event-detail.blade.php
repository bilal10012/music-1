@extends('layouts.front.app')
@section('title','Event Details')

@section('content')

<style>
 section.inner-banner {
    height: 510px;
    background-image: url('{{ asset($banner->image) }}');
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: start;
}
</style>

   <!-- banner start -->
   <section class="inner-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $banner->title }}</h1>
            </div>
        </div>
    </div>
</section>
<!-- banner end -->
<!-- yesterday -->
<section class="yesterday-sec pt_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="yester-text">
                    <a href="{{ route('show.event', $event_detail->slug) }}" class="btn-3">yesterday</a>
                    <h3>{{ $event_detail->title }}</h3>
                    <p>
                    {{$event_detail->short_description}}
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="yester-img">
                    <img src="{{ asset($event_detail->primary_image) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event-descrp">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="eve-des-wrap">
                    <h4>Events Description</h4>
                    <p>{!!$event_detail->description!!}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>
                        <h4>Events Details</h4>
                    </li>
                    <li>
                        <h6>Organizer <span>: {{ $event_detail->organizer }}</span></h6>
                    </li>
                    <li>
                        <h6>Start Date <span>: {{ $event_detail->start_date }}</span></h6>
                    </li>
                    <li>
                        <h6>End Date <span>: {{ $event_detail->end_date }}</span></h6>
                    </li>
                    <li>
                        <h6>Time <span>: {{ $event_detail->time }}</span></h6>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="event-gallery">
    <div class="container">
        <h4>Event Gallery</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="gall-box">
                    <img src="{{ asset ($event_detail->img_1) }}" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="gall-box">
                    <img src="{{ asset ($event_detail->img_2) }}" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="gall-box">
                    <img src="{{ asset ($event_detail->img_3) }}" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <div class="gall-box">
                    <img src="{{ asset ($event_detail->img_4) }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
