<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNTY LNCR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <center>
        <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;">
            <tr>
                <th colspan="6">TOKO KELONTONG</th>
            </tr>
            <tr>
                <th>No Faktur</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
                <?php
                    $no_faktur = array("1", "2", "3");
                    $kode_Barang = array("A", "B", "C");
                    $nama_Barang = array("Sabun", "Odol", "Pasta");
                    $harga = array("5000", "6000", "10000");
                    $jumlah = array("4", "3");

                    function jumlah(int $a, int $b)
                    {
                        return $a * $b;
                    }
                    ?>
            <tr>
                <td rowspan="3"><?php echo $no_faktur[0] ?></td>
                <td><?php echo $kode_Barang[0] ?></td>
                <td><?php echo $nama_Barang[0] ?></td>
                <td><?php echo $harga[0] ?></td>
                <td><?php echo $jumlah[0] ?></td>
                <td>Rp <?php echo $c = jumlah($harga[0], $jumlah[0]) ?></td>
            </tr>
            <tr>
                <td><?php echo $kode_Barang[1] ?></td>
                <td><?php echo $nama_Barang[1] ?></td>
                <td><?php echo $harga[1] ?></td>
                <td><?php echo $jumlah[1] ?></td>
                <td>Rp <?php echo $d = jumlah($harga[1], $jumlah[1]) ?></td>
            </tr>
            <tr>
                <td><?php echo $kode_Barang[2] ?></td>
                <td><?php echo $nama_Barang[2] ?></td>
                <td><?php echo $harga[2] ?></td>
                <td><?php echo $jumlah[1] ?></td>
                <td>Rp <?php echo $e = jumlah($harga[2], $jumlah[1]) ?></td>
            </tr>
            <tr>
                <td rowspan="2"><?php echo $no_faktur[1] ?></td>
                <td><?php echo $kode_Barang[0] ?></td>
                <td><?php echo $nama_Barang[0] ?></td>
                <td><?php echo $harga[0] ?></td>
                <td><?php echo $jumlah[1] ?></td>
                <td>Rp <?php echo $f = jumlah($harga[0], $jumlah[1]) ?></td>
            </tr>
            <tr>
            <td>
                <?php echo $kode_Barang[1] ?></td>
                <td><?php echo $nama_Barang[1] ?></td>
                <td><?php echo $harga[1] ?></td>
                <td><?php echo $jumlah[0] ?></td>
                <td>Rp <?php echo $g = jumlah($harga[1], $jumlah[0]) ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    Total Keseluruhan
                </td>
                <td><b>Rp
                    <?php
                        $tot = $c + $d + $e + $f + $g;
                        echo $tot;
                        ?></b>
                </td>
            </tr>
            </center>
        </table>
    </div>

</body>
</html>