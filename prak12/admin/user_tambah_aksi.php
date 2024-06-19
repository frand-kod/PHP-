<?php

include("config.php");

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['namalengkap'];
$email = $_POST['email'];

// koneksi ke db

$query="insert into user (user_name, user_password, user_namalengkap,user_email) values ('$user','$pass','$nama','$email');";

$hasil = mysqli_query($conn, $query);

if(!$hasil){
    echo "gagal tertambah";
}else{
    echo"<span><p>berhasil menambahkan data $user</p></span>";
}
?>

<br>kembali ke <a href="user_tambah.php">halaman input</a></br>
<br>lanjut ke <a href="halaman_user.php">halaman tampil</a></br>