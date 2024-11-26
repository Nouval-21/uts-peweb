<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$harga = $_POST['harga_jual'];
$tanggal = $_POST['tanggal_kadaluarsa'];
// menginput data ke database
mysqli_query($conn,"insert into obat (nama,harga_jual,tanggal_kadaluarsa) values('$nama','$harga','$tanggal')");
 
// mengalihkan halaman kembali ke index.php
header("location:obat.php");
 
?>