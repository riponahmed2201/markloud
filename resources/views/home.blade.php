@extends('master')

@section('content')
    <!-- =========================== Banner Section =========================================== -->
    @include('frontend.pages.home.banner')

    <!-- =========================== Brands Logo Slider =========================================== -->
    @include('frontend.pages.home.brand-logo-slider')

    <!-- =========================== Services Area =========================================== -->
    @include('frontend.pages.home.services-area')

    <!-- =========================== Branding Area =========================================== -->
    {{-- @include('frontend.pages.home.branding-area') --}}

    <!-- =========================== Speciality Area =========================================== -->
    {{-- @include('frontend.pages.home.speciality-area') --}}

    <!-- =========================== Projects Area =========================================== -->
    @include('frontend.pages.home.project-area')

    <!-- =========================== Reviews Area =========================================== -->
    {{-- @include('frontend.pages.home.review-area') --}}

    <!-- =========================== Blog Area =========================================== -->
    {{-- @include('frontend.pages.home.blog-area') --}}

@endsection
