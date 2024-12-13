<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    define('Judul', 'Hitung Luas/Keliling Persegi Panjang');

    $panjang = 2;
    $lebar = 2;
    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar)
    ?>

    <pre>
        <?= Judul ?> <br>
        Panjang                       = <?= $panjang ?> <br>
        Lebar                         = <?= $lebar ?> <br>
        Luas Persegi Panjang          = <?= $luas ?> <br>
        Keliling Persegi Panjang      = <?= $keliling ?>  
    </pre>
</body>

</html>
