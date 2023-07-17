<!DOCTYPE html>
<html lang="en">

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

                <div class="sidebar-brand-text mx-3">HALAMAN ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">MENU</div>

            <li class="nav-item">
                <a class="nav-link" href="indexkopi.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Coffee</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="indexdessert.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dessert</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider" />
            <div class="sidebar-heading">ORDER</div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="tambahCuss.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Enter order</span></a>
            </li>
            <hr class="sidebar-divider" />
            <div class="sidebar-heading">TABLE</div>
            <!-- Nav Item - menu -->
            <li class="nav-item">
                <a class="nav-link" href="menu.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Customers Table</span></a>
            </li>

            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">REGISTER</div>

            <li class="nav-item">
                <a class="nav-link" href="register.php">
                    <i class="fas fa-fw fa-table"></i>
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
                        <h1 class="h3 mb-0 text-gray-800">Edit Order</h1>
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
</body>

</html>


<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <div class="card shadow mb-4">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <?php
                                include 'koneksi.php';
                                $panggil = $con->query("SELECT * FROM tpesan where idCuss='$_GET[edit]'");
                                ?>
                                <?php
                                while ($row = $panggil->fetch_assoc()) {
                                ?>
                                    <form action="menu.php" method="POST">
                                        <div class="form-group">
                                            <label for="idCuss">ID Customer</label>
                                            <input type="text" class="form-control mb-3" name="idCuss" value="<?= $row['idCuss'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="namaCuss">Nama Customer</label>
                                            <input type="text" class="form-control mb-3" name="namaCuss" value="<?= $row['namaCuss'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="pesanan">Pesanan</label>
                                            <h5>Coffee</h5>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Affogato" <?php if (isset($row['pesanan']) && in_array("Affogato", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxAffogato">Affogato</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Americano" <?php if (isset($row['pesanan']) && in_array("Americano", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxAmericano">Americano</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Cappuccino" <?php if (isset($row['pesanan']) && in_array("Cappuccino", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxCappuccino">Cappuccino</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Espresso" <?php if (isset($row['pesanan']) && in_array("Espresso", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxEspresso">Espresso</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Frappuccino" <?php if (isset($row['pesanan']) && in_array("Frappuccino", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxFrappuccino">Frappuccino</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Irish Coffee" <?php if (isset($row['pesanan']) && in_array("Irish Coffee", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxIrishCoffee">Irish Coffee</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Latte" <?php if (isset($row['pesanan']) && in_array("Latte", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxLatte">Latte</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Dalgona Coffee" <?php if (isset($row['pesanan']) && in_array("Dalgona Coffee", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxDalgonaCoffee">Dalgona Coffee</label>
                                            </div>
                                            <br>
                                            <h5>Dessert</h5>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Banana Bread" <?php if (isset($row['pesanan']) && in_array("Banana Bread", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxBananaBread">Banana Bread</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Brownie" <?php if (isset($row['pesanan']) && in_array("Brownie", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxBrownie">Brownie</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Chocolate Chip Cookie" <?php if (isset($row['pesanan']) && in_array("Chocolate Chip Cookie", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxChocolateChipCookie">Chocolate Chip Cookie</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Croissant" <?php if (isset($row['pesanan']) && in_array("Croissant", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxCroissant">Croissant</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Doughnut" <?php if (isset($row['pesanan']) && in_array("Doughnut", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxDoughnut">Doughnut</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Muffin" <?php if (isset($row['pesanan']) && in_array("Muffin", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxMuffin">Muffin</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Tiramisu" <?php if (isset($row['pesanan']) && in_array("Tiramisu", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxTiramisu">Tiramisu</label>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="pesanan[]" value="Scone" <?php if (isset($row['pesanan']) && in_array("Scone", explode(", ", $row['pesanan']))) echo "checked"; ?>>
                                                <label class="form-check-label" for="checkboxScone">Scone</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            $hargaAffogato = 10;
                                            $hargaAmericano = 12;
                                            $hargaCappuccino = 8;
                                            $hargaEspresso = 9;
                                            $hargaFrappuccino = 11;
                                            $hargaIrishCoffee = 13;
                                            $hargaLatte = 9;
                                            $hargaDalgonaCoffee = 10;
                                            $hargaBananaBread = 5;
                                            $hargaBrownie = 7;
                                            $hargaChocolateChipCookie = 6;
                                            $hargaCroissant = 4;
                                            $hargaDoughnut = 3;
                                            $hargaMuffin = 5;
                                            $hargaTiramisu = 8;
                                            $hargaScone = 7; // Tambahkan definisi variabel hargaScone
                                            ?>

                                        </div>
                                        <button type="submit" class="btn btn-info btn-block" name="edit">Simpan</button>
                                    </form>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>