@extends('layouts.front.app')
@section('title', 'Home')
@section('css')
@endsection
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
<section class="resource">
    <div class="container">
        <div class="row mb-5">
           
                
          
            <div class="container">
                <div class="row mb-4"><!-- Add margin-bottom to create space between rows -->
                @foreach ($galleryItems as $index => $resource)
            
                    <div class="col-md-4 mb-5">
                        <div class="res-box">
                            <img src="{{ $resource->primary_image }}" alt="">
                            <h5>{{ $resource->title }}</h5>
                        </div>
                    </div>
                    @endforeach
                </div><!-- Close the row after 3 items -->
            </div>
            
            {{-- <div class="col-md-4">
                <div class="res-box">
                    <img src="images/res2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="res-box">
                    <img src="images/res3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-md-4">
                <div class="res-box">
                    <img src="images/res1.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="res-box">
                    <img src="images/res2.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="res-box">
                    <img src="images/res3.jpg" alt="">
                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection

@section('js')

@endsection