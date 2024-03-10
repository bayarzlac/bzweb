@extends('layouts.master')
@section('content')
    <!-- Hero section -->
    <div class="section-2xl bg-image parallax-bg" data-bg-src="{{ asset('storage/images/home_bg.jpg') }}">
        <div class="bg-dark-03">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        {{-- <p class="font-small uppercase font-family-secondary"><a href="#">Category</a></p> --}}
                        <div class="margin-top-20 margin-bottom-20">
                            <h1 class="font-weight-normal">{{ $menuItem->title }}</h1>
                        </div>
                        {{-- <ul class="list-inline-dash">
                            <li><a href="#">by Admin</a></li>
                            <li><a href="#">{{ $menuItem->updated_at }}</a></li>
                        </ul> --}}
                    </div>
                </div><!-- end row -->
                <!-- Share buttons -->
                {{-- <div class="bottom padding-30">
                    <ul class="list-inline-sm">
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a class="button-circle button-circle-sm button-circle-outline-white" href="#"><i
                                    class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div> --}}
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Blog Post content -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    {!! $menuItem->description !!}
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Blog Post content -->
@endsection