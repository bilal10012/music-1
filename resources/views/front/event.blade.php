@extends('layouts.front.app')
@section('title','Events')

@section('content')

<style>
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

  <!-- upComming1 event section  -->
  <section class="comming-ev">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h5>Upcoming Events</h5>
          <h2>{{ $event_1->title }}</h2>
          <h6>{{ $event_1->subtitle }}</h6>
          <div class="link-img">
            <a href="{{ $event_1->link }}" target="blabk">
              <img src="{{ $event_1->primary_image }}" alt="Event" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- upComming1 event section  -->

  <!-- upComming2 event section  -->
  <section class="comming-ev" id="eve2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>{{ $event_2->title }}</h2>
          <h6>{{ $event_2->subtitle }}</h6>
          <p class="paraeve">
           {!! $event_2->description !!}
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- upComming2 event section  -->

  <!-- yesterday -->
  <section class="yesterday-sec pt_8">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="yester-text">
            <a href="{{ route('show.event', $active_event->slug) }}" class="btn-3">Yesterday</a>
            <h3>{{ $active_event->title }}</h3>
            <p>
              {{$active_event->short_description}}
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="yester-img">
            <img src="{{ $active_event->primary_image }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end  -->
  <!-- Promote event -->
  <section class="promote-event">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pro-img">
                            <img src="{{ $signup->primary_image }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promote-middle">
                            <span>{{ $edu_don->subtitle }}</span>
                            <h5>{{ $edu_don->title }}</h5>
                            <h6>{{ $edu_don->short_description }}</h6>
                            <img src="{{ $edu_don->primary_image }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pro-img">
                            <img src="{{ $signup->secondary_image }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pro-text">
                    <h3>{{ $signup->title }}</h3>
                    <p>{{$signup->short_description}}</p>
                    </p>
                    <a href="{{ $signup->link }}" class="btn-1">{{ $signup->button_text }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- end  -->
  <!-- Reviews -->
  <section class="reviews">
    <div class="container">
        <h2>Client Reviews</h2>
        <div class="rev-slider">
            @foreach ($review as $rev)
            <div>
               
                <div class="rev-box">
                 
                    <div>
                        <img src="{{ $rev->image }}" alt="">
                    </div>
                    <div>
                        <p>{{$rev->review}}</p>
                        <h5>{{ $rev->name }}</h5>
                        <h6>{{ $rev->designation }}</h6>
                    </div>
                 
                </div>
               
            </div>
            @endforeach
        </div>
    </div>
</section>
  <!-- end -->


@endsection
