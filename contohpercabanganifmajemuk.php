<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>

<body>
    <?php
    $nilai = 60;
    if (($nilai >= 0) &&($nilai < 50))
         {$Grade= E;}
    elseif (($nilai >= 50)&&($nilai < 60))
        {$Grade= D;}
    elseif (($nilai >= 60)&&($nilai < 70))
        {$Grade= C;}
    elseif (($nilai >= 75)&&($nilai < 85))
        {$Grade= B;}
    elseif (($nilai >= 85)&&($nilai < 100))
        {$Grade= B;}
    else
        {$Grade= "Nilai diluar jangkauan";}
    echo "Nilai Anda : $nilai, dikonversi menjadi $Grade";
    ?>
</body>

</html>