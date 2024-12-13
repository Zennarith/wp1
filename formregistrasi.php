<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
</head>

<body>
    <h2><b>Form Registrasi</b></h2>
    <hr>
    Isi Data Dibawah Ini :
    <form action="dataregistrasi.php" method="post">
        <table>
            <tr>
                <td>Masukkan Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Masukkan Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">
                    <label for="jenis_kelamin">Laki-Laki</label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    <label for="jenis_kelamin">Perempuan</label>
                </td>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <select name="pendidikan">
                        <option value="s2">S2</option>
                        <option value="s1">S1</option>
                        <option value="sma">SMA</option>
                        <option value="smp">SMP</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Submit">
    </form>

</body>

</html>