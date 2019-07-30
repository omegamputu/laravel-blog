@extends('layouts.confirm')

@section('content')
    <div class="starter-template">
        <h1>Thank you !</h1>
        <p class="lead">Your message was successfully send. we will contact you soon.<br>
            <a class="btn btn-primary" href="{{ url('/') }}">Blog Page</a>
        </p>
    </div>
    @endsection