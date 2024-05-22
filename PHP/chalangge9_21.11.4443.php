<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Chalangge 9</title>
</head>

<body>

    <div class="container">

        <form action="kalkulator.php" method="post">
            <table>
                <tr>
                    <td>Masukkan nama anda : </td>
                    <td><input type="text" name="nama"><br></td>
                </tr>
                <tr>
                    <td>masukkan Angka pertama :</td>
                    <td><input type="number" name="angka1"><br></td>
                </tr>
                <tr>
                    <td>masukkan angka kedua : </td>
                    <td><input type="number" name="angka2"><br></td>
                </tr>
            </table>
            <input type="submit" name="hitung" value="hitung">
        </form>
    </div>
</body>

</html>