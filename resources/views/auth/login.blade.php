<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/admin_assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>Finpack - Admin Panel</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('storage/admin_assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('storage/admin_assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/admin_assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('storage/admin_assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/admin_assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('storage/admin_assets/css/icons.css') }}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('storage/admin_assets/colors/color1.css') }}" />
</head>

<body class="app sidebar-mini ltr login-img">
    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('storage/admin_assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="index.html"><img src="{{ asset('storage/admin_assets/images/brand/logo-white.png') }}"
                                class="header-brand-img" alt=""></a>
                    </div>
                </div>

                @if (session('status'))
                    <div class="row mt-6" style="justify-content: center;">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card border p-0 pb-3">
                                <div class="card-header border-0 pt-3">
                                    <div class="card-options">
                                        <a href="javascript:void(0)" class="card-options-remove"
                                            data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="60"
                                            width="60" viewBox="0 0 24 24">
                                            <path fill="#f07f8f"
                                                d="M20.05713,22H3.94287A3.02288,3.02288,0,0,1,1.3252,17.46631L9.38232,3.51123a3.02272,3.02272,0,0,1,5.23536,0L22.6748,17.46631A3.02288,3.02288,0,0,1,20.05713,22Z" />
                                            <circle cx="12" cy="17" r="1" fill="#e62a45" />
                                            <path fill="#e62a45"
                                                d="M12,14a1,1,0,0,1-1-1V9a1,1,0,0,1,2,0v4A1,1,0,0,1,12,14Z" />
                                        </svg></span>
                                    <h4 class="h4 mb-0 mt-3">Warning</h4>
                                    <p class="card-text">{{ session('status') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="container-login100">

                    <div class="row">
                        <div class="wrap-login100 p-6">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate>
                                @csrf
                                <span class="login100-form-title pb-5">
                                    Нэвтрэх
                                </span>

                                <div class="panel panel-primary">
                                    <div class="wrap-input100 validate-input input-group">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="form-control" type="email" placeholder="Email" name="email"
                                            required>
                                    </div>
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                        </a>
                                        <input class="form-control" type="password" placeholder="Password"
                                            name="password" required>
                                    </div>
                                    <div class="text-end pt-4">
                                        <p class="mb-0">
                                            <a href="{{ route('password.request') }}" class="text-primary ms-1">Нууц
                                                үгээ мартсан</a>
                                        </p>
                                    </div>
                                    <div class="container-login100-form-btn">
                                        <button type="submit" class="login100-form-btn btn-primary">Нэвтрэх</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->
    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="{{ asset('storage/admin_assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('storage/admin_assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/admin_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="{{ asset('storage/admin_assets/js/show-password.min.js') }}"></script>

    <!-- GENERATE OTP JS -->
    <script src="{{ asset('storage/admin_assets/js/generate-otp.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('storage/admin_assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('storage/admin_assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('storage/admin_assets/js/custom.js') }}"></script>

    <!-- FORMVALIDATION JS SELECT ashiglaagui uyd duudah validation -->
    <script src="{{ asset('storage/admin_assets/js/form-validation-without-select.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('storage/admin_assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
</body>

</html>
