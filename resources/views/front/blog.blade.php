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
  <section class="spon-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="abt-img spon-img">
                    <img src="{{ $sch_1->primary_image }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="spon-text">
                    <div class="spon-heading">
                        <h2>{{ $sch_1->title }}</h2>
                        <p>{{$sch_1->short_description}}
                        </p>
                    </div>
                    <div class="spon-list-point">
                        <h4>{{ $sch_1->subtitle }}</h4>
                        <ul>
                      {!! $sch_1->description !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="spon-sec spon-sec2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="spon-text">
                    <div class="spon-heading">
                        <h2>{{ $sch_2->title }}</h2>
                        <p>{{$sch_2->short_description}}
                        </p>
                    </div>
                    <div class="spon-list-point">
                        <h4>{{ $sch_2->subtitle }}</h4>
                        <ul>
                           {!! $sch_2->description !!}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="abt-img spon-img">
                    <img src="{{ $sch_2->primary_image }}" alt="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="sponsorship-mainbtn">
                <a href="{{ $sch_2->link }}" class="btn-1">{{ $sch_2->button_text }}</a>
                </div>
            </div>
        </div>
</section>
<!-- Blog Section Start -->
<section class="blog-sec blog-pag">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-head  wow fadeInLeft" data-wow-duration="2s">
                    <h2>Latest Blogs</h2>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach ($blogs as $blog)
            <div class="col-xl-4 col-lg-4 col-md-6 mb-5">
                <div class="blog-box  wow fadeInUp" data-wow-duration="2s">
                    <div class="blog-image">
                        <a href=" {{ route('show.blog', $blog->slug) }} "> <img src="{{ $blog->primary_image }}" alt=""></a>
                    </div>
                    <div class="blog-text">
                        <p>Personal <span>2 MIN READ</span></p>
                        <h4>{{ $blog->title }}</h4>
                        <ul class="blog-list">
                            <li><img src="{{ $blog->author_image }}" alt="">
                                <h6>{{ $blog->author }} </h6>
                            </li>
                            <li>
                            {{ old('created_at', \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Section End -->






@endsection


@section('js')

@endsection