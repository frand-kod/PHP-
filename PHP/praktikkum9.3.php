<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//variabel dengan banyak tipe
$nim ="21.11.4443";
$nama ="Frand Odi Anggoro";
$umur = 24;
$nilai = 92.0;
$status = 1;

//tampil data
echo"NIM : ".$nim;
echo"<br> Nama : ".$nama;
echo"<br> Umur : ".$umur;
print("<br> Nilai : ".$nilai);

print("<br>");
if ($status == true) {
    echo "status : aktif";
}else {
    echo "status tidak aktif";
}  


?>
    
</body>
</html>