<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>TimKop</title>

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <div id="wrapper">
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <div class="sidebar-brand-icon rotate-n-15">
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
                    <a class="nav-link" href="indexkopi.php">
                        <i class="fas fa-fw fa-mug-hot"></i>
                        <span>Coffee</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="indexdessert.php">
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

                <hr class="sidebar-divider d-none d-md-block" />

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                <div class="sidebar-card d-none d-lg-flex">


                </div>
            </ul>

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
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
                    </div>
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>
    </body>
</php>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Customers Table</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Customer</th>
                            <th>Nama Customer</th>
                            <th>Pesanan</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $hasil = $con->query("SELECT * FROM tpesan");
                    ?>
                    <?php
                    while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['idCuss']; ?></td>
                            <td><?= $row['namaCuss']; ?></td>
                            <td>
                                <?php
                                $pesanan = explode(',', $row['pesanan']); // Mengubah string pesanan menjadi array
                                foreach ($pesanan as $item) {
                                    echo $item . '<br>'; // Menampilkan setiap pesanan pada baris baru
                                }
                                ?>
                            </td>
                            <td><?= $row['harga']; ?></td>
                            <td>
                                <a href="editpesan.php?edit=<?= $row['idCuss']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['idCuss']; ?>">
                                    Delete
                                </button>
                            </td>

                        </tr>

                        <div class="modal fade" id="hapusModal<?= $row['idCuss']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>

                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="koneksi.php?idCuss=<?= $row['idCuss']; ?>" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/chart.js/Chart.min.js"></script>

    <script src="js/demo/chart-area-demo.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/c33df6e9ff.js" crossorigin="anonymous"></script>

    </body>

    </html>