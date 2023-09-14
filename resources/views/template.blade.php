<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Data Tables | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- main css --}}
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">

                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="" height="70">
                            </span>
                        </a>


                    </div>

                    <!-- Menu Icon -->

                    <button type="button" class="btn px-3 font-size-24 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>



                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>





                    <!-- User -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-4.jpg"
                                alt="Header Avatar">
                        </button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                                <span>Profile</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-wallet font-size-16 align-middle text-muted me-2"></i>
                                <span>My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge bg-success float-end">11</span><i
                                    class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                                <span>Settings</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="mdi mdi-lock-open-outline font-size-16 text-muted align-middle me-2"></i>
                                <span>Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-primary" href="#"><i
                                    class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                                <span>Logout</span></a>
                        </div>
                    </div>



                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">
                <div class="user-details">
                    <div class="d-flex">
                        <div class="me-2">
                            <img src="assets/images/users/avatar-4.jpg" alt=""
                                class="avatar-md rounded-circle">
                        </div>
                        <div class="user-info w-100">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Donald Johnson
                                    <i class="mdi mdi-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-account-circle text-muted me-2"></i>
                                            Profile<div class="ripple-wrapper me-2"></div>
                                        </a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-cog text-muted me-2"></i>
                                            Settings</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                            Lock screen</a></li>
                                    <li><a href="javascript:void(0)" class="dropdown-item"><i
                                                class="mdi mdi-power text-muted me-2"></i>
                                            Logout</a></li>
                                </ul>
                            </div>

                            <p class="text-white-50 m-0">Administrator</p>
                        </div>
                    </div>
                </div>


                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{ route('dashboard') }}" class="waves-effect">
                                <i class="mdi mdi-home"></i>
                                <span>Dashboard</span>

                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-book"></i>
                                <span>Data Dasar</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Program Kegiatan</a></li>
                                <li><a href="#">Pengawasan</a></li>
                                <li><a href="{{ route('pimpinan.index') }}">Pimpinan/PA</a></li>
                                <li><a href="{{ route('KPA.index') }}">KPA</a></li>
                                <li><a href="{{ route('PPKom.index') }}">PPKOM</a></li>
                                <li><a href="{{ route('PPTK.index') }}">PPTK</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-file-document-multiple"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Laporan Realisasi</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-clipboard"></i>
                                <span>Resume</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Laporan Pekerjaan</a></li>
                                <li><a href="#">Grade per PD</a></li>
                                <li><a href="#">PAD</a></li>
                                <li><a href="#">Bankeu</a></li>
                                <li><a href="#">DID</a></li>
                                <li><a href="#">DAK</a></li>
                                <li><a href="#">DAU</a></li>
                                <li><a href="#">Recap Realisasi PD</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi-text-box-multiple"></i>
                                <span>Data Monitoring</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Inbox</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="mdi mdi mdi-cog"></i>
                                <span>Pengaturan</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="email-inbox.html">Level</a></li>
                                <li><a href="{{ route('admin.index') }}">Admin</a></li>
                                <li><a href="{{ route('perusahaan.index') }}">Perusahaan</a></li>
                                <li><a href="{{ route('data-program.index') }}">Data Program</a></li>
                                <li><a href="{{ route('data-kegiatan.index') }}">Data Kegiatan</a></li>
                                <li><a href="{{ route('data-sub-kegiatan.index') }}">Data SubKegiatan</a></li>
                                <li><a href="{{ route('data-bidang.index') }}">Data Bidang</a></li>
                                <li><a href="{{ route('data-sub-bidang.index') }}">Data SubBidang</a></li>
                                <li><a href="email-compose.html">Sumber Dana</a></li>
                                <li><a href="email-compose.html">User Log</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="mdi mdi-file-tree"></i>
                                        <span>Data Lain-lain</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="#">Slider</a></li>
                                        <li><a href="#">Sambutan</a></li>
                                        <li><a href="#">Profile Bagian</a></li>
                                        <li><a href="#">Berita</a></li>
                                        <li><a href="#">Diagram</a></li>
                                        <li><a href="#">Link Terkait</a></li>
                                        <li><a href="#">File Unduhan</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        @yield('content')

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title px-3 py-4">
                <a href="javascript:void(0);" class="right-bar-toggle float-end">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <!-- Settings -->
            <hr class="" />
            <h6 class="text-center mb-0">Choose Layouts</h6>

            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                </div>

                <div class="form-check form-switch mb-3">
                    <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="assets/css/bootstrap-dark.min.css"
                        data-appStyle="assets/css/app-dark.min.css" />
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>

                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="form-check form-switch mb-5">
                    <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                        data-appStyle="assets/css/app-rtl.min.css" />
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
