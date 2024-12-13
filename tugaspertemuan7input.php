<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7 Input</title>
</head>
<body>
    <form action="tugaspertemuan7output.php" method="POST">
        <table>
            <tr>
                <td>Nilai 1</td>
                <td><input type="number" name="nilai1" id="nilai1" required></td>
            </tr>
            <tr>
                <td>Nilai 2</td>
                <td><input type="number" name="nilai2" id="nilai2" required></td>
            </tr>
        </table>
        <tr>
            <td>
                <input type="radio" name="bentuk" value="Persegi Panjang">
                <label for="bentuk">Persegi Panjang</label>
                <input type="radio" name="bentuk" value="Segitiga">
                <label for="bentuk">Segitiga</label>
            </td>
        </tr>
        <br>
        <input type="submit" value="Hitung">
        <input type="reset" value="Cancel">
    </form>
</body>
</html>