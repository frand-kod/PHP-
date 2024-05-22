<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="praktikkum9.8.php" method="post">
    Nama Anda = <input type="text" name="nama"> <br>
    Email Anda = <input type="text" name="email"><br>
    Alamat Anda = <textarea name="alamat" id=""></textarea><br>

    <input type="submit" name="kirim" value="sent">
    </form>

    <?php

    if (isset($_POST ['kirim'])) {
        echo "Nama Anda : $_POST[nama]<br>";
        echo "Email Anda : $_POST[email]<br>";
        echo "Alamat Anda : $_POST[alamat]<br>";
        }
    ?>
</body>
</html>