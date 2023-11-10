<?php
include 'proses.php';

$nama_mahasiswa = $_POST['nama'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$telp = $_POST['tlpn'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nama','$nim','$jenis_kelamin','$alamat','$agama','$tlpn')");


header("location:index.php");