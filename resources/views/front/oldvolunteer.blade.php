@extends('layouts.front.app')
@section('title','Volunteer')

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
<section class="support volunteer volunt-page">
    <div class="container">
        <div class="supp-wrap">
            <div class="row">
                <div class="col-md-5">
                    <div class="supp-img">
                        <img src="{{ $form_text->primary_image }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <h3>
                     {{$form_text->title}}
                    </h3>
                    <p>
                        {{$form_text->short_description}}
                    </p>
                    <div class="being-volunt">
                        <form action="{{ route('volunteer') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone" placeholder="Number" value="{{ old('phone') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="experience" placeholder="Past experience" value="{{ old('experience') }}">
                                </div>
                            </div>
                            <button type="submit" class="btn-1">Become Volunteer</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Donor-list">
    <div class="container">
        <h4>Donor List</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="donor-wrap">
                    <img src="{{ $donor_1->primary_image }}" alt="">
                    <h6>{{ $donor_1->title }}</h6>
                    <h5>{{ $donor_1->subtitle }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="donor-wrap">
                    <img src="{{ $donor_2->primary_image }}" alt="">
                    <h6>{{ $donor_2->title }}</h6>
                    <h5>${{ $donor_2->subtitle }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="donor-wrap">
                    <img src="{{ $donor_3->primary_image }}" alt="">
                    <h6>{{ $donor_3->title }}</h6>
                    <h5>{{ $donor_3->subtitle }}</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="donor-wrap">
                    <img src="{{ $donor_4->primary_image }}" alt="">
                    <h6>{{ $donor_4->title }}</h6>
                    <h5>{{ $donor_4->subtitle }}</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
