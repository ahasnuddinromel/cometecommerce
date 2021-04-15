@extends('frontend.layouts.app')

@section('main-content')

@include('frontend.home.slider')

@include('frontend.contactitem.contactinfo')

  <section>

    @include('frontend.contactitem.locationmap')

    @include('frontend.contactitem.contactform')

  </section>

  @include('frontend.contactitem.count')

@endsection
