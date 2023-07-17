<?php
$host     = 'localhost';
$user     = 'root';
$password = '';
$db       = 'kopishop';

$con = mysqli_connect($host, $user, $password, $db,) or die(mysqli_error($con));

if (isset($_POST['simpan'])) {
    // Mengambil nilai dari form
    $idCuss = $_POST['idCuss'];
    $namaCuss = $_POST['namaCuss'];
    $pesanan = $_POST['pesanan'];

    // Mengubah array pesanan menjadi string dengan pemisah koma
    $pesananStr = implode(", ", $pesanan);

    // Mendapatkan harga untuk setiap pesanan
    $hargaAffogato = 15000;
    $hargaAmericano = 25000;
    $hargaCappuccino = 12000;
    $hargaEspresso = 20000;
    $hargaFrappuccino = 18000;
    $hargaIrishCoffee = 27000;
    $hargaLatte = 15000;
    $hargaDalgonaCoffee = 13000;
    $hargaBananaBread = 10000;
    $hargaBrownie = 12000;
    $hargaChocolateChipCookie = 8000;
    $hargaCroissant = 7000;
    $hargaDoughnut = 5000;
    $hargaMuffin = 5000;
    $hargaTiramisu = 8000;
    $hargaScone = 20000;

    // Menghitung harga harga
    $harga = 0;
    foreach ($pesanan as $item) {
        switch ($item) {
            case 'Affogato':
                $harga += $hargaAffogato;
                break;
            case 'Americano':
                $harga += $hargaAmericano;
                break;
            case 'Cappuccino':
                $harga += $hargaCappuccino;
                break;
            case 'Espresso':
                $harga += $hargaEspresso;
                break;
            case 'Frappuccino':
                $harga += $hargaFrappuccino;
                break;
            case 'Irish Coffee':
                $harga += $hargaIrishCoffee;
                break;
            case 'Latte':
                $harga += $hargaLatte;
                break;
            case 'Dalgona Coffee':
                $harga += $hargaDalgonaCoffee;
                break;
            case 'Banana Bread':
                $harga += $hargaBananaBread;
                break;
            case 'Brownie':
                $harga += $hargaBrownie;
                break;
            case 'Chocolate Chip Cookie':
                $harga += $hargaChocolateChipCookie;
                break;
            case 'Croissant':
                $harga += $hargaCroissant;
                break;
            case 'Doughnut':
                $harga += $hargaDoughnut;
                break;
            case 'Muffin':
                $harga += $hargaMuffin;
                break;
            case 'Tiramisu':
                $harga += $hargaTiramisu;
                break;
            case 'Scone':
                $harga += $hargaScone;
                break;
                // Tambahkan case untuk pesanan lainnya dengan pola yang sama
                // ...
        }
    }

    // Menyimpan data ke dalam tabel tpesan
    $sql = "INSERT INTO tpesan (idCuss, namaCuss, pesanan, harga) VALUES ('$idCuss', '$namaCuss', '$pesananStr', $harga)";

    if ($con->query($sql) === TRUE) {
        echo "Data pesanan berhasil disimpan.";
        header('location:menu.php');
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
if (isset($_GET['idCuss'])) {
    $idCuss = $_GET['idCuss'];
    $con->query("DELETE FROM tpesan where idCuss = '$idCuss'");
    header('location:menu.php');
}

if (isset($_POST['edit'])) {
    // Ambil data dari form jika ada
    $idCuss = isset($_POST['idCuss']) ? $_POST['idCuss'] : "";
    $namaCuss = isset($_POST['namaCuss']) ? $_POST['namaCuss'] : "";
    $pesanan = isset($_POST['pesanan']) ? implode(', ', $_POST['pesanan']) : "";
    $hargaAffogato = 15000;
    $hargaAmericano = 25000;
    $hargaCappuccino = 12000;
    $hargaEspresso = 20000;
    $hargaFrappuccino = 18000;
    $hargaIrishCoffee = 27000;
    $hargaLatte = 15000;
    $hargaDalgonaCoffee = 13000;
    $hargaBananaBread = 10000;
    $hargaBrownie = 12000;
    $hargaChocolateChipCookie = 8000;
    $hargaCroissant = 7000;
    $hargaDoughnut = 5000;
    $hargaMuffin = 5000;
    $hargaTiramisu = 8000;
    $hargaScone = 20000;
    // Menghitung total harga
    $harga = 0;
    foreach ($_POST['pesanan'] as $item) {
        switch ($item) {
            case 'Affogato':
                $harga += $hargaAffogato;
                break;
            case 'Americano':
                $harga += $hargaAmericano;
                break;
            case 'Cappuccino':
                $harga += $hargaCappuccino;
                break;
            case 'Espresso':
                $harga += $hargaEspresso;
                break;
            case 'Frappuccino':
                $harga += $hargaFrappuccino;
                break;
            case 'Irish Coffee':
                $harga += $hargaIrishCoffee;
                break;
            case 'Latte':
                $harga += $hargaLatte;
                break;
            case 'Dalgona Coffee':
                $harga += $hargaDalgonaCoffee;
                break;
            case 'Banana Bread':
                $harga += $hargaBananaBread;
                break;
            case 'Brownie':
                $harga += $hargaBrownie;
                break;
            case 'Chocolate Chip Cookie':
                $harga += $hargaChocolateChipCookie;
                break;
            case 'Croissant':
                $harga += $hargaCroissant;
                break;
            case 'Doughnut':
                $harga += $hargaDoughnut;
                break;
            case 'Muffin':
                $harga += $hargaMuffin;
                break;
            case 'Tiramisu':
                $harga += $hargaTiramisu;
                break;
            case 'Scone':
                $harga += $hargaScone;
                break;
                // Tambahkan case untuk pesanan lainnya dengan pola yang sama
                // ...
        }
    }

    // Query untuk update data jika data valid
    if (!empty($idCuss) && !empty($namaCuss) && !empty($pesanan) && !empty($harga)) {
        $updateQuery = "UPDATE tpesan SET namaCuss='$namaCuss', pesanan='$pesanan', harga=$harga WHERE idCuss='$idCuss'";

        // Eksekusi query jika query tidak kosong
        if (!empty($updateQuery)) {
            $con->query($updateQuery);
        }
    }
}
