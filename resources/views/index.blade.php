@extends('layouts.master')
@section('content')

    <!-- Hero section -->
    <div class="section-3xl bg-image parallax-bg" data-bg-src="{{ asset('storage/images/home_bg.jpg') }}">
        <div class="bg-dark-07">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 offset-md-1 col-lg-8">
                        <h1 class="display-4 font-weight-semi-bold uppercase letter-spacing-2 line-height-140 margin-0">
                            {{ $homePageData['header']['title'] }}
                        </h1>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Services section -->
    <div class="section">
        <div class="container">
            <div class="row icon-xl">
                <div class="col-12 col-lg-4">
                    <div class="sf-box sf-box-lg">
                        <div class="sf-box-icon">
                            <i class="ti-star"></i>
                        </div>
                        <h5 class="font-weight-normal">
                            {{ $homePageData['intro']['section1']['title'] }}
                        </h5>
                        <p>
                            {{ $homePageData['intro']['section1']['content'] }}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sf-box sf-box-lg">
                        <div class="sf-box-icon">
                            <i class="ti-comment-alt"></i>
                        </div>
                        <h5 class="font-weight-normal">
                            {{ $homePageData['intro']['section2']['title'] }}
                        </h5>
                        <p>{{ $homePageData['intro']['section2']['content'] }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sf-box sf-box-lg">
                        <div class="sf-box-icon">
                            <i class="ti-announcement"></i>
                        </div>
                        <h5 class="font-weight-normal">
                            {{ $homePageData['intro']['section3']['title'] }}
                        </h5>
                        <p>{{ $homePageData['intro']['section3']['content'] }}</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Services section -->

    <!-- About section -->
    <div class="section-lg padding-top-0">
        <div class="container">
            <div class="row col-spacing-50 align-items-center">
                <div class="col-12 col-lg-6">
                    <img class="box-shadow-with-hover border-radius-05" src="storage/assets/images/col-1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <h2>{{ $homePageData['shortIntro']['title'] }}</h2>
                    <p>{{ $homePageData['shortIntro']['content'] }}</p>
                    <a class="button-text-2 margin-top-30" href="{{ $homePageData['shortIntro']['link'] }}">Дэлгэрэнгүй</a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end About section -->

    <!-- Testimonial section -->
    <div class="section-xl bg-image parallax-bg" data-bg-src="storage/assets/images/background.jpg">
        <div class="bg-dark-07">
            <div class="container">
                <div class="owl-carousel testimonial-carousel" data-owl-nav="true" data-owl-items="1" data-owl-autoplay="true" data-owl-margin="30">
                    <!-- 1 -->
                    <div class="testimonial-item">
                        {{-- <div class="margin-bottom-20">
                            <img src="storage/assets/images/avatar-md.jpg" alt="">
                        </div> --}}
                        <div class="margin-bottom-30">
                            <h5 class="font-weight-normal margin-0 line-height-130">Melissa Bakos</h5>
                            <span class="font-small">Marketer - Arty</span>
                        </div>
                        <p class="font-large font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                    <!-- 2 -->
                    <div class="testimonial-item">
                        {{-- <div class="margin-bottom-20">
                            <img src="storage/assets/images/avatar-md.jpg" alt="">
                        </div> --}}
                        <div class="margin-bottom-30">
                            <h5 class="font-weight-normal margin-0 line-height-130">Melissa Bakos</h5>
                            <span class="font-small">Marketer - Arty</span>
                        </div>
                        <p class="font-large font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                    <!-- 3 -->
                    <div class="testimonial-item">
                        {{-- <div class="margin-bottom-20">
                            <img src="storage/assets/images/avatar-md.jpg" alt="">
                        </div> --}}
                        <div class="margin-bottom-30">
                            <h5 class="font-weight-normal margin-0 line-height-130">Melissa Bakos</h5>
                            <span class="font-small">Marketer - Arty</span>
                        </div>
                        <p class="font-large font-weight-light">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Testimonial section -->

    <!-- Accordion section -->
    <div class="section-lg padding-bottom-0">
        <div class="container">
            <div class="row align-items-center col-spacing-50">
                <div class="col-12 col-lg-6 order-lg-2">
                    <img class="box-shadow-with-hover border-radius-05" src="'storage/assets/images/col-1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <ul class="accordion single-open style-3 rounded">
                        <li class="active">
                            <div class="accordion-title">
                                <h6 class="font-weight-medium">First Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-weight-medium">Second Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                        <li>
                            <div class="accordion-title">
                                <h6 class="font-weight-medium">Third Question?</h6>
                            </div>
                            <div class="accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Accordion section -->

    <!-- Counter/Progress bars -->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <h1 class="font-weight-light margin-0"><span class="counter">120</span>+</h1>
                            <p>Projects Done</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h1 class="font-weight-light margin-0"><span class="counter">94</span></h1>
                            <p>Employees</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h1 class="font-weight-light margin-0"><span class="counter">300</span>+</h1>
                            <p>Happy Clients</p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <h1 class="font-weight-light margin-0"><span class="counter">126</span></h1>
                            <p>Pending Projects</p>
                        </div>
                    </div><!-- end row(inner) -->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="progress-box margin-bottom-20">
                        <h6 class="font-small uppercase font-weight-medium">Branding</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                <span>98%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h6 class="font-small uppercase font-weight-medium">Marketing</h6>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
                                <span>94%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- Counter/Progress bars -->

    <!-- Clients section -->
    <div class="section-sm bg-light-gray">
        <div class="container text-center">
            <div class="owl-carousel" data-owl-dots="false" data-owl-nav="true" data-owl-margin="50" data-owl-autoPlay="true" data-owl-xs="1" data-owl-sm="2" data-owl-md="3" data-owl-lg="4" data-owl-xl="5">
                <!-- Client box 1 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 2 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 3 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 4 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 5 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 6 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
                <!-- Client box 7 -->
                <div class="client-box">
                    <a href="#">
                        <img src="storage/assets/images/col-5.jpg" alt="">
                    </a>
                </div>
            </div><!-- end owl-carousel -->
        </div><!-- end container -->
    </div>
    <!-- end Clients section -->
@endsection