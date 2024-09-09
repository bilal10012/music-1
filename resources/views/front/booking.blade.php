@extends('layouts.front.app')
@section('title', 'Bookings')

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


    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <section class="contact_form">
        <h2>BOOK NOW</h2>
        <div class="container wow fadeInDown" data-wow-duration="2s">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="book-form">
                        <form id="bookingForm" method="POST" action="{{ route('forms.bookings') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-input">
                                        <input type="text" name="name" id="f-user-name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-input">
                                        <input type="number" name="phone" placeholder="Your Phone">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-input">
                                        <input type="text" name="user_date" id="user-date" placeholder="Date" readonly required>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-input">
                                        <select name="services" id="user-slec" required>
                                            <option value="">Select Services</option>
                                            <option value="service 1">Services 1</option>
                                            <option value="service 2">Services 2</option>
                                            <option value="service 3">Services 3</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-input">
                                        <textarea name="user-msg" id="user-msg" placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 wow bounceIn"
                                    data-wow-duration="3s">
                                    <div class="book-form-btn">
                                        <button type="submit">
                                            <p>Book Now</p> <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Example available dates array, fetched from backend
            var availableDates = @json($availableDates); // Example format: ["2024-09-10", "2024-09-15"]

            console.log(availableDates); // Debugging line to check dates

            // Initialize Flatpickr
            flatpickr("#user-date", {
                minDate: "today",
                dateFormat: "Y-m-d",
                enable: availableDates, // Use enable instead of disable
                onChange: function(selectedDates, dateStr, instance) {
                    // Handle date selection logic if needed
                    console.log("Selected date: ", dateStr);
                }
            });
        });
    </script>
@endsection
