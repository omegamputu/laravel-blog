<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mablox') }} | @yield('title', 'Home Page')</title>

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />
    <!--[if IE]><link rel="shortcut icon" type="image/x-icon"
                      href="{{ asset('img/favicon.png') }}" /><![endif]-->

@section('scripts')
    <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/main.js') }}"></script>
@show

<!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>


    <!-- Styles -->
    @section('styles')
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @show
</head>
<body role="document">

@include('partials.navbar')

