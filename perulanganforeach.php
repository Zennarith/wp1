<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    Menggunakan Foreach <br>
    <?php
    $warna = array("Merah", "Biru", "Kuning", "Hijau");
    foreach ($warna as $nilai) {
        echo $nilai . "<br>";
    }
    ?>
</body>

</html>