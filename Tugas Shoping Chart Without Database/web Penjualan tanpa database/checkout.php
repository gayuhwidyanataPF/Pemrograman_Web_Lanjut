<?php
session_start();
error_reporting(0);
include 'produk.php';

if(isset($_POST['page']) && isset($_POST['nama']) && isset($_POST['alamat']) && $_POST['page'] == 'preview'){
    $pesan = '
    Saya Pesan :
    [daftarbelanja]

    Kirimkan Kepada
    Nama : '.$_POST['nama'].'
    Email : '.$_POST['email'].'
    No Hp : '.$_POST['noHp'].'
    Alamat : '.$_POST['alamat'].'
    Kota : '.$_POST['kota'].'
    Provinsi : '.$_POST['provinsi'].'
    Kurir : '.$_POST['kurir'].'
    Info : '.$_POST['info'].'

    Terima kasih
    ';
    $belanja = '';
    foreach($_SESSION['chart'] as $key => $value){
        $belanja .= '
        - '.$produk[$key]['namaProduk'].' sebanyak: '.$value;
        $jumlah = $jumlah + ($produk[$key]['harga'] * $value);
    }
    $belanja .= '
    TOTAL: '.number_format($jumlah);

    $pesan = str_replace('[daftarbelanja]', $belanja, $pesan);
    $url = 'https://wa.me/6285723783739?text='.rawurlencode($pesan);
    unset($_SESSION['chart']);
    header('Location:'.$url);
}

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="../img/carousel/G.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body class="bg-body-secondary">

  <?php include 'navbar.php'; ?>
  
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-6 p-5 pt-3">
            <h3 class="text-center">Daftar Belanja</h3>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $jumlah = 0;
                    foreach($_SESSION['chart'] as $key => $value){?>
                        <tr>
                            <td><?= $produk[$key]['namaProduk']; ?></td>
                            <td><?= $value; ?></td>
                            <td>Rp <?= number_format($produk[$key]['harga']); ?></td>
                            <td>Rp <?= number_format($produk[$key]['harga']*$value); ?></td>
                        </tr>
                        <?php $jumlah = $jumlah + $produk[$key]['harga']*$value; } ?>
                        <tr>
                            <td colspan = "3"><b>Total Keseluruhan</b></td>
                            <td><b>Rp <?= number_format($jumlah); ?></b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 p-5 pt-3">
                <h3 class="text-center">Pengiriman Ditujukan</h3>
                <table class="table mt-4">
                    <tr>
                        <td><b>Nama</b></td>
                        <td><?= $_POST['nama']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><?= $_POST['email']; ?></td>
                    </tr>
                    <tr>
                        <td><b>No Handphone</b></td>
                        <td><?= $_POST['noHp']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td><?= $_POST['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Kota</b></td>
                        <td><?= $_POST['kota']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Provinsi</b></td>
                        <td><?= $_POST['provinsi']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Kurir</b></td>
                        <td><?= $_POST['kurir']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Info Tambahan</b></td>
                        <td><?= $_POST['info']; ?></td>
                    </tr>
                </table>

                <form action="" method="post">
                    <input type="hidden" name="nama" value="<?= $_POST['nama']; ?>">
                    <input type="hidden" name="email" value="<?= $_POST['email']; ?>">
                    <input type="hidden" name="noHp" value="<?= $_POST['noHp']; ?>">
                    <input type="hidden" name="alamat" value="<?= $_POST['alamat']; ?>">
                    <input type="hidden" name="kota" value="<?= $_POST['kota']; ?>">
                    <input type="hidden" name="provinsi" value="<?= $_POST['provinsi']; ?>">
                    <input type="hidden" name="kurir" value="<?= $_POST['kurir']; ?>">
                    <input type="hidden" name="info" value="<?= $_POST['info']; ?>">
                    <input type="hidden" name="page" value="preview">
                    <input type="submit" value="Order Sekarang" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>

    <div class="copyright text-center text-light p-3 fixed-bottom" style="background-color: #3F3F3F;">
        <b>Developed by Gayuh Widynata Copyright <i class="far fa-copyright"></i> 2023</b>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>