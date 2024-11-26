<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telpon = $_POST['no_telp'];
// menginput data ke database
mysqli_query($conn,"insert into pembeli (nama_pembeli,alamat,no_tlp) values('$nama','$alamat','$no_telpon')");
 
// mengalihkan halaman kembali ke index.php
header("location:pembeli.php");
 
?>