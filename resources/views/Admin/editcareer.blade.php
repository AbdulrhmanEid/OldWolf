<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OldWolf - Edit Career</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">{{-- vendor/fontawesome-free/css/all.min.css --}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">{{-- css/sb-admin-2.min.css --}}

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{ asset('fronted/images/logo.jpeg') }}" alt=""class="img-fluid" alt=""
                        style="border-radius:5px ;">
                </div>
                <div class="sidebar-brand-text mx-3">OldWolf Area </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{ route('admin.login') }}">Login</a>
                        <a class="collapse-item" href="{{ route('admin.register') }}">Register</a>
                        <a class="collapse-item" href="{{ route('admin.addcareer') }}"> Careers</a>
                        <a class="collapse-item" href="{{ route('admin.addunit') }}"> Units</a>
                        <a class="collapse-item" href="{{ route('admin.data') }}"> Data</a>
                        <a class="collapse-item" href="{{ route('admin.subscription') }}"> Subscriptions</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle"
                                            src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Update Career Page</h1>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
                        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <style>
                            body {
                                color: #566787;
                                background: #f5f5f5;
                                font-family: 'Varela Round', sans-serif;
                                font-size: 13px;
                            }

                            .table-responsive {
                                margin: 30px 0;
                            }

                            .table-wrapper {
                                min-width: 1000px;
                                background: #fff;
                                padding: 20px 25px;
                                border-radius: 3px;
                                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                            }

                            .table-title {
                                padding-bottom: 15px;
                                background: #435d7d;
                                color: #fff;
                                padding: 16px 30px;
                                margin: -20px -25px 10px;
                                border-radius: 3px 3px 0 0;
                            }

                            .table-title h2 {
                                margin: 5px 0 0;
                                font-size: 24px;
                            }

                            .table-title .btn-group {
                                float: right;
                            }

                            .table-title .btn {
                                color: #fff;
                                float: right;
                                font-size: 13px;
                                border: none;
                                min-width: 50px;
                                border-radius: 2px;
                                border: none;
                                outline: none !important;
                                margin-left: 10px;
                            }

                            .table-title .btn i {
                                float: left;
                                font-size: 21px;
                                margin-right: 5px;
                            }

                            .table-title .btn span {
                                float: left;
                                margin-top: 2px;
                            }

                            table.table tr th,
                            table.table tr td {
                                border-color: #e9e9e9;
                                padding: 12px 15px;
                                vertical-align: middle;
                            }

                            table.table tr th:first-child {
                                width: 60px;
                            }

                            table.table tr th:last-child {
                                width: 100px;
                            }

                            table.table-striped tbody tr:nth-of-type(odd) {
                                background-color: #fcfcfc;
                            }

                            table.table-striped.table-hover tbody tr:hover {
                                background: #f5f5f5;
                            }

                            table.table th i {
                                font-size: 13px;
                                margin: 0 5px;
                                cursor: pointer;
                            }

                            table.table td:last-child i {
                                opacity: 0.9;
                                font-size: 22px;
                                margin: 0 5px;
                            }

                            table.table td a {
                                font-weight: bold;
                                color: #566787;
                                display: inline-block;
                                text-decoration: none;
                                outline: none !important;
                            }

                            table.table td a:hover {
                                color: #2196F3;
                            }

                            table.table td a.edit {
                                color: #FFC107;
                            }

                            table.table td a.delete {
                                color: #F44336;
                            }

                            table.table td i {
                                font-size: 19px;
                            }

                            table.table .avatar {
                                border-radius: 50%;
                                vertical-align: middle;
                                margin-right: 10px;
                            }

                            .pagination {
                                float: right;
                                margin: 0 0 5px;
                            }

                            .pagination li a {
                                border: none;
                                font-size: 13px;
                                min-width: 30px;
                                min-height: 30px;
                                color: #999;
                                margin: 0 2px;
                                line-height: 30px;
                                border-radius: 2px !important;
                                text-align: center;
                                padding: 0 6px;
                            }

                            .pagination li a:hover {
                                color: #666;
                            }

                            .pagination li.active a,
                            .pagination li.active a.page-link {
                                background: #03A9F4;
                            }

                            .pagination li.active a:hover {
                                background: #0397d6;
                            }

                            .pagination li.disabled i {
                                color: #ccc;
                            }

                            .pagination li i {
                                font-size: 16px;
                                padding-top: 6px
                            }

                            .hint-text {
                                float: left;
                                margin-top: 10px;
                                font-size: 13px;
                            }

                            /* Custom checkbox */
                            .custom-checkbox {
                                position: relative;
                            }

                            .custom-checkbox input[type="checkbox"] {
                                opacity: 0;
                                position: absolute;
                                margin: 5px 0 0 3px;
                                z-index: 9;
                            }

                            .custom-checkbox label:before {
                                width: 18px;
                                height: 18px;
                            }

                            .custom-checkbox label:before {
                                content: '';
                                margin-right: 10px;
                                display: inline-block;
                                vertical-align: text-top;
                                background: white;
                                border: 1px solid #bbb;
                                border-radius: 2px;
                                box-sizing: border-box;
                                z-index: 2;
                            }

                            .custom-checkbox input[type="checkbox"]:checked+label:after {
                                content: '';
                                position: absolute;
                                left: 6px;
                                top: 3px;
                                width: 6px;
                                height: 11px;
                                border: solid #000;
                                border-width: 0 3px 3px 0;
                                transform: inherit;
                                z-index: 3;
                                transform: rotateZ(45deg);
                            }

                            .custom-checkbox input[type="checkbox"]:checked+label:before {
                                border-color: #03A9F4;
                                background: #03A9F4;
                            }

                            .custom-checkbox input[type="checkbox"]:checked+label:after {
                                border-color: #fff;
                            }

                            .custom-checkbox input[type="checkbox"]:disabled+label:before {
                                color: #b8b8b8;
                                cursor: auto;
                                box-shadow: none;
                                background: #ddd;
                            }

                            /* Modal styles */
                            .modal .modal-dialog {
                                max-width: 400px;
                            }

                            .modal .modal-header,
                            .modal .modal-body,
                            .modal .modal-footer {
                                padding: 20px 30px;
                            }

                            .modal .modal-content {
                                border-radius: 3px;
                            }

                            .modal .modal-footer {
                                background: #ecf0f1;
                                border-radius: 0 0 3px 3px;
                            }

                            .modal .modal-title {
                                display: inline-block;
                            }

                            .modal .form-control {
                                border-radius: 2px;
                                box-shadow: none;
                                border-color: #dddddd;
                            }

                            .modal textarea.form-control {
                                resize: vertical;
                            }

                            .modal .btn {
                                border-radius: 2px;
                                min-width: 100px;
                            }

                            .modal form label {
                                font-weight: normal;
                            }
                        </style>
                        <script>
                            $(document).ready(function() {
                                // Activate tooltip
                                $('[data-toggle="tooltip"]').tooltip();

                                // Select/Deselect checkboxes
                                var checkbox = $('table tbody input[type="checkbox"]');
                                $("#selectAll").click(function() {
                                    if (this.checked) {
                                        checkbox.each(function() {
                                            this.checked = true;
                                        });
                                    } else {
                                        checkbox.each(function() {
                                            this.checked = false;
                                        });
                                    }
                                });
                                checkbox.click(function() {
                                    if (!this.checked) {
                                        $("#selectAll").prop("checked", false);
                                    }
                                });
                            });
                        </script>
                    </head>

                    <body> 

                        @if (session('message'))
                            <div class="alert alert-success text-center">
                                <h2>{{ session('message') }}</h2>
                            </div>
                        @endif
                        <div class="container">
                            <div class="table-responsive">
                                <div class="table-wrapper">
                                    <div class="table-title">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <h2>Manage <b>Careers</b></h2>
                                            </div>
                                            <div class="col-xs-6">

                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span class="custom-checkbox">
                                                        <input type="checkbox" id="selectAll">
                                                        <label for="selectAll"></label>
                                                    </span>
                                                </th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                                    <tr>
                                                        <td>
                                                            <span class="custom-checkbox">
                                                                <input type="checkbox" id="checkbox1"
                                                                    name="options[]" value="1">
                                                                <label for="checkbox1"></label>
                                                            </span>
                                                        </td>
                                                        <form action="{{ route('admin.updatecareer',$career->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <td>{{ $career->id }}</td>
                                                            <td><input type="text" name="name" value="{{ $career->name }}"></td>
                                                            <td><input type="text" name="location" value="{{ $career->location }}"></td>
                                                            <td><textarea type="text" name="description" value="">{{ $career->description }}</textarea></td>
                                                            <td>
                                                                <button type="submit" class="btn btn-success">Update</button>
                                                            </td>

                                                        </form>



                                                    </tr>






                                        </tbody>

                                    </table>
                                    <div class="clearfix">
                                        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a href="#">Previous</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item active"><a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Store Modal HTML -->
                        <div id="addEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {{-- sending Data to DB --}}
                                    <form action="{{ route('admin.storecareer') }}" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title">Add Career</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label> Job Name</label>
                                                <input type="text" class="form-control" required name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control" required name="location">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control" required name="description">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal"
                                                value="Cancel">
                                            <input type="submit" class="btn btn-success" value="Add">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Edit Modal HTML -->
                        <div id="editEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="">
                                        @csrf
                                        @method('put')
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Career</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" required value=""
                                                    name="name">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input type="text" class="form-control"  name="location">
                                            </div>
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea type="text" class="form-control"  name="description"></textarea>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal"
                                                value="Cancel">
                                            <input type="submit" class="btn btn-info" value="Save">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form>
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Employee</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete these Records?</p>
                                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" class="btn btn-default" data-dismiss="modal"
                                                value="Cancel">
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </body>

                    </html>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>{{--vendor/jquery-easing/jquery.easing.min.js  --}}

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>{{-- js/sb-admin-2.min.js --}}

</body>

</html>
