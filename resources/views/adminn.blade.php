<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.svg" />

    <!-- TITLE -->
    <title>Aurora</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/dark-style.css" rel="stylesheet" />
    <link href="assets/css/transparent-style.css" rel="stylesheet">
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@400&display=swap');

        * {
            font-family: 'Almarai', sans-serif;
        }

        .header-brand-img {
            border-radius: 50%;
            width: 150px;
        }

        body {
            overflow-y: auto;
        }

        input::placeholder {
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>

<body class="app sidebar-mini ltr"
    style="  background: #1d4350;
background: -webkit-linear-gradient(to right, #1d4350, #a43931);
background: linear-gradient(to right, #1d4350, #a43931);">

    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-5">
                    <div class="text-center">
                        <img src="assets/images/logo.jpg" class="header-brand-img" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form action="{{ route('auroraAdmin') }}" method="POST"
                            class="login100-form validate-form needs-validation">
                            @csrf
                            <span class="login100-form-title pb-5">
                             Aurora
                            </span>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="wrap-input100 validate-input input-group"
                                            data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 border-start-0 form-control ms-0" name="email"
                                                type="text"email" placeholder="البريد الالكتروني" required>

                                        </div>
                                        @error('email')
                                                <div class="alert alert-danger">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input name="password" class="input100 border-start-0 form-control ms-0"
                                                type="password" placeholder="كلمة المرور" required>

                                        </div>
                                        @error('password')
                                                <div class="alert alert-danger">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @enderror
                                        <div class="container-login100-form-btn">

                                            <button type="submit" class="btn btn-block btn-default "
                                                style="font-weight:bolder ">
                                                تسجيل الدخول
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="assets/plugins/p-scroll/pscroll.js"></script>
    <script src="assets/plugins/p-scroll/pscroll-1.js"></script>

    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <script src="assets/js/form-validation.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
