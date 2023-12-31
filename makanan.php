<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>TimKop</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <!-- <i class="fas fa-laugh-wink"></i> -->
                    </div>

                    <div class="sidebar-brand-text mx-1">HALAMAN ADMIN</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0" />

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-gauge-high"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider" />

                <!-- Heading -->
                <div class="sidebar-heading">MENU</div>

                <li class="nav-item">
                    <a class="nav-link" href="kopi.php">
                        <i class="fas fa-fw fa-mug-hot"></i>
                        <span>Coffee</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="makanan.php">
                        <i class="fas fa-fw fa-cake-candles"></i>
                        <span>Dessert</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider" />
                <div class="sidebar-heading">ORDER</div>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="tambahCuss.php">
                        <i class="fas fa-fw fa-computer-mouse"></i>
                        <span>Enter order</span></a>
                </li>
                <hr class="sidebar-divider" />
                <div class="sidebar-heading">TABLE</div>
                <!-- Nav Item - menu -->
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">
                        <i class="fas fa-fw fa-table-list"></i>
                        <span>Customers Table</span></a>
                </li>
                </li>
                <hr class="sidebar-divider" />

                <div class="sidebar-heading">REGISTER</div>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">
                        <i class="fas fa-fw fa-right-to-bracket"></i>
                        <span>Admin or Customer</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block" />

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <!-- Sidebar Message -->
                <div class="sidebar-card d-none d-lg-flex">


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


                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                            <div class="input-group-append">
                                                <button class="btn btn-info" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">LogOut</a>
                                </li>
                            </ul>

                        </ul>
                    </nav>

                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">dessert</h1>

                        </div>


                        <a class="scroll-to-top rounded" href="#page-top">
                            <i class="fas fa-angle-up"></i>
                        </a>


                        <!-- Bootstrap core JavaScript-->
                        <script src="vendor/jquery/jquery.min.js"></script>
                        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                        <!-- Core plugin JavaScript-->
                        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                        <!-- Custom scripts for all pages-->
                        <script src="js/sb-admin-2.min.js"></script>

                        <!-- Page level plugins -->
                        <script src="vendor/chart.js/Chart.min.js"></script>

                        <!-- Page level custom scripts -->
                        <script src="js/demo/chart-area-demo.js"></script>
                        <script src="js/demo/chart-pie-demo.js"></script>
                        <script src="https://kit.fontawesome.com/c33df6e9ff.js" crossorigin="anonymous"></script>

    </body>

</php>