@extends('layouts.front.app')
@section('title', 'Tips & Info')
@section('css')
@endsection
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
                                <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
                                    <div class="banner_text banner_txt wow fadeInLeft" data-wow-duration="2s">
                                        <h6></h6>
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
                                <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
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

<section class="faq-sec">
    <div class="container">
        <h2>{{ $faq_content_1->title }}<br>{{ $faq_content_1->subtitle }}</h2>
        <div class="row" style="justify-content: center;">
            <div class="col-md-8">
                <div class="tabs-andriod mytabs current">
                    <div class="faq-page-box">
                        <div class="privacy-content-2">
                            <div class="accordion privacy-accr" id="accordionExample1">

                                @foreach ($faq_1 as $key => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne{{ $key }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $key }}"
                                            aria-expanded="false" aria-controls="collapseOne{{ $key }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{ $key }}" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne{{ $key }}" data-bs-parent="#accordionExample1">
                                        <div class="accordion-body gorrila-page-txt">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <p>If chosen wisely, with the right wedding vendors you get expert help and advice…for free!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq-imges-box-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-7">
                <div class="faq-img-headimg">
                    <h2>{{ $pricevalue->title }}</h2>
                    <p>{{$pricevalue->subtitle}} </p>
                </div>
            </div>
        </div>
        <div class="row" style="align-items: center;">
            <div class="col-md-6">
                <div class="faq-imges-box">
                    <img src="{{ asset($pricevalue->primary_image) }}" class="faq-main-img">
                    <img src="{{ asset($pricevalue->secondary_image) }}" class="faq-bg-img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq-imges-box-sec-text">
                    {!! $pricevalue->description !!}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faqs-main position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 centerCol">
                <div class="sec-head">
                    <h2>Faq’s</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="gorilla-content privacy-content">
                    <div class="accordion privacy-accr" id="accordionExample2">
                        @foreach ($faq_2 as $key => $faq)
                        <div class="accordion-item mb-5">
                            <h2 class="accordion-header" id="headingSix{{ $key }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix{{ $key }}" aria-expanded="false"
                                    aria-controls="collapseSix{{ $key }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapseSix{{ $key }}" class="accordion-collapse collapse"
                                aria-labelledby="headingSix{{ $key }}" data-bs-parent="#accordionExample2">
                                <div class="accordion-body gorrila-page-txt">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="gorilla-content privacy-content">
                    <div class="accordion privacy-accr" id="accordionExample3">
                        @foreach ($faq_21 as $key => $faq)
                        <div class="accordion-item mb-5">
                            <h2 class="accordion-header" id="headingRowOne{{ $key }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseRowOne{{ $key }}" aria-expanded="false"
                                    aria-controls="collapseRowOne{{ $key }}">
                                    {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapseRowOne{{ $key }}" class="accordion-collapse collapse"
                                aria-labelledby="headingRowOne{{ $key }}" data-bs-parent="#accordionExample3">
                                <div class="accordion-body gorrila-page-txt">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tabs-andriod mytabs current">
                    <div class="faq-page-box">
                        <h2> {{ $why_hire->title }}</h2>
                        <p>{{ $why_hire->subtitle }}</p>
                        <div class="privacy-content-2">
                            <div class="accordion privacy-accr" id="accordionExample4">
                                @foreach ($faq_3 as $key => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="collapseFive{{ $key }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFiveContent{{ $key }}"
                                            aria-expanded="false" aria-controls="collapseFiveContent{{ $key }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapseFiveContent{{ $key }}" class="accordion-collapse collapse"
                                        aria-labelledby="collapseFive{{ $key }}" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body gorrila-page-txt">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
