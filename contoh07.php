<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    //KONSTANTA UNTUK NILAI JUDUL
    define('Judul', 'Hitung Luas lingkaran');

    //KONSTANTA UNTUK NILAI JUDUL
    define('PHI', 3.14);

    $r = 10;
    $luas = PHI * $r * $r;
    ?>

    <pre>
        <?= Judul ?> <br>
        Jari-Jari      = <?= $r ?> <br>
        Luas Lingkaran = <?= $luas ?> 
    </pre>
</body>

</html>