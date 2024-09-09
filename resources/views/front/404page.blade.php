<!-- resources/views/errors/404.blade.php -->

@extends('layouts.app') <!-- Extend your main layout -->

@section('content')
<div class="container">
    <h1>Page Not Found</h1>
    <p>Sorry, the page you are looking for could not be found.</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Go to Homepage</a>
</div>
@endsection
