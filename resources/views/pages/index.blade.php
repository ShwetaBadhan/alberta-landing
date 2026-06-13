@extends('layouts.master')
@section('title', 'Home Page | Alberta')
@section('content')

@include('components.home.banner')
@include('components.home.about')
@include('components.home.services')
@include('components.home.why-choose-us')
@include('components.home.process')
@include('components.home.process-2')
@include('components.home.features')
@include('components.home.faq')
@include('components.home.testimonials')
@include('components.home.quote')
@include('components.home.cta')

@endsection