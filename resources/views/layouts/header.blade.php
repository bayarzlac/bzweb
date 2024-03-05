<!-- Scroll to Top -->
<div class="scrolltotop">
    <a class="button-circle button-circle-sm button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
</div>
<!-- end Scroll to Top -->

<!-- Header -->
<div class="header absolute-light fixed">
    <div class="container">
        <div class="logo">
            {{-- <h4 class="uppercase letter-spacing-2"><a href="#">Arty</a></h4> --}}
            {{-- <img class="logo-dark" src="/bzweb/assets/images/your-logo-dark.jpg" alt="">
            <img class="logo-light" src="/bzweb/assets/images/your-logo-light.jpg" alt=""> --}}
            <img class="logo-dark" src="{{ asset('storage/logo_dark.png') }}" alt="">
            <img class="logo-light" src="{{ asset('storage/logo_light.png') }}" alt="">
        </div>
        <div class="header-menu-wrapper">
            <!-- Menu -->
            <ul class="header-menu">
                <li class="m-item">
                    <a class="m-link" href="{{ route('index') }}">Эхлэл</a>
                </li>

                @include('layouts.nav', ['mainmenu' => $MasterMainMenu['key']])
                
            </ul>
            <!-- Extra -->
            <div class="header-menu-extra">
                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/finpackmn"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <!-- Close Button -->
            <button class="close-button">
                <span></span>
            </button>
        </div><!-- end header-menu-wrapper -->
        <!-- Menu Toggle on Mobile -->
        <button class="m-toggle">
            <span></span>
        </button>
    </div><!-- end container -->
</div>
<!-- end Header -->
