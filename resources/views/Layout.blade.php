<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/logo.svg" />

    <!-- TITLE -->

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <link href="/assets/css/dark-style.css" rel="stylesheet" />
    <link href="/assets/css/transparent-style.css" rel="stylesheet">
    <link href="/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="/assets/colors/color1.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Almarai:wght@400&display=swap');

        * {
            font-family: 'Almarai', sans-serif;
        }
    </style>
</head>
@php
$mode = session()->get('theme');
@endphp

<body class="app sidebar-mini ltr  {{ $mode }} ">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="/assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->

            <div class="app-header header sticky ">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                            href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal ">
                            <img src="/assets/images/logo.svg" style="width:60px"
                                class="header-brand-img desktop-logo" alt="logo">
                            <img src="/assets/images/logo.svg" style="width:60px" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <!-- SEARCH -->
                                        <div class="dropdown d-flex profile-1">
                                            <a class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-list"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('AddCourse') }}">
                                                    <i class="dropdown-icon icon icon-graduation"></i>
                                                    إضافة دورة
                                                </a>
                                                <a class="dropdown-item" href="{{ route('AddCompetition') }}">
                                                    <i class="dropdown-icon icon icon-trophy"></i>
                                                    إضافة مسابقة
                                                </a>
                                                {{-- <a class="dropdown-item" href="{{ route('AddStore') }}">
                                                    <i class="dropdown-icon fe fe-shopping-bag"></i>
                                                    إضافة متجر
                                                </a> --}}
                                            </div>
                                        </div>
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting"
                                                href="/changeMode">
                                                <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                <span class="light-layout"><i class="fe fe-sun"></i></span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
                                        <div class="dropdown d-flex">
                                            <a class="nav-link icon full-screen-link nav-link-bg">
                                                <i class="fe fe-minimize fullscreen-button"></i>
                                            </a>
                                        </div>
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown"
                                                class="nav-link leading-none d-flex">
                                                <img src="/assets/images/logo.svg" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">اسم المستخدم</h5>
                                                        <small class="text-muted">مدير الحساب</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="{{ route('Settings') }}">
                                                    <i class="dropdown-icon fe fe-settings"></i> إعدادت الحساب
                                                </a>
                                                <a class="dropdown-item" href="{{ route('Login') }}">
                                                    <i class="dropdown-icon fe fe-log-out"></i> تسجيل الخروج
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="{{ route('DashBoard') }}">
                            <img src="/assets/images/logo.svg" class="header-brand-img desktop-logo"
                                style="width: 60px;">
                            <img src="/assets/images/logo.svg" class="header-brand-img toggle-logo">
                            <img src="/assets/images/logo.svg" class="header-brand-img light-logo">
                            <img src="/assets/images/logo.svg" class="header-brand-img light-logo1"
                                style="width: 60px;">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('DashBoard') }}"><i
                                        class="side-menu__icon icon icon-speedometer"></i><span
                                        class="side-menu__label">لوحة التحكم</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Users') }}"><i
                                        class="side-menu__icon fe fe-users"></i><span
                                        class="side-menu__label">المستخدمين</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Courses') }}"><i
                                        class="side-menu__icon icon icon-graduation"></i><span
                                        class="side-menu__label">الدورات</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('Competitions') }}"><i
                                        class="side-menu__icon icon-trophy"></i><span
                                        class="side-menu__label">المسابقات</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('News','ar') }}"><i
                                        class="side-menu__icon icon icon-globe"></i><span
                                        class="side-menu__label">أخبار الاتحاد الرياضي</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Stores') }}"><i
                                        class="side-menu__icon fe fe-shopping-bag"></i><span
                                        class="side-menu__label">المتاجر</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Chat') }}"><i
                                        class="side-menu__icon fe fe-message-circle"></i><span
                                        class="side-menu__label">الدردشات</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Articles') }}"><i
                                        class="side-menu__icon ti-files"></i><span
                                        class="side-menu__label">المقالات</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('Researches','ar') }}"><i class="side-menu__icon ti-zoom-in"></i><span
                                        class="side-menu__label">الأبحاث
                                        العلمية</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('Trips&Business') }}"><i
                                        class="side-menu__icon icon icon-plane"></i><span
                                        class="side-menu__label">الرحلات و الاعمال</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Banners') }}">
                                    <i class="side-menu__icon ti-gallery"></i>
                                    <span class="side-menu__label">
                                        البنرات الإعلانية
                                    </span>
                                </a>
                            </li>
                            <li class="sub-category">
                                <h3>معلومات التطبيق</h3>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('IFMISMembers') }}">
                                    <span class="side-menu__label">
                                        أعضاء الاتحاد
                                    </span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('PrivacyPolicy') }}">
                                    <span class="side-menu__label">
                                        سياسة الخصوصية
                                    </span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('Visions') }}">
                                    <span class="side-menu__label">
                                        الرؤية والرسالة والهدف
                                    </span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ url('Information/BecomeMember') }}">
                                    <span class="side-menu__label">
                                        شروط الحصول على العضوية
                                    </span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('IntellectualPropertyRights') }}">
                                    <span class="side-menu__label">
                                        حقوق الملكية الفكرية
                                    </span>
                                </a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide"
                                    href="{{ route('EvacuationResponsibilaty') }}">
                                    <span class="side-menu__label">
                                        إخلاء المسؤولية
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">
                        <!-- ROW-1 OPEN -->
                        <!-- Row -->
                        <div class="row ">
                            <div class="col-md-12">
                                @yield('content')
                            </div>
                        </div>
                        <!-- /Row -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="/assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="/assets/js/circle-progress.min.js"></script>

    <!-- C3 CHART JS -->
    <script src="/assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="/assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- INPUT MASK JS-->
    <script src="/assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="/assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="/assets/plugins/select2/select2.full.min.js"></script>

    <!-- DATA TABLE JS-->
    <script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="/assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="/assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="/assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="/assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="/assets/js/table-data.js"></script>

    <!-- SIDEBAR JS -->
    <script src="/assets/plugins/sidebar/sidebar.js"></script>

    <script src="/assets/plugins/formwizard/jquery.smartWizard.js"></script>
    <script src="/assets/plugins/formwizard/fromwizard.js"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="/assets/plugins/jquery-steps/jquery.steps.min.js"></script>
    <script src="/assets/plugins/parsleyjs/parsley.min.js"></script>


    <!-- Perfect SCROLLBAR JS-->
    <script src="/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="/assets/plugins/p-scroll/pscroll.js"></script>
    <script src="/assets/plugins/p-scroll/pscroll-1.js"></script>


    <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- INTERNAL Accordion-Wizard-Form js-->
    <script src="/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js"></script>
    <script src="/assets/js/form-wizard.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="/assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="/assets/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="/assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="/assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="/assets/plugins/fancyuploder/fancy-uploader.js"></script>
    <script src="/assets/plugins/gallery/picturefill.js"></script>
    <script src="/assets/plugins/gallery/lightgallery.js"></script>
    <script src="/assets/plugins/gallery/lightgallery-1.js"></script>
    <script src="/assets/plugins/gallery/lg-pager.js"></script>
    <script src="/assets/plugins/gallery/lg-autoplay.js"></script>
    <script src="/assets/plugins/gallery/lg-fullscreen.js"></script>
    <script src="/assets/plugins/gallery/lg-zoom.js"></script>
    <script src="/assets/plugins/gallery/lg-hash.js"></script>
    <script src="/assets/plugins/gallery/lg-share.js"></script>

    <!-- Color Theme js -->
    <script src="/assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="/assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="/assets/js/custom.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#UserImage')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

            oFReader.onload = function(oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

        document.getElementById('buttonid').addEventListener('click', openDialog);

        function openDialog() {
            document.getElementById('uploadImage').click();
        }
    </script>


    <script>
        $(document).ready(function() {

            $('.layout-setting').click(function(e) {
                e.preventDefault();

                $.ajax({
                    // type: "",
                    url: "/changeMode",

                    success: function(response) {}
                });
            });
        });
    </script>

</html>
