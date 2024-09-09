@extends('layouts.front.app')
@section('title', 'Donate')

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
<!-- donate page sc -->
<section class="donate-pg-sc inn-bg">
    <div class="container">
        <h2 class="theme-h2">Make a <span>Contribution</span></h2>

        <div class="row">
            
            <div class="col-md-7  ">
                <form action="{{ route('donation') }}" method="POST">
                    @csrf
                <div class="donate_form_sec">
                    

                    <ul class="donate_value">
                        <li>
                            <input type="radio" id="value1" name="amount" class="donate_amount" value="5">
                            <label for="value1">$5</label>
                        </li>
                        <li>
                            <input type="radio" id="value2" name="amount" class="donate_amount" value="10">
                            <label for="value2">$10</label>
                        </li>
                        <li>
                            <input type="radio" id="value3" name="amount" class="donate_amount" value="20">
                            <label for="value3">$20</label>
                        </li>
                        <li>
                            <input type="radio" id="value4" name="amount" class="donate_amount" value="30">
                            <label for="value4">$30</label>
                        </li>
                        <li>
                            <input type="radio" id="value5" name="amount" class="donate_amount" value="40">
                            <label for="value5">$40</label>
                        </li>


                        <li>
                            <input type="radio" id="value6" name="amount" class="donate_amount" value="50">
                            <label for="value6">$50</label>
                        </li>
                        <li>
                            <input type="radio" id="value7" name="amount" class="donate_amount" value="60">
                            <label for="value7">$60</label>
                        </li>
                        <li>
                            <input type="radio" id="value8" name="amount" class="donate_amount" value="70">
                            <label for="value8">$70</label>
                        </li>
                        <li>
                            <input type="radio" id="value9" name="amount" class="donate_amount" value="80">
                            <label for="value9">$80</label>
                        </li>
                        <li>
                            <input type="radio" id="value10" name="amount" class="donate_amount" value="other">
                            <label for="value10" class="other-hvr">Other</label>
                        </li>
                    </ul>

                    <div class="select_fields">
                        <div class="row">

                            <div class="col-sm-12">
                                <input type="number" class="custom_amount" name="custom_amount"
                                    placeholder="Add Your Amount ">

                                <select required name="country" id="country" class="form-control left"
                                    placeholder="Select Country *">
                                    <option selected="" disabled="" value="">State / County</option>
                                    <option value="Afghanistan" data-countryId="1">Afghanistan</option>
                                    <option value="Albania" data-countryId="2">Albania</option>
                                    <option value="Algeria" data-countryId="3">Algeria</option>
                                    <option value="American Samoa" data-countryId="4">American Samoa</option>

                                </select>

                            </div>

                            <div class="col-md-6">
                                <input type="text" name="first_name" id="first_name" placeholder="First Name *"
                                    required="">
                            </div>


                            <div class="col-md-6">
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name *"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="company" placeholder="Company Name (Optional)">
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="address1" placeholder="Address Line 1 *" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="address2" placeholder="Address Line 2">
                            </div>

                            <div class="col-md-12">
                                <input type="text" name="address2" placeholder="Frequency">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="city" id="city" placeholder="City *" required="">
                            </div>


                            <div class="col-md-6">
                                <input type="text" name="zip_code" id="zip_code" placeholder="Zip / Postal Code *"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <div class="checkbox_donate">
                                    <div class="form-group">
                                        <input type="checkbox" id="org" class="is_organization" name="is_organization" value="1">
                                        <label for="org">I am donating on behalf of an organization.</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" placeholder="Email Address *" required="">
                            </div>
                            
                            <div class="col-md-6">
                                <input type="text" name="phone" id="billing_contact" placeholder="Phone (Optional)">
                            </div>
                            
                            <div class="col-md-12">
                                <div class="checkbox_donate">
                                    <div class="form-group">
                                        <input type="checkbox" id="retired" class="is_retired" name="is_retired" value="1">
                                        <label for="retired">I am retired</label>
                                    </div>
                                </div>
                            </div>
                            
                            <span class="retired_fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="employer" placeholder="Employer">
                                    </div>
                            
                                    <div class="col-md-6">
                                        <input type="text" name="occupation" placeholder="Occupation">
                                    </div>
                                </div>
                            </span>
                            


                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-5">
                <div class="direct_bank_transfer">
                    <h4>Donate Method</h4>
                    <h6 class="payment-h">Payment Method</h6>
            
                    <ul class="radiosss radiosss-payments">
                        {{-- <li>
                            <input type="radio" name="payment_method" id="direct" data-bs-toggle="collapse" href="#direct-p"
                                role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                            <label for="direct">Direct Bank Transfer</label>
                        </li>
                        <li>
                            <div class="collapse" id="direct-p">
                                <div class="card card-body">
                                    <p class="p-same-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="payment_method" id="cp" data-bs-toggle="collapse" href="#payment-pp"
                                role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                            <label for="cp">Check Payments</label>
                        </li>
                        <li>
                            <div class="collapse" id="payment-pp">
                                <div class="card card-body">
                                    <p class="p-same-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <input type="radio" name="payment_method" id="paypal" data-bs-toggle="collapse" href="#paypal-pp"
                                role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                            <label for="paypal">Paypal</label>
                        </li>
                        <li>
                            <div class="collapse" id="paypal-pp">
                                <div class="card card-body">
                                    <p class="p-same-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                                </div>
                            </div>
                        </li> --}}
                        <!-- Stripe Payment Option -->
                        <li>
                            <input type="radio" name="payment_method" id="stripe" data-bs-toggle="collapse" href="#stripe-p"
                                role="button" aria-expanded="false" aria-controls="collapseExample" class="collapsed">
                            <label for="stripe">Credit Card (Stripe)</label>
                        </li>
                        <li>
                            <div class="collapse" id="stripe-p">
                                <div class="card card-body">
                                    <div id="card-element">
                                        <!-- A Stripe Element will be inserted here. -->
                                    </div>
                                    <!-- Used to display form errors. -->
                                    <div id="card-errors" role="alert"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
            
                    <div class="notee">
                        <p><b>A receipt will be provided as soon as possible within the order in which it was received.</b></p>
                    </div>
                    <div class="checkbox_donate don-meth">
                        <div class="form-group">
                            <input type="checkbox" id="terms" name="terms" value="1" required>
                            <label for="terms">I agree with the <a href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
            
                    <button type="submit" class="btn-1">Donate</button>
                </div>
            </div>
            
            <!-- Stripe.js Script -->
            <script src="https://js.stripe.com/v3/"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var stripe = Stripe('pk_test_51PpylBDip21WCyXin0gM8Fhhnj4yYogPUpxT2NmmQK1RwZlq0ozp6LmqyMhopRH4KhEIeUQKlsjeNjtCrfNfvkWX006PU1Rdot'); // Replace with your own key
                    var elements = stripe.elements();
            
                    // Create an instance of the card Element
                    var card = elements.create('card');
            
                    // Add an instance of the card Element into the `card-element` div
                    card.mount('#card-element');
            
                    // Handle real-time validation errors from the card Element
                    card.addEventListener('change', function(event) {
                        var displayError = document.getElementById('card-errors');
                        if (event.error) {
                            displayError.textContent = event.error.message;
                        } else {
                            displayError.textContent = '';
                        }
                    });
            
                    // Handle form submission
                    var form = document.querySelector('form');
                    form.addEventListener('submit', function(event) {
                        event.preventDefault();
            
                        stripe.createToken(card).then(function(result) {
                            if (result.error) {
                                // Inform the user if there was an error
                                var displayError = document.getElementById('card-errors');
                                displayError.textContent = result.error.message;
                            } else {
                                // Send the token to your server
                                var form = document.querySelector('form');
                                var hiddenInput = document.createElement('input');
                                hiddenInput.setAttribute('type', 'hidden');
                                hiddenInput.setAttribute('name', 'stripeToken');
                                hiddenInput.setAttribute('value', result.token.id);
                                form.appendChild(hiddenInput);
            
                                // Submit the form
                                form.submit();
                            }
                        });
                    });
                });
            </script>
            
            </form>
        </div>
</section>
<script>
    document.querySelectorAll('.donate_amount').forEach(function(radio) {
        radio.addEventListener('change', function() {
            const amount = this.value;
            const customAmountField = document.querySelector('.custom_amount');

            if (amount === 'other') {
                customAmountField.value = ''; // Clear the field if "Other" is selected
                customAmountField.focus(); // Optionally, focus on the input field
            } else {
                customAmountField.value = amount; // Populate the field with the selected amount
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Disable the fields initially
        document.querySelectorAll('#email, #billing_contact').forEach(function (input) {
            input.disabled = true;
        });

        document.querySelectorAll('.retired_fields input').forEach(function (input) {
            input.disabled = true;
        });

        // Handle enabling/disabling fields based on the "organization" checkbox
        document.getElementById('org').addEventListener('change', function () {
            const isChecked = this.checked;
            document.querySelectorAll('#email, #billing_contact').forEach(function (input) {
                input.disabled = !isChecked; // Enable or disable fields based on the checkbox
            });
        });

        // Handle enabling/disabling fields based on the "retired" checkbox
        document.getElementById('retired').addEventListener('change', function () {
            const isChecked = this.checked;
            document.querySelectorAll('.retired_fields input').forEach(function (input) {
                input.disabled = !isChecked; // Enable or disable fields based on the checkbox
            });
        });
    });
</script>





@endsection