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
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.html"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>UI Kit</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Apps</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                        <li><a href="cards.html" class="slide-item"> Cards design</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Bootstrap</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu mega-slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Bootstrap</a></li>
                        <div class="mega-menu">
                            <div class="">
                                <ul>
                                    <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                                    <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                                    <li><a href="colors.html" class="slide-item"> Colors</a></li>
                                    <li><a href="avatarsquare.html" class="slide-item"> Avatar Square</a></li>
                                    <li><a href="avatar-radius.html" class="slide-item"> Avatar Radius</a></li>
                                    <li><a href="avatar-round.html" class="slide-item"> Avatar Rounded</a></li>
                                    <li><a href="dropdown.html" class="slide-item"> Dropdowns</a></li>
                                </ul>
                            </div>
                        </div>
                    </ul>
                </li>
                <li>
                    <a class="side-menu__item has-link" href="landing-page.html" target="_blank"><i
                            class="side-menu__icon fe fe-zap"></i><span class="side-menu__label">Landing
                            Page</span><span class="badge bg-green br-5 side-badge blink-text pb-1">New</span></a>
                </li>
                <li class="sub-category">
                    <h3>Pre-build Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                            class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i
                            class="angle fe fe-chevron-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                        <li><a href="profile.html" class="slide-item"> Profile</a></li>
                        <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                        <li><a href="notify-list.html" class="slide-item"> Notifications List</a></li>
                        <li><a href="email-compose.html" class="slide-item"> Mail-Compose</a></li>
                        <li><a href="email-inbox.html" class="slide-item"> Mail-Inbox</a></li>
                        <li><a href="email-read.html" class="slide-item"> Mail-Read</a></li>
                        <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)"><span
                                    class="sub-side-menu__label">Forms</span><i
                                    class="sub-angle fe fe-chevron-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="form-elements.html" class="sub-slide-item"> Form Elements</a>
                                </li>
                                <li><a href="form-layouts.html" class="sub-slide-item"> Form Layouts</a>
                                </li>
                                <li><a href="form-advanced.html" class="sub-slide-item"> Form Advanced</a>
                                </li>
                                <li><a href="form-editor.html" class="sub-slide-item"> Form Editor</a></li>
                                <li><a href="form-wizard.html" class="sub-slide-item"> Form Wizard</a></li>
                                <li><a href="form-validation.html" class="sub-slide-item"> Form Validation</a></li>
                                <li><a href="form-input-spinners.html" class="sub-slide-item"> Form Input Spinners</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
