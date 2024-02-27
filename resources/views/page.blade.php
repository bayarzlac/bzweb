@extends('layouts.master')
@section('content')
    <!-- Hero section -->
    <div class="section-2xl bg-image parallax-bg" data-bg-src="/bzweb/assets/images/background.jpg">
        <div class="bg-dark-03">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <p class="font-small uppercase font-family-secondary"><a href="#">Category</a></p>
                        <div class="margin-top-20 margin-bottom-20">
                            <h1 class="font-weight-normal">Blog Single Standard</h1>
                        </div>
                        <ul class="list-inline-dash">
                            <li><a href="#">by Admin</a></li>
                            <li><a href="#">Feb 6, 2020</a></li>
                        </ul>
                    </div>
                </div><!-- end row -->
                <!-- Share buttons -->
                <div class="bottom padding-30">
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
                </div>
            </div><!-- end container -->
        </div>
    </div>
    <!-- end Hero section -->

    <!-- Blog Post content -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                        quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <blockquote class="blockquote margin-top-30">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
            </div><!-- end row -->
            <div class="row col-spacing-20 margin-top-30">
                <div class="col-12 col-lg-6">
                    <img src="/bzweb/assets/images/col-1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/bzweb/assets/images/col-1.jpg" alt="">
                </div>
                <div class="col-12">
                    <img src="/bzweb/assets/images/col-1.jpg" alt="">
                </div>
            </div><!-- end row -->
            <div class="row margin-top-40">
                <div class="col-12 col-lg-10 offset-lg-1">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                        massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                        quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                    <ul class="margin-top-30">
                        <li>Aenean commodo ligula eget dolor</li>
                        <li>Donec pede justo</li>
                        <li>Curabitur ullamcorper ultricies nisi</li>
                        <li>Etiam ultricies nisi vel augue.</li>
                    </ul>
                    <div class="margin-top-30">
                        <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                            neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.</p>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Blog Post content -->
@endsection
