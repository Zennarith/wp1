<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 7 Output</title>
</head>

<body>
    <?php
    $nilai1 = $_POST['nilai1']; 
    $nilai2 = $_POST['nilai2'];
    $bentuk = $_POST['bentuk'];

    if (($nilai1 == 0) && ($nilai2 == 0)) {
        echo "Tidak ada hasil perhitungan";
    } else {
        if ($bentuk == "Segitiga") {
            $hasilrumus = 0.5 * $nilai1 * $nilai2;
            $namarumus = "Segitiga";
        } elseif ($bentuk == "Persegi Panjang") {
            $hasilrumus = 2 * ($nilai1 + $nilai2);
            $namarumus = "Persegi Panjang";
        }
    }
    ?>
    Nilai 1 adalah : <?= $nilai1 ?> <br>
    Nilai 2 adalah : <?= $nilai2 ?> <br>
    Rumus yang dipilih adalah : <?= $namarumus ?> <br>
    Hasil Perhitungan : <?= $hasilrumus ?> <br>
</body>
</html>