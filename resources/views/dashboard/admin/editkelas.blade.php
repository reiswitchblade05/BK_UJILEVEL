<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('/assets-admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets-admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets-admin/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html"><img src="{{asset('assets-admin/images/logo.png')}}" alt="" style="width: 135px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{asset('assets-admin/images/avatar-22.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy
                                                            Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{asset('assets-admin/images/avatar-33.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is
                                                        now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{asset('assets-admin/images/avatar-44.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is
                                                        watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="{{asset('assets-admin/images/avatar-55.jpg')}}" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica
                                                            Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/github.png" alt=""> <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/dribbble.png" alt=""> <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/dropbox.png" alt=""> <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/mail_chimp.png" alt=""><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets-admin/images/slack.png" alt=""> <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expand-admined="false"><img src="{{asset('assets-admin/images/avatar-admin.jpg')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Admin</h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('dashboardadmin') }}"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success"></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('kelasadmin') }}"><i class="fas fa-fw fa-chart-pie"></i>Kelas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('walikelasadmin') }}"><i class="fas fa-fw fa-chart-pie"></i>Wali Kelas</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('guruadmin') }}"><i class="fas fa-users"></i>Guru</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('muridadmin') }}"><i class=" fas fa-user" style="padding-right: 3px;"></i>Murid</a>
                            </li>
                            <li class="nav-item">
                                <form id="logout-form" action="{{ url('logout') }}" method="GET">
                                    {{ csrf_field() }}
                                    <button class="nav-link" type="submit" style="background: #241f68; text-align:left; width: 240px; border:none; margin-top:2.5vw;"><i class="fas fa-arrow-left" style="padding-left: 2px; padding-right: 3px;"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Kelas </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                    vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Kelas</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">
                            <style>
                                .btn-tambah {
                                    border-radius: 7px;
                                    padding: 7px;
                                    margin-bottom: 1.4vw;
                                    width: 110px;
                                    border: none;
                                    color: #fff;
                                    background-color: #1d3988;
                                }

                                .btn-back {
                                    border-radius: 7px;
                                    padding: 7px;
                                    border: none;
                                    margin-left: 0.5vw;
                                    width: 75px;
                                    color: #fff;
                                    background-color: #1d3988;
                                }
                            </style>
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Update Kelas</h5>
                                    <div class="card-body">
                                        <form action="/updatekelas/{{ $row->id }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{ $row->nama_kelas }}" name="nama_kelas" placeholder="Nama Kelas" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{ $row->guru_bk }}" name="guru_bk" placeholder="Guru BK" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="text" value="{{ $row->wali_kelas }}" name="wali_kelas" placeholder="Wali Kelas" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                                            </div>
                                            <button type="submit" class="btn-tambah">Update Data</button> <button class="btn-back"><a href="{{ url('kelasadmin') }}" style="color: #fff;">Kembali</a></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div style="padding-bottom: 20vw;">
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="{{ asset('/assets-admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
            <!-- bootstap bundle js -->
            <script src="{{ asset('/assets-admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
            <!-- slimscroll js -->
            <script src="{{ asset('/assets-admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
            <!-- main js -->
            <script src="{{ asset('/assets-admin/libs/js/main-js.js') }}"></script>
            <!-- chart chartist js -->
            <script src="{{ asset('/assets-admin/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
            <!-- sparkline js -->
            <script src="{{ asset('/assets-admin/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
            <!-- morris js -->
            <script src="{{ asset('/assets-admin/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
            <script src="{{ asset('/assets-admin/vendor/charts/morris-bundle/morris.js') }}"></script>
            <!-- chart c3 js -->
            <script src="{{ asset('/assets-admin/vendor/charts/c3charts/c3.min.js') }}"></script>
            <script src="{{ asset('/assets-admin/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
            <script src="{{ asset('/assets-admin/vendor/charts/c3charts/C3chartjs.js') }}"></script>
            <script src="{{ asset('/assets-admin/libs/js/dashboard-ecommerce.js') }}"></script>
</body>

</html>