<?php
if($_POST['hitung']){   
    // mengambil hasil dari form
    $nama = $_POST['nama'];
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    
    //operasi aritmatika
    
    $tambah = $angka1 + $angka2;
    $kurang = $angka1 - $angka2;
    $kali = $angka1 * $angka2;
    $bagi = $angka1 / $angka2;
    $modus = $angka1 % $angka2;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Hasil</title>
</head>
<body>
    <div class="container">
    <div class="item">
     <?php
      echo " <h2>Perhitungan Aritmatika </h2>"; 
     ?>
</div>
<div class="item">
    <?php
       echo "Nama : $nama <br><br>";
       echo "$angka1 + $angka2 = $tambah <br>";
        echo "$angka1 - $angka2 = $kurang <br>";
        echo "$angka1 * $angka2 = $kali <br>";
        echo "$angka1 / $angka2 = $bagi <br>";
        echo "$angka1 % $angka2 = $modus <br>";
    ?>
    </div>

</div>
</body>
</html>

