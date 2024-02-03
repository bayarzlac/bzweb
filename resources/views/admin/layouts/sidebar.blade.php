<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="index.html">
                <img src="{{ asset('admin_assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{ asset('admin_assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{ asset('admin_assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                <img src="{{ asset('admin_assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu mt-8">
                <li class="slide">
                    <a class="side-menu__item has-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" 
                        data-bs-toggle="slide" href="{{ route('admin.dashboard') }}">
                        <i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Хянах самбар</span>
                    </a>
                </li>
                <li class="sub-category">
                    <h3>Бүртгэл</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-users"></i>
                        <span class="side-menu__label">Хэрэглэгчид</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                </li>
                <li class="slide {{ request()->is('admin/products*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-slack"></i>
                        <span class="side-menu__label">Бараа бүртгэл</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Бараа</a></li>
                        <li><a href="{{ route('admin.products.categories') }}" class="slide-item {{ request()->is('admin/products/categories') ? 'active' : '' }}"> Ангилал</a></li>
                        <li>
                            <a href="{{ route('admin.products') }}" class="slide-item {{ request()->is('admin/products/index') ? 'active' : '' }}">Барааны бүртгэл</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.products.new') }}" class="slide-item {{ request()->is('admin/products/new') ? 'active' : '' }}" >Шинээр нэмэх</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Веб сайтын агуулга</h3>
                </li>
                <li class="slide {{ request()->is('admin/menus*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-menu"></i>
                        <span class="side-menu__label">Цэс</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Цэс</a></li>
                        <li><a href="{{ route('admin.menus.main') }}" class="slide-item {{ request()->is('admin/menus/main') ? 'active' : '' }}"> Үндсэн цэс</a></li>
                    </ul>
                </li>
                <li class="slide {{ request()->is('admin/posts*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <i class="side-menu__icon fe fe-edit"></i>
                        <span class="side-menu__label">Агуулга</span>
                        <i class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Агуулга</a></li>
                        <li><a href="{{ route('admin.posts.categories') }}" class="slide-item {{ request()->is('admin/posts/categories') ? 'active' : '' }}"> Ангилал</a></li>
                        <li><a href="{{ route('admin.posts') }}" class="slide-item {{ request()->is('admin/posts') ? 'active' : '' }}"> Агуулгын жагсаалт</a></li>
                        <li><a href="{{ route('admin.posts.new') }}" class="slide-item {{ request()->is('admin/posts/new') ? 'active' : '' }}"> Агуулга нэмэх</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
