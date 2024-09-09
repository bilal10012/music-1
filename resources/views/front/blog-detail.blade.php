@extends('layouts.front.app')
@section('title', 'Blog')

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
<!-- Blog Detail Page Start -->
<section class="blog-detail-page all-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="blog-detail-box">
                    <div class="blog-detail-imag">
                        <img src="{{ asset($blog_detail->inner_image) }}" alt="">
                    </div>
                    <div class="blog-detail-text">
                        <div class="blog-text">
                            <h6>Personal 2 MIN READ</h6>
                            <ul class="blog-list">
                                <li><img src="{{ asset($blog_detail->author_image )}}" alt="">
                                    <h6>{{ $blog_detail->author }} </h6>
                                </li>
                                <li>
                            {{ old('created_at', \Carbon\Carbon::parse($blog_detail->created_at)->format('M d, Y')) }}
                                </li>
                            </ul>
                        </div>
                        <h3>{{ $blog_detail->title }}</h3>
                        <p>{!! $blog_detail->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Detail Page End -->


@endsection
