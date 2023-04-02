<?php
session_start();
error_reporting(0);
include 'produk.php';
?>

<?php include 'header.php'; ?>

<div class="row">
    <h3 class="text-center p-4">Produk Kami Kategori Pakaian</h3>
    <?php foreach($produk as $key => $produkItem){?>
        <?php if($produkItem['kategori'] == 'pakaian'): ?>
            <div class="card" style="width: 16rem; margin: 10px 10px;">
                <img src="../img/pakaian/<?= $produkItem['gambar']; ?>" class="card-img-top" alt="..." width="100px">
                <div class="card-body">
                    <h5 class="card-title"><?= $produkItem['namaProduk']; ?></h5>
                    <p class="card-text"><?= $produkItem['deskripsi']; ?></p>
                    <p class="card-text"><?= $produkItem['rating']; ?></p>
                    <a class="btn btn-warning">Rp <?= number_format($produkItem['harga']); ?></a>
                    <a href="addCart.php?beli=<?= $key; ?>" class="btn btn-primary">Buy</a>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
