<?php

session_start();
error_reporting(0);
include 'produk.php';
if(isset($_GET['beli']) && is_numeric($_GET['beli'])){
    if(isset($_SESSION['chart'][$_GET['beli']])){
        $_SESSION['chart'][$_GET['beli']] ++;
    }else{
        $_SESSION['chart'][$_GET['beli']] = 1;
    }
}
else if(isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])){
    if(isset($_SESSION['chart'][$_GET['kurangi']])){
        $_SESSION['chart'][$_GET['kurangi']] --;
    }
}
else if(isset($_GET['hapus']) && is_numeric($_GET['hapus'])){
    if(isset($_SESSION['chart'][$_GET['hapus']])){
        unset($_SESSION['chart'][$_GET['hapus']]);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../img/carousel/G.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keranjang Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <style>
        .cek{
            text-decoration: none;
        }
    </style>
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 bg-body-tertiary p-5">
                <h3 class="text-center">Daftar Belanja</h3>
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $jumlah = 0;
                        foreach($_SESSION['chart'] as $key => $value){
                            ?>
                            <tr>
                                <td><?= $produk[$key]['namaProduk']; ?></td>
                                <td><?= $value; ?></td>
                                <td>Rp<?= number_format($produk[$key]['harga']); ?></td>
                                <td>Rp<?= number_format($produk[$key]['harga']*$value); ?></td>
                                <td>
                                    <a href="?kurangi=<?= $key; ?>" data-toggle="tooltip" title="kurangi" class="cek">&#9940;</a> &nbsp;
                                    <a href="?hapus=<?= $key; ?>" class="cek" data-toggle="tooltip" title="hapus">&#10060;</a>
                                </td>
                            </tr>
                            <?php
                            $jumlah = $jumlah + $produk[$key]['harga']*$value;
                        }
                        ?>
                        <tr>
                            <td colspan = "3">Total Keseluruhan</td>
                            <td colspan = "2"><b>Rp<?= number_format($jumlah); ?></b></td>
                        </tr>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-warning">Pilih Barang Lagi</a>
            </div>

            <div class="col-md-6 bg-body-secondary p-5">
                <h3 class="text-center">Data Diri</h3>
                <form method="post" action="checkout.php" class="mt-4">
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" aria-describedby="emailHelp" name="nama" required placeholder="Isikan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Isikan Alamat Email Kamu">
                    </div>
                    <div class="mb-3">
                        <label for="noHp" class="form-label">No Hp</label>
                        <input type="text" class="form-control" id="noHp" name="noHp" required placeholder="Masukan No Hp Yang bisa dihubungi">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Cantumkan Alamat Lengkap Yang bisa di akses">
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" required placeholder="Isikan Asal Kota">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required placeholder="Isikan Provinsi Anda">
                    </div>
                    <div class="mb-3">
                        <label for="kurir" class="form-label">Pilih Kurir</label><br>
                        <select class="form-select" id="kurir" name="kurir" aria-label="Default select example">
                            <option value="JNE">JNE</option>
                            <option value="SiCepat">SiCepat</option>
                            <option value="JNT Express">JNT Express</option>`
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Info Tambahan</label><br>
                        <textarea name="info" id="info" rows="2" cols="40"></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning">Checkout</button>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright text-center text-light p-3" style="background-color: #3F3F3F;">
        <b>Developed by Gayuh Widynata Copyright <i class="far fa-copyright"></i> 2023</b>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
