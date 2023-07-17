<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gradient-info">
    <div class="container">

        <section class="container-fluid mb-4">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-6">
                        <div class="card-body p-0">
                            <div class="p-4">
                                <?php
                                require('koneksi.php');
                                session_start();

                                $error = '';
                                $validate = '';
                                if (isset($_SESSION['user'])) header('Location: index.php');
                                if (isset($_POST['submit'])) {

                                    $username = stripslashes($_POST['username']);
                                    $username = mysqli_real_escape_string($con, $username);
                                    $name     = stripslashes($_POST['name']);
                                    $name     = mysqli_real_escape_string($con, $name);
                                    $email    = stripslashes($_POST['email']);
                                    $email    = mysqli_real_escape_string($con, $email);
                                    $password = stripslashes($_POST['password']);
                                    $password = mysqli_real_escape_string($con, $password);
                                    $repass   = stripslashes($_POST['repassword']);
                                    $repass   = mysqli_real_escape_string($con, $repass);
                                    $level    = $_POST['level'];

                                    if (!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))) {
                                        if ($password == $repass) {
                                            if (cek_name($name, $con) == 0) {
                                                $pass  = password_hash($password, PASSWORD_DEFAULT);
                                                $query = "INSERT INTO users (username,name,email, password, level) VALUES ('$username','$name','$email','$pass', '$level')";
                                                $result   = mysqli_query($con, $query);
                                                if ($result) {
                                                    $_SESSION['username'] = $username;

                                                    header('Location: logout.php');
                                                } else {
                                                    $error =  'Register User Gagal !!';
                                                }
                                            } else {
                                                $error =  'Username sudah terdaftar !!';
                                            }
                                        } else {
                                            $validate = 'Password tidak sama !!';
                                        }
                                    } else {
                                        $error =  'Data tidak boleh kosong !!';
                                    }
                                }

                                function cek_name($username, $con)
                                {
                                    $name = mysqli_real_escape_string($con, $username);
                                    $query = "SELECT * FROM users WHERE username = '$name'";
                                    if ($result = mysqli_query($con, $query)) return mysqli_num_rows($result);
                                }
                                ?>

                                <form class="form-container" action="register.php" method="POST">
                                    <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                                    <?php if ($error != '') { ?>
                                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                                    <?php } ?>

                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan name">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Alamat Email</label>
                                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan email">
                                    </div>

                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select class="form-control" id="level" name="level">
                                            <option value="admin">Admin</option>
                                            <option value="pelanggan">Pelanggan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputPassword">Password</label>
                                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                                        <?php if ($validate != '') { ?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php } ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputPassword">Re-Password</label>
                                        <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Re-Password">
                                        <?php if ($validate != '') { ?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php } ?>
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-secondary btn-block">Register</button>
                                    <div class="form-footer mt-2">
                                        <p> Sudah punya account? <a href="logout.php" style="color: Navy;">Login</a></p>
                                    </div>
                                </form>
                </section>
            </section>
        </section>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>