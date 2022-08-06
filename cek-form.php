<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "jwd_form";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nama       = "";
$alamat     = "";
$tempat     = "";
$jk         = "";
$usia       = "";
$sukses     = "";
$error      = "";

if (isset($_POST['submit'])) { //untuk create
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $tempat     = $_POST['tempat'];
    $jk         = $_POST['jenis_kelamin'];
    $usia       = $_POST['usia'];

    $sql1   = "insert into form(nama,alamat,tempat,jenis_kelamin,usia) values ('$nama','$alamat','$tempat','$jk','$usia')";
    $q1     = mysqli_query($koneksi, $sql1);
}
?>