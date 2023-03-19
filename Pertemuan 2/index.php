<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menentukan Nilai</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <h1>Menentukan Nilai</h1>
        <form action="" method="post">
            <label for="">Masukan Nilai</label><br>
            <input type="text" name="inputNilai" class="inputNilai"><br>
            <button name="submit" class="btn" >Submit</button>
        </form>
        <p>
    <?php
//$nilai;

if (isset($_POST["submit"])) {
    $x = $_POST['inputNilai'];

    switch ($x) {
        case ($x >= 85 && $x <= 100):
            echo "Nilai Anda " . $x . " , (A) dengan kategori <b>ISTIMEWA.</b>";
            break;
        case ($x >= 80 && $x < 85):
            echo "Nilai Anda " . $x . " , (AB) dengan kategori <b>SANGAT BAIK.</b>";
            break;
        case ($x >= 70 && $x < 80):
            echo "Nilai Anda " . $x . " , (B) dengan kategori <b>BAIK.</b>";
            break;
        case ($x >= 65 && $x < 70):
            echo "Nilai Anda " . $x . " , (BC) dengan kategori <b>CUKUP BAIK.</b>";
            break;
        case ($x >= 60 && $x < 65):
            echo "Nilai Anda " . $x . " , (C) dengan kategori <b>CUKUP.</b>";
            break;
        case ($x >= 50 && $x < 60):
            echo "Nilai Anda " . $x . " , (D) dengan kategori <b>KURANG.</b>";
            break;
        case ($x < 50 && $x >= 0):
            echo "Nilai Anda " . $x . " , (E) dengan kategori <b>SANGAT KURANG.</b>";
            break;
        default:
            echo "<b>Nilai Anda Tidak Memenuhi</b>";
            break;
    }
    ?>
    <center>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr style="text-align: center;">
                <td>A</td>
                <td>AB</td>
                <td>B</td>
                <td>BC</td>
                <td>C</td>
                <td>D</td>
                <td>E</td>
            </tr>
            <tr style="text-align: center;">
                <td>85-100</td>
                <td>80-84</td>
                <td>70-79</td>
                <td>65-69</td>
                <td>60-64</td>
                <td>50-60</td>
                <td>0-49</td>
            </tr>
        </table>
    </center>
    <?php
}
?>
</p>
    </div>

</body>
</html>