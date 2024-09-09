@extends('layouts.front.app')
@section('title', 'Scholarship')
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div id="success-message" class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <section class="contact_page">
        <div class="container">
            <div class="row">
                <div class=" col-md-12">
                    <div class="sec_head">
                        <div class="">
                            <!--<h3>Apply For SPonsorship</h3>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flexRow">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="home_form_wrap">
                        <h4>Personal Information</h4>
                        <form action="{{ route('scholarship') }}" method="POST" enctype="multipart/form-data" id="scholarship">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <label>Full Name</label>
                                    <input type="text" name="name" id="" placeholder="Full Name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <label>Birth Date</label>
                                    <input type="date" placeholder="" name="dob" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Current Address</label>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" placeholder="Street Address" name="address_1" required>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input type="text" placeholder="Street Address Line 2"name="address_2">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select class="" aria-label="Default select example" name="city" required>
                                        <option selected>City</option>
                                        <option value="city 1">City 1</option>
                                        <option value="city 2">City 2</option>
                                        <option value="city 3">City 3</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <select class="" aria-label="Default select example" name="state" required>
                                        <option selected>State / Province</option>
                                        <option value="One">One</option>
                                        <option value="One">Two</option>
                                        <option value="One">Three</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <input type="number" placeholder="Postal / Zip Code" name="zipcode" required>
                                </div>
                            </div>
                            <h4>Educational Information</h4>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Name of institute</label>
                                    <input type="text" placeholder="Name" name="institute" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>Institute Address</label>
                                    <input type="text" placeholder="Street Address" name="institute_address_1"required>
                                    <input type="text" placeholder="Street Address Line 2" name="institute_address_2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Email Address </label>
                                    <input type="email" placeholder="example@example.com" name="institute_email"required>
                                </div>
                                <div class="col-md-12">
                                    <label>Phone Number </label>
                                    <input type="number" placeholder="(000) 000-0000" name="institute_phone"required>
                                </div>
                                <div class="col-md-6">
                                    <label>GPA (out of 4)</label>
                                    <input type="number" name="gpa" required>
                                </div>
                                
                            </div>

                            <h4>Education transcript</h4>
                            <p>Upload document here</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="upload">
                                        <input type="file" name="transcript" id="transcript" required>
                                        <div class="upload-abs">
                                            <img src="{{ asset('web-assets/images/file.png') }}" alt="">
                                            <a href="donate.html" class="btn-1">Upload</a>
                                            <span id="file-name" class="file-name">No file chosen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('transcript').addEventListener('change', function() {
                                    var fileInput = document.getElementById('transcript');
                                    var fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';
                                    document.getElementById('file-name').textContent = fileName;
                                });
                            </script>


                            <h4>reference</h4>
                            <h5>Person 1</h5>


                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name </label>
                                    <input type="text" placeholder="Full Name " name="ref1_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone Number </label>
                                    <input type="number" placeholder="012-456-789" name="ref1_phone" required>
                                </div>
                            </div>
                            <h5>Person 2</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name </label>
                                    <input type="text" placeholder="Full Name " name="ref2_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Phone Number </label>
                                    <input type="number" placeholder="012-456-789" name="ref2_phone"required>
                                </div>
                            </div>
                            <h4>Personal Statement</h4>
                            <p>Upload document here</p>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="upload">
                                        <input type="file" id="statement" name="statement" required>
                                        <div class="upload-abs">
                                            <img src="{{asset ('web-assets/images/file.png') }}" alt="">
                                            <a href="donate.html" class="btn-1">Upload</a>
                                            <span id="statement-file-name" class="file-name">No file chosen</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.getElementById('statement').addEventListener('change', function() {
                                    var fileInput = document.getElementById('statement');
                                    var fileName = fileInput.files[0] ? fileInput.files[0].name : 'No file chosen';
                                    document.getElementById('statement-file-name').textContent = fileName;
                                });
                            </script>


                            <h4>Any Illness</h4>


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="chexk-boxs">
                                        <input type="checkbox" name="sickle" id="sickle">
                                        <label for="sickle">Do you have Sickle Cell Disease?</label>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <label>List down any other illness</label>
                                    <textarea rows="5" placeholder="Message" name="diseases"></textarea>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="contact_page-btn">
                                        <button class="btn-theme" type="submit">
                                            <span class="text-container">
                                                <span class="btn-1">Apply</span>
                                            </span>
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
