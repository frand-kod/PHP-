<?php
$host="localhost";
$user = "root";
$pass = "";
$db = "dataweb_4443";

$conn=mysqli_connect($host,$user,$pass,$db);

if (!$conn){
    die ('gagal terhubung ke database :'. mysqli_connect_error());
}