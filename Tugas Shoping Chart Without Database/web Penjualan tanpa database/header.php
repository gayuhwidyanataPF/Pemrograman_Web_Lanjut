<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/carousel/G.png">
    <title>Electro Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .list-group{
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
        .link-list{
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-light-subtle">

  <?php include 'navbar.php'; ?>

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="background-color: #EAAA05;">
            <ul class="list-group list-group-flush pt-2">
                <li class="list-group-item bg-dark text-white"><i class="fas fa-list"></i> KATEGORI PRODUK</li>
                <a href="index.php" class="link-list"><li class="list-group-item"><i class="fas fa-angle-right"></i> Peralatan Elektronik</li></a>
                <a href="pakaian.php" class="link-list"><li class="list-group-item"><i class="fas fa-angle-right"></i> Pakaian</li></a>
                <a href="olahraga.php" class="link-list"><li class="list-group-item"><i class="fas fa-angle-right"></i> Olahraga</li></a>
            </ul>
        </div>
        <div class="col-md-10">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/carousel/slide1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/carousel/slide2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/carousel/slide3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>