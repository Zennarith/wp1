<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>

<body>
    <table border="1" cellspacing="0">
        <tr bgcolor="yellow">
            <th colspan="2">Data Anda</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST["nama"] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST["alamat"] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $_POST["tempat_lahir"] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $_POST["tanggal_lahir"] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["jenis_kelamin"] ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td><?php echo $_POST["pendidikan"] ?></td>
        </tr>
    </table>
</body>

</html>