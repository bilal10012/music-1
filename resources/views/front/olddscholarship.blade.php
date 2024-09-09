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
                        <!--<h3>Apply For Sponsorship</h3>-->
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
                                <input type="text" name="name" id="" placeholder="Full Name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <label>Birth Date</label>
                                <input type="date" placeholder="" name="dob" value="{{ old('dob') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label>Current Address</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="text" placeholder="Street Address" name="address_1" value="{{ old('address_1') }}" required>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="text" placeholder="Street Address Line 2" name="address_2" value="{{ old('address_2') }}">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <select class="" aria-label="Default select example" name="city" required>
                                    <option value="" disabled {{ old('city') ? '' : 'selected' }}>City</option>
                                    <option value="city 1" {{ old('city') == 'city 1' ? 'selected' : '' }}>City 1</option>
                                    <option value="city 2" {{ old('city') == 'city 2' ? 'selected' : '' }}>City 2</option>
                                    <option value="city 3" {{ old('city') == 'city 3' ? 'selected' : '' }}>City 3</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <select class="" aria-label="Default select example" name="state" required>
                                    <option value="" disabled {{ old('state') ? '' : 'selected' }}>State / Province</option>
                                    <option value="One" {{ old('state') == 'One' ? 'selected' : '' }}>One</option>
                                    <option value="Two" {{ old('state') == 'Two' ? 'selected' : '' }}>Two</option>
                                    <option value="Three" {{ old('state') == 'Three' ? 'selected' : '' }}>Three</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <input type="number" placeholder="Postal / Zip Code" name="zipcode" value="{{ old('zipcode') }}" required>
                            </div>
                        </div>
                        <h4>Educational Information</h4>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label>Name of institute</label>
                                <input type="text" placeholder="Name" name="institute" value="{{ old('institute') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label>Institute Address</label>
                                <input type="text" placeholder="Street Address" name="institute_address_1" value="{{ old('institute_address_1') }}" required>
                                <input type="text" placeholder="Street Address Line 2" name="institute_address_2" value="{{ old('institute_address_2') }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email Address </label>
                                <input type="email" placeholder="example@example.com" name="institute_email" value="{{ old('institute_email') }}" required>
                            </div>
                            <div class="col-md-12">
                                <label>Phone Number </label>
                                <input type="number" placeholder="(000) 000-0000" name="institute_phone" value="{{ old('institute_phone') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>GPA (out of 4)</label>
                                <input type="number" name="gpa" step="0.1" value="{{ old('gpa') }}" required>
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

                        <h4>Reference</h4>
                        <h5>Person 1</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Name </label>
                                <input type="text" placeholder="Full Name " name="ref1_name" value="{{ old('ref1_name') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Phone Number </label>
                                <input type="number" placeholder="012-456-789" name="ref1_phone" value="{{ old('ref1_phone') }}" required>
                            </div>
                        </div>
                        <h5>Person 2</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name </label>
                                <input type="text" placeholder="Full Name " name="ref2_name" value="{{ old('ref2_name') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label>Phone Number </label>
                                <input type="number" placeholder="012-456-789" name="ref2_phone" value="{{ old('ref2_phone') }}" required>
                            </div>
                        </div>
                        <h4>Financial Need</h4>
                        <p>Please specify how you are planning to use the sponsorship?</p>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="need_description" rows="3" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." required>{{ old('need_description') }}</textarea>
                            </div>
                        </div>

                        <h4>Additional Information</h4>
                        <p>How did you hear about this scholarship?</p>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="text" placeholder="" name="additional_info" value="{{ old('additional_info') }}">
                            </div>
                        </div>

                        <h4>Personal Statement</h4>
                        <p>What would receiving this scholarship mean to you? </p>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="personal_statement" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." required>{{ old('personal_statement') }}</textarea>
                            </div>
                        </div>
                        <h4>Health Information</h4>
                        <p>Do you have any known illness or health concerns?</p>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label for="illness">Illness</label>
                                <input type="checkbox" id="illness" name="illness" value="1" {{ old('illness') ? 'checked' : '' }}>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input class="submit_btn" type="submit" value="Submit">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
